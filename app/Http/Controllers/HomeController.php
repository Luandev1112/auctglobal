<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


use App;
use Auth;
use App\User;
use DB;
use Artisan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   /* public function checkProcess()
    {

        $data['active_class']   = 'dashboard';
        
        $data['title']          = 'Test';


        return view('test', $data);
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['active_class']   = 'dashboard';
        $data['layout']         = getLayout();
        $data['title']          = getPhrase('home');

        /**
         * Check the role of user
         * Redirect the user as per the eligiblity
         */
        $user = getUserRecord();
        if (!$user)
          return view(URL_HOME);

        $role = getRole();
        
        
       
        if ($role=='admin') {

            $data['auctions_auction_status_data'] = (object)$this->getAuctionStatistics();

            $data['seller_auctions'] = (object)$this->sellerAuctionsStatistics();

            return view('admin.dashboard', $data);

        } elseif ($role=='seller') {

            $data['auctions_auction_status_data'] = (object)$this->getAuctionStatistics('seller',Auth::user()->id);

            return view('seller.dashboard', $data);

        } elseif ($role=='bidder') {

            // $data['breadcrumb']     = TRUE;
            
            $data['title']          = getPhrase('dashboard');
            
            return view('bidder.dashboard', $data);

        } else {
            return redirect(URL_HOME);
        }
    }


    /**
     * [getAuctionStatistics description]
     * @param  string $user_type [description]
     * @param  string $user_id   [description]
     * @return [type]            [description]
     */
    public function getAuctionStatistics($user_type='',$user_id='')
    {
        $paymentObject = new App\Auction();

        $payment_data = (object)$paymentObject->getAuctionsStatisticsCount($user_type,$user_id);
            

        $payment_dataset    = [$payment_data->new_count, $payment_data->opened_count, $payment_data->suspended_count, $payment_data->closed_count];


        $payment_labels     = [getPhrase('new'), getPhrase('opened'), getPhrase('suspended'), getPhrase('closed')];


        $payment_dataset_labels = [getPhrase('total')];


        $payment_bgcolor        = [getColor('',4),getColor('',9),getColor('',18), getColor('',28)];

        $payment_border_color   = [getColor('background',4),getColor('background',9),getColor('background',18), getColor('background',28)]; 

        $payments_stats['data']    = (object) array(
                                        'labels'            => $payment_labels,
                                        'dataset'           => $payment_dataset,
                                        'dataset_label'     => $payment_dataset_labels,
                                        'bgcolor'           => $payment_bgcolor,
                                        'border_color'      => $payment_border_color
                                        );

        $payments_stats['type']     = 'bar'; 
        $payments_stats['title']    = getPhrase('overall_statistics');

        return $payments_stats;
    }


    /**
     * [sellerAuctionsStatistics description]
     * @return [type] [description]
     */
    public function sellerAuctionsStatistics()
    {

      $auctionResultObject = new App\Auction();
      $usage = $auctionResultObject->getSellerAuctionsStatistics();


        $summary_dataset = [];
        $summary_labels = [];
        $summary_dataset_labels = [getPhrase('total')];
        $summary_bgcolor = [];
        $summary_border_color = []; 


        foreach($usage as $record)
        {
          $color_number = rand(0,999);;
          $summary_dataset[] = $record->total;
          $summary_labels[]  = getUserRecord($record->id)->username;
          $summary_bgcolor[] = getColor('',$color_number);
          $summary_border_color[] = getColor('background', $color_number);

        }

        $seller_stats['data']    = (object) array(
                                    'labels'            => $summary_labels,
                                    'dataset'           => $summary_dataset,
                                    'dataset_label'     => $summary_dataset_labels,
                                    'bgcolor'           => $summary_bgcolor,
                                    'border_color'      => $summary_border_color
                                    );
        $seller_stats['type'] = 'doughnut'; 
        $seller_stats['title'] = getPhrase('seller_auctions'); 
      
        return $seller_stats;
    }

    /**
     * [isValidRecord description]
     * @param  [type]  $record [description]
     * @return boolean         [description]
     */
    public function isValidRecord($record)
    {
      if ($record === null) {
        flash('Ooops...!', getPhrase("page_not_found"), 'error');
        return $this->getRedirectUrl();
       }

       return FALSE;
    }

    /**
     * [getRedirectUrl description]
     * @return [type] [description]
     */
    public function getRedirectUrl()
    {
      return PREFIX;
    }


   
}
