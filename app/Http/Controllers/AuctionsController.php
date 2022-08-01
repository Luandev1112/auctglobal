<?php

namespace App\Http\Controllers;

use App\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
// use App\Http\Requests\Admin\StoreContentPagesRequest;
// use App\Http\Requests\Admin\UpdateContentPagesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use App\User;

use Input;
use Image;
use App\ImageSettings;
use File;
use Response;
use App\AuctionImages;
use App\AuctionBidder;
use Exception;

class AuctionsController extends Controller
{
    use FileUploadTrait;

     public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Display a listing of ContentPage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(!checkRole(getUserGrade(4)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $user = \Auth::user();
      

        $where = array();
        if (checkRole(['seller']))
            $where = array('auctions.user_id'=>$user->id);

        

        $auctions = Auction::join('users','auctions.user_id','users.id')
                            ->join('users as created_by', 'auctions.created_by_id', 'created_by.id')
                            ->select(['auctions.id','auctions.slug','auctions.image','auctions.reserve_price','auctions.title','auctions.auction_status','auctions.admin_status','auctions.start_date','auctions.end_date','auctions.live_auction_date','auctions.live_auction_start_time','auctions.live_auction_end_time','users.username','users.slug as seller_slug','created_by.username as created_by'])
                            ->where($where)
                            ->orderBy('auctions.id','desc')
                            ->get();
      

        $data['title']              = getPhrase('auctions');
        $data['active_class']       = 'auctions';

        $data['layout']        = getLayOut();

        $data['auctions']      = $auctions;

        return view('admin.auctions.index', $data);
    }

    /**
     * Show the form for creating new ContentPage.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(!checkRole(getUserGrade(4)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $data['title']        = getPhrase('auctions');
        $data['active_class'] = 'auctions';
        $data['record']       = FALSE;

        $users = Auction::getSellerOptions();
        $data['users'] = $users;


        $categories = Auction::getActiveCategoryOptions();
        $data['categories'] = $categories;


        $data['layout']        = getLayOut();

        return view('admin.auctions.add-edit', $data);
    }

    /**
     * Store a newly created ContentPage in storage.
     *
     * @param  \App\Http\Requests\StoreContentPagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!checkRole(getUserGrade(4)))
        {
            prepareBlockUserMessage();
            return back();
        }

         $columns = array(
         'title'            => 'bail|required|max:100',
         'category_id'      => 'bail|required',
         'sub_category_id'  => 'bail|required',
         'start_date'       => 'bail|required',
         'end_date'         => 'bail|required',
         'reserve_price'    => 'bail|required',
         'description'      => 'bail|required',
        );

        if (checkRole(['admin'])) {
          $columns['auction_status'] = 'bail|required';
          $columns['admin_status']   = 'bail|required';
          $columns['user_id']       = 'bail|required';
        }

        $is_it_bid_increment = $request->is_bid_increment;
        if ($is_it_bid_increment==1) {
          $columns['bid_increment'] = 'bail|required';
        }


        $is_it_buynow = $request->is_buynow;
        if ($is_it_buynow==1) {
          $columns['buy_now_price'] = 'bail|required';
        }

        //live auction
        $live_auction_date=null;
        if ($request->live_auction_date!='') {
            $live_auction_date = date('Y-m-d', strtotime($request->live_auction_date));

            $columns['live_auction_start_time'] = 'bail|required';
            $columns['live_auction_end_time']   = 'bail|required|after:live_auction_start_time';
        }

        $this->validate($request,$columns);



        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $logged_in_user= Auth::user();


        $record = new Auction();

        $title = $request->title;

        $record->title = $title;
        $record->slug                   = $record->makeSlug($title, TRUE);


        if (checkRole(['admin'])) {

            $record->user_id                = $request->user_id;
            $record->auction_status         = $request->auction_status;
            $record->admin_status           = $request->admin_status;

        } else {

            $record->user_id                = $logged_in_user->id;
            $record->auction_status         = 'new';
            $record->admin_status           = 'pending';
        }


        $record->category_id            = $request->category_id;
        $record->sub_category_id        = $request->sub_category_id;

        $record->start_date             = date('Y-m-d H:i:s',strtotime($request->start_date));
        $record->end_date               = date('Y-m-d H:i:s',strtotime($request->end_date));

        $record->reserve_price          = $request->reserve_price;

        $record->minimum_bid            = $request->minimum_bid;
       
       

        $record->is_bid_increment       = $request->is_bid_increment;
        if ($is_it_bid_increment==1)
          $record->bid_increment        = $request->bid_increment;
        else
          $record->bid_increment        = null;



        $record->description            = $request->description;
        $record->shipping_conditions    = $request->shipping_conditions;

        $record->international_shipping = $request->international_shipping;

        $record->shipping_terms         = $request->shipping_terms;

        $record->make_featured          = $request->make_featured;



        $record->is_buynow              = $request->is_buynow;
        if ($is_it_buynow==1)
          $record->buy_now_price = $request->buy_now_price;
        else
          $record->buy_now_price = null;
       

        $record->created_by_id          = $logged_in_user->id;
        $record->last_updated_by = null;


        //auction settings
        
      /*  $record->listing_type       = getSetting('listing_type','auction_settings');
        if ($record->listing_type=='free')
            $record->listing_cost   = null;
        elseif ($record->listing_type=='paid')
            $record->listing_cost   = getSetting('listing_cost','auction_settings');

        
        $record->is_seller_paid_listing_cost = 'No';*/

        $record->admin_commission_type = getSetting('admin_commission_type','auction_settings');
        $record->commission_value      = getSetting('commission_value','auction_settings');
        
        // $record->is_seller_paid_commission_value = 'No';

        //live auction date, start time, end time
        $record->live_auction_date          = $live_auction_date;
        $record->live_auction_start_time    = $request->live_auction_start_time;
        $record->live_auction_end_time      = $request->live_auction_end_time;


        if(!env('DEMO_MODE')) {

            if($request->hasFile('image'))
            {
                $record->image = $this->processUpload($request,$record);
            }

        }


        $record->save();

        $message = 'record_added_successfully';
        try {
            if (!env('DEMO_MODE')) {

                $role = getRoleData($logged_in_user->role_id);
                
                if ($role=='admin') {

                    $seller = getUserRecord($record->user_id);
                    //db and email notification to seller
                    $seller->notify(new \App\Notifications\NewAuctionPosted($seller,'seller',$record));

                } elseif ($role=='seller') {

                    $admin = User::where('role_id','=','1')->first();
                    
                    //db and email notification to admin
                    $admin->notify(new \App\Notifications\NewAuctionPosted($admin,'admin',$record, $logged_in_user->username));

                }
            }

        } catch(Exception $ex) {

            $message = getPhrase('record_added_successfully ');
            $message .= getPhrase('\ncannot_send_email_to_user, please_check_your_server_settings');
        }


        flash('success',$message, 'success');
        return redirect(URL_LIST_AUCTIONS);
    }


