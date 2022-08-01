<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\User;
use App\Auction;
use App\Favouriteauction;
use App\AuctionBidder;
use App\Settings;
use App\Payment;
use App\Country;


class BidderController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * [billingAddress description]
     * @return [type] [description]
     */
    public function billingAddress()
    {
        if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $route = Route::getFacadeRoot()->current()->uri();
        $data['route'] = $route;

        $user = \Auth::user();
        $data['countries']  = Country::getCountryOptions();
        
        $data['title']         = getPhrase('billing_address');
        $data['active_class']  = 'user_management';

        $data['layout']        = getLayOut();
        $data['record']        = $user;

        return view('bidder.billing_address', $data);
    }

    /**
     * [updateBillingDetails description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function updateBillingDetails(Request $request)
    {
        if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $record = \Auth::user();

        if ($isValid = $this->isValidRecord($record))
         return redirect($isValid);

        $validation = [
        'billing_name'      => 'bail|required|max:20|',
        'billing_phone'     => 'bail|required|max:20',
        'billing_country'   => 'bail|required',
        'billing_state'     => 'bail|required',
        'billing_city'      => 'bail|required'
        ];

        if (!isEligible($record->slug))
          return back();

        $this->validate($request, $validation);


        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record->billing_name    = $request->billing_name;
        $record->billing_phone   = $request->billing_phone;
        $record->billing_email   = $request->billing_email;
        $record->billing_country = $request->billing_country;
        $record->billing_state   = $request->billing_state;
        $record->billing_city    = $request->billing_city;
        $record->billing_address    = $request->billing_address;

        $record->save();
       
        flash('success','record_updated_successfully', 'success');
        return redirect(URL_USER_BILLING_ADDRESS);

    }


    /**
     * [shippingAddress description]
     * @return [type] [description]
     */
    public function shippingAddress()
    {
        if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $route = Route::getFacadeRoot()->current()->uri();
        $data['route'] = $route;

        $user = \Auth::user();
        $data['countries']  = Country::getCountryOptions();
        
        $data['title']         = getPhrase('shipping_address');
        $data['active_class']  = 'user_management';

        $data['layout']        = getLayOut();
        $data['record']        = $user;

        return view('bidder.shipping_address', $data);
    }

    /**
     * [updateShippingDetails description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function updateShippingDetails(Request $request)
    {
        if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $record = \Auth::user();

        if ($isValid = $this->isValidRecord($record))
         return redirect($isValid);

        $validation = [
        'shipping_name'      => 'bail|required|max:20|',
        'shipping_phone'     => 'bail|required|max:20',
        'shipping_country'   => 'bail|required',
        'shipping_state'     => 'bail|required',
        'shipping_city'      => 'bail|required'
        ];

        if (!isEligible($record->slug))
          return back();

        $this->validate($request, $validation);

         if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }
        

        $record->shipping_name    = $request->shipping_name;
        $record->shipping_phone   = $request->shipping_phone;
        $record->shipping_email   = $request->shipping_email;
        $record->shipping_country = $request->shipping_country;
        $record->shipping_state   = $request->shipping_state;
        $record->shipping_city    = $request->shipping_city;
        $record->shipping_address = $request->shipping_address;

        $record->save();
       
        flash('success','record_updated_successfully', 'success');
        return redirect(URL_USER_SHIPPING_ADDRESS);

    }

    /**
     * [favAuctions description]
     * @return [type] [description]
     */
    public function favAuctions()
    {
    	if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $user = \Auth::user();

        $auctions = $user->getBidderFavAuctions();
       
        $data['title']              = getPhrase('favourite_auctions');
        $data['active_class']       = 'auctions';

        $data['layout']        = getLayOut();
        $data['datatable']     = TRUE;
        $data['auctions']      = $auctions;

        return view('bidder.auctions.fav_auctions', $data);
    }


    public function removeFavAuction(Request $request)
    {

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $fav_id = $request->remove_fav_id;
       
        if ($fav_id) {
            $fav_auction = Favouriteauction::findOrFail($fav_id);
            if ($fav_auction) {

                 $fav_auction->delete();
                 flash('success','record_removed_from_favourites', 'success'); 
            } else {
                flash('error','record_not_found', 'error'); 
            }
        } else {
            flash('error','invalid_operation', 'error'); 
        }
        return redirect(URL_USERS_FAV_AUCTIONS);
    }

    /**
     * [myAuctions description]
     * @return [type] [description]
     */
    public function myAuctions()
    {
        if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $user = \Auth::user();

        $auctions = $user->getBidderParicipatedAuctions();
        // dd($auctions);
        $data['title']              = getPhrase('my_auctions');
        $data['active_class']       = 'auctions';

        $data['layout']        = getLayOut();
        $data['datatable']     = TRUE;
        $data['auctions']      = $auctions;

        return view('bidder.auctions.my_auctions', $data);
    }

    /**
     * [boughtAuctions description]
     * @return [type] [description]
     */
    public function boughtAuctions()
    {
        if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $user = \Auth::user();

        $auctions = $user->getBidderBoughtAuctions();
        // dd($auctions);
        $data['title']              = getPhrase('bought_auctions');
        $data['active_class']       = 'auctions';

        $data['layout']        = getLayOut();
        $data['datatable']     = TRUE;
        $data['auctions']      = $auctions;

        return view('bidder.auctions.bought_auctions', $data);
    }

    /**
     * [paymentsHistory description]
     * @return [type] [description]
     */
    public function paymentsHistory()
    {
        if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $user = \Auth::user();

        $records = $user->getBidderPayments();
        // dd($records);
        $data['title']              = getPhrase('payment_history');
        $data['active_class']       = 'payments';

        $data['layout']        = getLayOut();
        $data['datatable']     = TRUE;
        $data['records']      = $records;

        return view('bidder.payments.payment_history', $data);
    }

    /**
     * [paymentDetails description]
     * @param  [type] $slug [description]
     * @return [type]       [description]
     */
    public function paymentDetails($slug) 
    {
        if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $payment = Payment::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($payment))
         return redirect($isValid);

        $auction = Auction::where('id',$payment->auction_id)->first();

       
        $data['record']       = $payment;
        $data['auction']      = $auction;
        
        $data['breadcrumb']   = TRUE;
 
        $data['title']         = getPhrase('payment_details');
        $data['active_class']       = 'payments';

        $data['layout']        = getLayOut();
      
         return view('bidder.payments.payment_details', $data);

    }

    /**
     * [bidPaymentConfirm description]
     * @param  [type] $slug [description]
     * @return [type]       [description]
     */
    public function bidPaymentConfirm($slug)
    {

        if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $currentUser = \Auth::user();

        if (!checkBillingAddress() || !checkShippingAddress()) {

            flash('error','please_update_billing_and_shipping_details_to_continue', 'error');
            return redirect(URL_DASHBOARD);
        } 


        if ($currentUser) {

            //check is user is bidder
            if ($currentUser->role_id!=getRoleData('bidder')) {
                flash('error','please_login_as_bidder_to_continue', 'error');
                return redirect(URL_DASHBOARD);
            }


        } else {
            flash('error','please_login_to_continue', 'error');
            return redirect(URL_HOME);
        }


        $auctionbidder = AuctionBidder::where('slug',$slug)->first();
        
        if (count($auctionbidder)) {
            
            $bidpayment = bidpayment($auctionbidder->id);

            if ($bidpayment) {

                //auction record //seller info //highest bid
                $record = Auction::join('users','auctions.user_id','users.id')
                                 ->join('auctionbidders','auctions.id','auctionbidders.auction_id')
                                 ->join('bidding','auctionbidders.id','bidding.ab_id')
                                 ->leftJoin('categories','auctions.category_id','categories.id')
                                 ->leftJoin('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                 ->select(['auctions.*','categories.category','sub_catogories.sub_category','users.username','users.email','users.phone','bidding.bid_amount'])
                                 ->where('auctionbidders.id',$auctionbidder->id)
                                 ->orderBy('bidding.id','desc')
                                 ->first();

                if (count($record)) {
                    //payment gateways
                    
                    $payment_modules  = Settings::where('slug', 'module')->get()->first();
                     

                    $payment=false;//is any payment gateway available
                    if (($payment_modules)) {

                        $settings_data = getArrayFromJson($payment_modules->settings_data);
                        
                       
                        $payu_module = $settings_data['payu']->value;
                        $payu_record = Settings::where('slug','payu')->first();

                        $paypal_module = $settings_data['paypal']->value;
                        $paypal_record = Settings::where('slug','paypal')->first();

                        $stripe_module = $settings_data['stripe']->value;
                        $stripe_record = Settings::where('slug','stripe')->first();

                        if (($payu_module=='1' && count($payu_record)) || ($paypal_module=='1' && count($paypal_record)) || ($stripe_module=='1' && count($stripe_record)) ) {
                            $payment=true;
                        }

                        
                        if ($payment) {

                            $data['user']          = $currentUser;

                            $data['active_class']   = 'auctions';

                            $data['auctionbidder']  = $auctionbidder;
                            $data['record']         = $record;
                            $data['payu_record']    = $payu_record;
                            $data['paypal_record']  = $paypal_record;
                            $data['stripe_record']  = $stripe_record;
                            $data['layout']         = getLayOut();
                            $data['title']          = getPhrase('bid_payment');

                            $data['breadcrumb']     = TRUE;
    
                            return view('home.payment.bid_payment', $data);

                        } else {
                            flash('info','payment_gateways_not_available_please_contact_admin', 'info');
                            return redirect(URL_BIDDER_AUCTIONS);
                        }
                       
                    } else {
                        flash('info','payment_gateways_not_available_please_contact_admin', 'info');
                        return redirect(URL_BIDDER_AUCTIONS);
                    }
                } else {
                    flash('error','auction_bid_not_found', 'error');
                    return redirect(URL_BIDDER_AUCTIONS);
                }
            } else {
                flash('error','invalid_operation', 'error');
                return redirect(URL_BIDDER_AUCTIONS);
            }
        } else {
            flash('error','invalid_operation', 'error');
            return redirect(URL_BIDDER_AUCTIONS);
        }

    }


    /**
     * [auctionPaymentConfirm description]
     * @param  [type] $slug [description]
     * @return [type]       [description]
     */
    public function auctionPaymentConfirm($slug) 
    {   
        if (!checkRole(getUserGrade(2)))
        {
            prepareBlockUserMessage();
            return back();
        }
        
        $currentUser = \Auth::user();

        
        if ($currentUser) {

            if (!checkBillingAddress() || !checkShippingAddress()) {
                flash('error','please_update_billing_and_shipping_details_to_continue', 'error');
                return redirect(URL_DASHBOARD);
            } 

            //check is user is bidder
            if ($currentUser->role_id!=getRoleData('bidder')) {
                flash('error','please_login_as_bidder_to_continue', 'error');
                return redirect(URL_HOME);
            }

        } else {
            flash('error','please_login_to_continue', 'error');
            return redirect(URL_HOME);
        }

        //auction record - is it buynow item
        //check any other bidder already bought
        //check current logged in user is bidder or NOT
        $auction = Auction::where('slug',$slug)
                            ->where('is_buynow',1)
                            ->where('buy_now_price','>',0)
                            ->first();
       
        if (count($auction)) {

            $payments = Payment::where('auction_id',$auction->id)
                                ->where('payment_for',PAYMENT_FOR_BUY_AUCTION)
                                ->where('payment_status',PAYMENT_STATUS_SUCCESS)
                                ->get();

            if (count($payments)) {

                flash('error','someone_has_already_bought_this_item_please_contact_admin', 'error');
                return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);

            } else {

                $payment_modules  = Settings::where('slug', 'module')->get()->first();
                $payment=false;//is any payment gateway available

                if (count($payment_modules)) {

                    $settings_data = getArrayFromJson($payment_modules->settings_data);
                    

                    $payu_module = $settings_data['payu']->value;
                    $payu_record = Settings::where('slug','payu')->first();

                    $paypal_module = $settings_data['paypal']->value;
                    $paypal_record = Settings::where('slug','paypal')->first();

                    $stripe_module = $settings_data['stripe']->value;
                    $stripe_record = Settings::where('slug','stripe')->first();

                    if (($payu_module=='1' && count($payu_record)) || ($paypal_module=='1' && count($paypal_record)) || ($stripe_module=='1' && count($stripe_record)) ) {
                        $payment=true;
                    }
                    
                   
                    
                    if ($payment) {

                        $data['record']         = $auction;
                        $data['payu_record']    = $payu_record;
                        $data['paypal_record']  = $paypal_record;
                        $data['stripe_record']  = $stripe_record;
                        $data['layout']         = getLayOut();
                        $data['title']          = getPhrase('auction_payment');
                        $data['active_class']   = 'auctions';
                        $data['user']           = $currentUser;

                        $data['breadcrumb']     = TRUE;

                        return view('home.payment.auction_payment', $data);

                    } else {

                        flash('info','payment_gateways_not_available_please_contact_admin', 'info');
                        return redirect(URL_DASHBOARD);
                    }
                       
                } else {

                    flash('info','payment_gateways_not_available_please_contact_admin', 'info');
                    return redirect(URL_DASHBOARD);
                }

            }

        } else {

            flash('error','auction_record_not_found_please_contact_admin', 'error');
            return redirect(URL_DASHBOARD);
        }                     

    }


    /**
     * [isValidRecord description]
     * @param  [type]  $record [description]
     * @return boolean         [description]
     */
    public function isValidRecord($record)
    {
        if ($record === null) {
            flash('Ooops...!', getPhrase("record_not_found"), 'error');
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
        return URL_DASHBOARD;
    }




    /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_DASHBOARD;
       else
          return false;
    }

}