    /**
     * Show the form for editing ContentPage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        if(!checkRole(getUserGrade(4)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $data['title']        = getPhrase('edit');
        $data['active_class'] = 'auctions';

        $auction = Auction::getRecordWithSlug($slug);
        
        if ($isValid = $this->isValidRecord($auction))
             return redirect($isValid);
       

        $users = Auction::getSellerOptions();
        $data['users'] = $users;

        $categories = Auction::getCategoryOptions();
        $data['categories'] = $categories;


        $data['record']   = $auction;

        $data['layout']   = getLayOut();

        return view('admin.auctions.add-edit', $data);
    }

    /**
     * Update ContentPage in storage.
     *
     * @param  \App\Http\Requests\UpdateContentPagesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

        if(!checkRole(getUserGrade(4)))
        {
            prepareBlockUserMessage();
            return back();
        }
      
        $record = Auction::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);


        $columns = array(
         'title'            => 'bail|required|max:100',
         'category_id'      => 'bail|required',
         'sub_category_id'  => 'bail|required',
         'start_date'       => 'bail|required',
         'end_date'         => 'bail|required',
         'reserve_price'    => 'bail|required',
         'description'      => 'bail|required',
        );


        if (checkRole(['admin'])) {

            $columns['auction_status']  = 'bail|required';
            $columns['admin_status']    = 'bail|required';
            $columns['user_id']         = 'bail|required';
        }




        $is_it_bid_increment = $request->is_bid_increment;
        if ($is_it_bid_increment==1) {
          $columns['bid_increment']  = 'bail|required';
        }
    

        $is_it_buynow = $request->is_buynow;
        if ($is_it_buynow==1) {
          $columns['buy_now_price']  = 'bail|required';
        }

        //live auction
        $live_auction_date=null;
        if ($request->live_auction_date!='') {
            $live_auction_date = date('Y-m-d', strtotime($request->live_auction_date));

            $columns['live_auction_start_time'] = 'bail|required';
            $columns['live_auction_end_time']   = 'bail|required|after:live_auction_start_time';
        }

        $this->validate($request,$columns);


        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }


        $logged_in_user= Auth::user();

        if (checkRole(['admin'])) {

            $record->user_id                = $request->user_id;
            $record->auction_status         = $request->auction_status;
            $record->admin_status           = $request->admin_status;


            //auction settings
            // $record->is_seller_paid_listing_cost     = $request->is_seller_paid_listing_cost;
            // $record->is_seller_paid_commission_value = $request->is_seller_paid_commission_value;

        } 



        $title = $request->title;

        /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($title != $record->title)
            $record->slug = $record->makeSlug($title, TRUE);


        $record->title         = $title;

       
        $record->category_id            = $request->category_id;
        $record->sub_category_id        = $request->sub_category_id;

        $record->start_date             = date('Y-m-d H:i:s',strtotime($request->start_date));
        $record->end_date               = date('Y-m-d H:i:s',strtotime($request->end_date));

        $record->reserve_price          = $request->reserve_price;

        $record->minimum_bid            = $request->minimum_bid;
        
      
        $record->description            = $request->description;
        $record->shipping_conditions    = $request->shipping_conditions;

        $record->international_shipping = $request->international_shipping;

        $record->shipping_terms         = $request->shipping_terms;

        $record->make_featured          = $request->make_featured;
      
        

        $record->is_bid_increment       = $request->is_bid_increment;
        if ($is_it_bid_increment==1)
          $record->bid_increment        = $request->bid_increment;
        else
          $record->bid_increment        = null;



        $record->is_buynow              = $request->is_buynow;
        if ($is_it_buynow==1)
          $record->buy_now_price = $request->buy_now_price;
        else
          $record->buy_now_price = null;

        
        $record->last_updated_by = $logged_in_user->id;
        

        //live auction date, start time, end time
        $record->live_auction_date          = $live_auction_date;
        $record->live_auction_start_time    = $request->live_auction_start_time;
        $record->live_auction_end_time      = $request->live_auction_end_time;


        if (!env('DEMO_MODE')) {
            if ($request->hasFile('image')) {
                $old_image = $record->image;
                $record->image = $this->processUpload($request,$record);
                if ($old_image!='') {
                    $this->deleteFile($old_image, AUCTION_IMAGES_PATH);
                    $this->deleteFile($old_image, AUCTION_IMAGES_THUMBPATH);
                }
            }
        }


        $record->save();

        $message = 'record_updated_successfully';

        try {
            if (!env('DEMO_MODE')) {

               $role = getRoleData($logged_in_user->role_id);

                if ($role=='admin') {

                    $seller = getUserRecord($record->user_id);
                    //db and email notification to seller
                    $seller->notify(new \App\Notifications\AuctionUpdatedNotification($seller,'seller',$record));

                } elseif ($role=='seller') {

                    $admin = User::where('role_id','=','1')->first();
                    
                    //db and email notification to admin
                    $admin->notify(new \App\Notifications\AuctionUpdatedNotification($admin,'admin',$record, $logged_in_user->username));

                }
            }

        } catch(Exception $ex) {

            $message = getPhrase('record_updated_successfully ');
            $message .= getPhrase('\ncannot_send_email_to_user, please_check_your_server_settings');
        }

        flash('success',$message, 'success');
        return redirect(URL_LIST_AUCTIONS);
    }


    public function deleteFile($record, $path, $is_array = FALSE)
    {

        $destinationPath      = $path;
      
        $files = array();
        $files[] = $destinationPath.$record;

        File::delete($files);
    }

    /**
     * Display ContentPage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        if(!checkRole(getUserGrade(4)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $record = Auction::join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id', 'sub_catogories.id')
                        ->join('users','auctions.user_id','users.id')
                        ->join('users as created_by','auctions.created_by_id','created_by.id')
                        ->leftJoin('users as updated_by','auctions.last_updated_by','updated_by.id')
                        ->select(['auctions.*','users.username','created_by.username as created_by','categories.category','sub_catogories.sub_category', 'updated_by.username as updated_by_name'])
                        ->where('auctions.slug',$slug)->first();


        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);
         
        $data['title']        = getPhrase('view');
        $data['active_class'] = 'auctions';
        
        $data['layout'] = getLayOut();

        $data['record'] = $record;


        //auction images
        $uploads_data = [];

        foreach($record->getAuctionImages as $upload)
        {
              $dta['id']    = $upload->id;
              $dta['name']  = $upload->original_filename;
              $dta['filename']  = $upload->filename;
              $dta['size']  = $upload->size;
              $dta['type']  =  $upload->type;
              $uploads_data[] = $dta;
        }
        $data['documents'] = $uploads_data;

        $uploads_data = json_encode($uploads_data);

        $data['previous_uploads']      = $uploads_data;



        //get auction bidders
        $bidders = $record->getAuctionBidders();
        $data['bidders'] = $bidders;


        //get auction payment
        $payment = $record->getAuctionPayment();
        $data['payment'] = $payment;

        //get buy now auction payment
        $buy_now_payment = $record->getBuyNowAuctionPayment();
        $data['buy_now_payment'] = $buy_now_payment;


        $send_email=true;
        if (count($payment) || count($buy_now_payment))
            $send_email=false;
        
        $data['send_email'] = $send_email;

        return view('admin.auctions.show', $data);
    }


    /**
     * Remove ContentPage from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content_page = ContentPage::findOrFail($id);
        $content_page->delete();

        return redirect()->route('admin.content_pages.index');
    }

    /**
     * Delete all selected ContentPage at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        /*if ($request->input('ids')) {
            $entries = ContentPage::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }*/


        $auction = Auction::where('id',$request->id)->first();

        if ($isValid = $this->isValidRecord($auction)) {

            $response['status']  = 0;
            $response['message'] = getPhrase('record_not_found');
            return json_encode($response);
        }
        

        if ($redirect = $this->check_isdemo()) {
            
            $response['status']  = 0;
            $response['message'] = getPhrase('crud_operations_disabled_in_demo');
            return json_encode($response);
        }


        if ($request->id) {

            try {
                  if(!env('DEMO_MODE')) {
                     
                    $entries = Auction::where('id', $request->id)->get();

                        foreach ($entries as $entry) {
                            $entry->delete();
                        }

                  }
                $response['status'] = 1;
                $response['message'] = getPhrase('record_deleted_successfully');

            }
            catch ( \Illuminate\Database\QueryException $e) {

                   $response['status'] = 0;
                   if(getSetting('show_foreign_key_constraint','module'))
                    $response['message'] =  $e->errorInfo;
                   else
                    $response['message'] =  getPhrase('this_record_is_in_use_in_other_modules');
            }  

            
        } else {

            $response['status'] = 0;
            $response['message'] = getPhrase('invalid_operation');
        }

        return json_encode($response);
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
      return URL_LIST_AUCTIONS;
    }


    /**
      * This method returns the sub categories based on selected category
      * @param  [type] $request [description]
      * @return [type] array    [description]
      */
     public function getSubCategories(Request $request)
     {
        $category_id = $request->category_id;

        $sub_categories = \App\SubCatogory::select('id','sub_category')
                    ->where('category_id','=',$category_id)
                    ->get();

        return json_encode(array('sub_categories'=>$sub_categories));
     }


     /**
      * [processUpload description]
      * @param  Request $request [description]
      * @param  [type]  $record  [description]
      * @return [type]           [description]
      */
    protected function processUpload(Request $request, $record)
    {

        if(env('DEMO_MODE')) {
            return 'demo';
        }

         $fileName=null;

         if ($request->hasFile('image')) {

          $random_name = str_random(15);
          
          $imageObject = new ImageSettings();
          
          $destinationPath      = $imageObject->getAuctionImagePath();
          $destinationPathThumb = $imageObject->getAuctionImageThumbnailpath();
            
         
          $fileName = $record->id.'_'.$random_name.'.'.$request->image->guessClientExtension();
          
          $request->file('image')->move($destinationPath, $fileName);
         
      
         /* Image::make($destinationPath.$fileName)->fit($imageObject->getAuctionImageSize())->save($destinationPath.$fileName);

          Image::make($destinationPath.$fileName)->fit($imageObject->getAuctionThumbnailSize())->save($destinationPathThumb.$fileName);*/

          Image::make($destinationPath.$fileName)->fit(950,650)->save($destinationPath.$fileName);

          Image::make($destinationPath.$fileName)->fit(550,350)->save($destinationPathThumb.$fileName);
         
          

          return $fileName;
        }
    }


     /**
     * This method will store the auction images uploaded by ajax call
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function uploadImages(Request $request,$auction_slug)
    {
        
        if (!checkRole(getUserGrade(4)))
        {
            prepareBlockUserMessage();
            return back();
        }


        $auction  = Auction::getRecordWithSlug($auction_slug);
        if ($isValid = $this->isValidRecord($auction))
             return redirect($isValid);


        $input = $request->all();
 
        $saved_id = [];
        $file_name = 'file';
     

        $upload_success = 0;
        

       if ($request->hasFile($file_name)) {

            $filename = $request->file('file');

            foreach($filename as $n => $file) {
              
              $filenames = $filename[$n]->getClientOriginalName();
              $fileName = $auction->id.'_'.$filename[$n]->getClientOriginalName();
              
               $directory = AUCTION_IMAGES_PATH;
               
               $upload_success= $filename[$n]->move($directory, $fileName);

               $mime_type = File::mimeType($directory.$fileName);

               $img_upload = new AuctionImages();

               $img_upload->auction_id  = $auction->id;
               $img_upload->filename    = $fileName;
               $img_upload->size        = $filename[$n]->getClientSize();
               $img_upload->type        = $mime_type;
               $img_upload->original_filename = $filenames;
               /*$img_upload->width       = 950;
               $img_upload->height      = 650;*/

               $img_upload->save();

               $saved_id[] = $img_upload->id;
             }
       }
 

        if( $upload_success ) {
          return Response::json($saved_id, 200);
        } else {
          return Response::json('error', 400);
        }
    }

    /**
     * [deleteImage description]
     * @param  Request $request [description]
     * @param  [type]  $slug    [description]
     * @return [type]           [description]
     */
    public function deleteImage(Request $request, $slug)
    {
      $record = AuctionImages::where('id','=',$slug)->first();
      $result = false;

      if ($record)
      {
        $filename = $record->filename;
        $record->delete();
        File::delete(AUCTION_IMAGES_PATH.$filename);
        $result  = true;
      }

      if ($result)
      return Response::json('success', 200);
      else
      return Response::json('error', 400);
    }

    /**
     * [bidHistory description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function bidHistory(Request $request)
    {
       $id = $request->id;

       $records=array();
       if ($id) {
          $auctionbidder = AuctionBidder::getRecord($id);
          if (count($auctionbidder)) {
            $records = $auctionbidder->getBidHistory();
          }
       }

       return json_encode(array('records'=>$records));
    }


    /**
     * [sendEmailtoBidder description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function sendEmailtoBidder(Request $request)
    {

    
      // dd($request);

      //send email,db notification to bidder
      //send email,db notification to admin
      
        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }
      
      $auction_id = $request->auction_id;
      $auction = Auction::where('id',$auction_id)->first();

      if (count($auction)) {

          $auction_payment = $auction->getAuctionPayment();

          //check payment done
          if (count($auction_payment)) {
             flash('error','payment_already_done_for_this_auction', 'error');
             return redirect(URL_AUCTIONS_VIEW.$auction->slug);
          }

          //if payment not done

          $ab_id = $request->ab_id;

          $auctionbidder = AuctionBidder::join('users','auctionbidders.bidder_id','users.id')
                                         ->select(['auctionbidders.*','users.username'])
                                         ->where('auctionbidders.id',$ab_id)
                                         ->first();

          
          if (($auctionbidder)) {

              //check invoice sent to this bidder
              if ($auctionbidder->is_admin_sent_email=='Yes') {

                 flash('error','invoice_already_sent_to_this_bidder', 'error');
                 return redirect(URL_AUCTIONS_VIEW.$auction->slug);
              }



              $highestbid = $auctionbidder->getHighestBid();

              if (count($highestbid)) {

                $currency = getSetting('currency_code','site_settings');
                $all_rights_reserved  = getSetting('rights_reserved', 'site_settings');
                $city     = getSetting('site_city','site_settings');
                $country  = getSetting('site_country', 'site_settings');

                $date = date('Y-m-d');

                $bidder_name   = $auctionbidder->username;
                $auction_title = $auction->title;

                $bid_amount    = $highestbid->bid_amount;
                $site_title    = getSetting('site_title','site_settings');

                $admin_message          = $request->message;
                $payment_start_datetime = $request->sent_at;
                $payment_end_datetime   = $request->ended_at;

                $data = array('date'          => $date,
                              'bidder_name'   => $bidder_name,
                              'auction_title' => $auction_title,
                              'bid_amount'    => $bid_amount,
                              'site_title'    => $site_title,
                              'admin_message' => $admin_message,
                              'payment_start_datetime' => $payment_start_datetime,
                              'payment_end_datetime'   => $payment_end_datetime,
                              'image'          => $auction->image,
                              'currency'       => $currency,
                              'all_rights_reserved'=> $all_rights_reserved,
                              'city'          => $city,
                              'country'       => $country,
                              'auction_slug'    => $auction->slug,
                              'site_url'        => PREFIX,
                              'date'            => date('Y-m-d')
                          );


               $message='';
               try {
                    if (!env('DEMO_MODE')) {
                       $bidder = getUserRecord($auctionbidder->bidder_id);
                        //db and email notification to bidder 
                        $bidder->notify(new \App\Notifications\AuctionBidInvoiceNotification($bidder,'bidder',$data));


                        $admin = Auth::user()->where('role_id',1)->first();
                        //db and email notification to admin 
                        $admin->notify(new \App\Notifications\AuctionBidInvoiceNotification($admin,'admin',$data));
                    }

                } catch(Exception $ex) {

                    $message = getPhrase('invoice_not_sent_to_bidder');
                    $message .= getPhrase('\ncannot_send_email_to_user, please_check_your_server_settings');

                    flash('error',$message, 'error');
                    return redirect(URL_AUCTIONS_VIEW.$auction->slug);
                }
                


                //update auctionbidders table details
                $record = AuctionBidder::where('id',$ab_id)->first();
                $record->is_admin_sent_email  = 'Yes';
                $record->sent_at              = date('Y-m-d H:i:s');
                $record->pay_start_datetime   = date('Y-m-d H:i:s', strtotime($payment_start_datetime));
                $record->pay_end_datetime     = date('Y-m-d H:i:s', strtotime($payment_end_datetime));
                $record->is_bidder_paid       = 'No';

                $record->save();


                flash('success','invoice_sent_to_bidder_successfully', 'success');
                return redirect(URL_AUCTIONS_VIEW.$auction->slug);


              } else {
                  flash('error','bidder_highest_bid_not_found', 'error');
                  return redirect(URL_AUCTIONS_VIEW.$auction->slug);
              }
          } else {
             flash('error','auction_bidder_not_found', 'error');
             return redirect(URL_AUCTIONS_VIEW.$auction->slug);
          }
      } else {
        flash('error','auction_not_found', 'error');
        return redirect(URL_LIST_AUCTIONS);
      }

    }



    /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_LIST_AUCTIONS;
       else
          return false;
    }
}
