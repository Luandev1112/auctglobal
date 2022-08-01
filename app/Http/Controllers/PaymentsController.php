<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use \App;
use App\User;
use App\Auction;
use App\AuctionBidder;
use App\Settings;
use App\Bidding;
use DB;
use Auth;
use App\Paypal;
use App\Payment;
use Input;
use Softon\Indipay\Facades\Indipay;
use Carbon;



class PaymentsController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }


        $records = Payment::getAllPayments();

        $data['title']        = getPhrase('payments');
        $data['active_class'] = 'payments';
        $data['records']      = $records;
        $data['layout']       = getLayOut();

        return view('admin.payments.index', $data);

    }

    /**
     * [viewDetails description]
     * @param  [type] $slug [description]
     * @return [type]       [description]
     */
    public function viewDetails($slug)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }


        $record = Payment::leftJoin('users','payments.user_id','users.id')
                         ->select(['payments.*','users.username','users.slug as user_slug'])
                         ->where('payments.slug',$slug)->first();

        if($isValid = $this->isValidRecord($record))
         return redirect($isValid);

        $auction = Auction::where('id',$record->auction_id)->first();
        $data['auction']      = $auction;

        $data['title']        = getPhrase('payment_details');
        $data['active_class'] = 'payments';
        $data['record']       = $record;
        $data['layout']       = getLayOut();

        return view('admin.payments.show', $data);

    }


    /**
     * [paynow description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function paynow(Request $request)
    {

      if (!checkRole(getUserGrade(2)))
      {
          prepareBlockUserMessage();
          return back();
      }


      if (env('DEMO_MODE')) {

            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect(URL_DASHBOARD);
      }

        // dd($request);
        $payment_for        = $request->payment_for;
        $payment_gateway    = $request->payment_gateway;

        if ($payment_for==PAYMENT_FOR_BIDDING) {

            $ab_id = $request->ab_id;
            $auctionbidder = AuctionBidder::where('id',$ab_id)->first();

            if (count($auctionbidder)) {
                //check if anyone has paid 
                $auction = Auction::where('id',$auctionbidder->auction_id)->first();
                if (count($auction)) {

                    $bid_payment = $auction->getAuctionPayment();

                    if (count($bid_payment)) {
                        flash('error','other_bidder_has_already_paid_for_this_auction_please_contact_admin', 'error');
                        return redirect(URL_BIDDER_AUCTIONS);
                    }

                } else {

                    flash('error','auction_not_found', 'error');
                    return redirect(URL_BIDDER_AUCTIONS);
                }   
                

                //check his payment end time is valid 
                $bidpayment = bidpayment($auctionbidder->id);

                if ($bidpayment) {

                     if ($payment_gateway == 'payu') {

                            if(!getSetting('payu', 'module'))
                            {
                                flash('Ooops...!', 'this_payment_gateway_is_not_available', 'error');          
                                return back();
                            }

                            $token = $this->preserveBeforeSave($auctionbidder,$payment_gateway,$payment_for);

                            $config = config();
                            $payumoney = $config['indipay']['payumoney'];

                            $payumoney['successUrl'] = URL_PAYU_PAYMENT_SUCCESS.'?token='.$token;
                            $payumoney['failureUrl'] = URL_PAYU_PAYMENT_CANCEL.'?token='.$token;

                         
                            $user = \Auth::user();
                             $parameters = [
                                              'tid'       => $token,
                                              'order_id'  => '',
                                              'firstname' => $user->name,
                                              'email'     => $user->email,
                                              'phone'     => ($user->phone) ? $user->phone:'45612345678',
                                              'productinfo' => $auction->title,
                                              'amount'    => $request->bid_amount,
                                              'surl'      => URL_PAYU_PAYMENT_SUCCESS.'?token='.$token,
                                              'furl'      => URL_PAYU_PAYMENT_CANCEL.'?token='.$token,
                                           ];
                          
                          return Indipay::purchase($parameters);

                            // URL_PAYU_PAYMENT_SUCCESS
                            // URL_PAYU_PAYMENT_CANCEL
                        
                      } elseif ($payment_gateway=='paypal') {

                            if(!getSetting('paypal', 'module'))
                            {
                                flash('Ooops...!', 'this_payment_gateway_is_not_available', 'error');          
                                return back();
                            }

                            $token = $this->preserveBeforeSave($auctionbidder,$payment_gateway,$payment_for);


                            $paypal = new Paypal();
                            $paypal->config['return'] = URL_PAYPAL_PAYMENT_SUCCESS.'?token='.$token;
                            $paypal->config['cancel_return']= URL_PAYPAL_PAYMENT_CANCEL.'?token='.$token;
                            $paypal->invoice = $token;
                            
                            $paypal->add('Bid Payment', $request->bid_amount);

                            //ADD  item
                            $paypal->pay(); //Proccess the payment

                      } else {

                        return redirect(URL_BIDDER_AUCTIONS);
                      }


                } else {

                    flash('error','invalid_operation', 'error');
                    return redirect(URL_BIDDER_AUCTIONS);
                }

            } else {

                flash('error','auction_bid_not_found', 'error');
                return redirect(URL_BIDDER_AUCTIONS);
            }

        } elseif ($payment_for==PAYMENT_FOR_BUY_AUCTION) {
            
            $auction = Auction::where('id',$request->auction_id)
                            ->where('is_buynow',1)
                            ->where('buy_now_price','>',0)
                            ->first();

            if (count($auction)) {

                $redirect = URL_HOME_AUCTION_DETAILS.'/'.$auction->slug;

                $payments = Payment::where('auction_id',$auction->id)
                                ->where('payment_for',PAYMENT_FOR_BUY_AUCTION)
                                ->where('payment_status',PAYMENT_STATUS_SUCCESS)
                                ->get();

                if (count($payments)) {

                    flash('error','someone_has_already_bought_this_item_please_contact_admin', 'error');
                    return redirect($redirect);

                } else {

                    if ($payment_gateway == 'payu') {

                            if(!getSetting('payu', 'module'))
                            {
                                flash('Ooops...!', 'this_payment_gateway_is_not_available', 'error');          
                                return back();
                            }

                            $token = $this->preserveBeforeSave($auction,$payment_gateway,$payment_for);

                            $config = config();
                            $payumoney = $config['indipay']['payumoney'];

                            $payumoney['successUrl'] = URL_PAYU_PAYMENT_SUCCESS.'?token='.$token;
                            $payumoney['failureUrl'] = URL_PAYU_PAYMENT_CANCEL.'?token='.$token;

                         
                            $user = Auth::user();
                             $parameters = [
                                              'tid'       => $token,
                                              'order_id'  => '',
                                              'firstname' => $user->name,
                                              'email'     => $user->email,
                                              'phone'  => ($user->phone) ? $user->phone : '45612345678',
                                              'productinfo' => $auction->title,
                                              'amount'    => $auction->buy_now_price,
                                              'surl'      => URL_PAYU_PAYMENT_SUCCESS.'?token='.$token,
                                              'furl'      => URL_PAYU_PAYMENT_CANCEL.'?token='.$token,
                                           ];
                          
                          return Indipay::purchase($parameters);

                            // URL_PAYU_PAYMENT_SUCCESS
                            // URL_PAYU_PAYMENT_CANCEL
                        
                      } elseif ($payment_gateway=='paypal') {

                            if(!getSetting('paypal', 'module'))
                            {
                                flash('Ooops...!', 'this_payment_gateway_is_not_available', 'error');          
                                return back();
                            }

                            $token = $this->preserveBeforeSave($auction,$payment_gateway,$payment_for);


                            $paypal = new Paypal();
                            $paypal->config['return'] = URL_PAYPAL_PAYMENT_SUCCESS.'?token='.$token;
                            $paypal->config['cancel_return']= URL_PAYPAL_PAYMENT_CANCEL.'?token='.$token;
                            $paypal->invoice = $token;
                            
                            $paypal->add('Buy Auction', $auction->buy_now_price);

                            //ADD  item
                            $paypal->pay(); //Proccess the payment

                      } else {

                        return redirect($redirect);
                      }


                }

            } else {

                flash('error','auction_record_not_found_please_contact_admin', 'error');
                return redirect(URL_DASHBOARD);
            }


        } else {
            return redirect(URL_DASHBOARD);
        }

        // return redirect(URL_DASHBOARD);
    }


    /**
     * [preserveBeforeSave description]
     * @param  [type] $record          [description]
     * @param  [type] $payment_gateway [description]
     * @param  [type] $payment_for     [description]
     * @return [type]                  [description]
     */
    public function preserveBeforeSave($record,$payment_gateway,$payment_for) 
    {
        $currentUser = \Auth::user();
        if ($payment_for==PAYMENT_FOR_BIDDING) {

            
            $payment = new Payment();

            $payment->slug              = $payment::makeSlug(getHashCode());
            $payment->user_id           = $record->bidder_id;
            $payment->auction_id        = $record->auction_id;
            $payment->ab_id             = $record->id;
            $payment->payment_gateway   = $payment_gateway;
            $payment->payment_for       = $payment_for;
            $payment->paid_amount       = null;
            $payment->payment_status    = PAYMENT_STATUS_PENDING;


            $payment->billing_name      = $currentUser->billing_name;
            $payment->billing_email     = $currentUser->billing_email;
            $payment->billing_phone     = $currentUser->billing_phone;
            $payment->billing_country   = $currentUser->billing_country;
            $payment->billing_state     = $currentUser->billing_state;
            $payment->billing_city      = $currentUser->billing_city;
            $payment->billing_address   = $currentUser->billing_address;


            $payment->shipping_name      = $currentUser->shipping_name;
            $payment->shipping_email     = $currentUser->shipping_email;
            $payment->shipping_phone     = $currentUser->shipping_phone;
            $payment->shipping_country   = $currentUser->shipping_country;
            $payment->shipping_state     = $currentUser->shipping_state;
            $payment->shipping_city      = $currentUser->shipping_city;
            $payment->shipping_address   = $currentUser->shipping_address;


            $payment->save();

            return $payment->slug;


        } elseif ($payment_for==PAYMENT_FOR_BUY_AUCTION) {

            
            if (count($currentUser)) {

                $payment = new Payment();

                $payment->slug              = $payment::makeSlug(getHashCode());
                $payment->user_id           = $currentUser->id;
                $payment->auction_id        = $record->id;
                $payment->ab_id             = null;
                $payment->payment_gateway   = $payment_gateway;
                $payment->payment_for       = $payment_for;
                $payment->paid_amount       = null;
                $payment->payment_status    = PAYMENT_STATUS_PENDING;


                $payment->billing_name      = $currentUser->billing_name;
                $payment->billing_email     = $currentUser->billing_email;
                $payment->billing_phone     = $currentUser->billing_phone;
                $payment->billing_country   = $currentUser->billing_country;
                $payment->billing_state     = $currentUser->billing_state;
                $payment->billing_city      = $currentUser->billing_city;
                $payment->billing_address   = $currentUser->billing_address;


                $payment->shipping_name      = $currentUser->shipping_name;
                $payment->shipping_email     = $currentUser->shipping_email;
                $payment->shipping_phone     = $currentUser->shipping_phone;
                $payment->shipping_country   = $currentUser->shipping_country;
                $payment->shipping_state     = $currentUser->shipping_state;
                $payment->shipping_city      = $currentUser->shipping_city;
                $payment->shipping_address   = $currentUser->shipping_address;

                $payment->save();

                return $payment->slug;

            } else {

                flash('error','please_login_as_bidder_to_continue', 'error');
                return redirect(URL_HOME);
            }

        } else {

            return null;
        }
    }


    /**
     * [paypal_success description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function paypal_success(Request $request)
    {
        // dd($request);
        if (env('DEMO_MODE')) {
            flash('success', 'your_bid_payment_is_successfull', 'overlay');
        }

        $user = \Auth::user();
        $response = $request->all();

        $params = explode('?token=',$_SERVER['REQUEST_URI']) ;
        if (!count($params))
            return FALSE;
        
        $slug = $params[1];

        $message='';
        if($this->paymentSuccess($request))
        {
            //PAYMENT RECORD UPDATED SUCCESSFULLY
            //PREPARE SUCCESS MESSAGE
          $message .= 'your_bid_payment_is_successfull';

           try {
            //BIDDING
            //SEND EMAIL AND DB NOTIFICATION TO ADMIN
            //SEND EMAIL NOTIFICATION TO BIDDER
            //
            
            //AUCTION BOUGHT
            //EMAIL AND DB NOTIFICATION TO ADMIN
            //EMAIL NOTIFICATION TO BIDDER

            /* sendEmail($email_template, array('username'=>$user->name, 
              'plan' => $package_name,
              'to_email' => $user->email));*/

            $payment_record = Payment::where('slug', '=', $slug)
                                      ->where('payment_status','=','success')
                                      ->first();

            if (count($payment_record)) {

                $user = User::where('id',$payment_record->user_id)->first();
                $auction = Auction::where('id',$payment_record->auction_id)->first();

                $total_data = array('payment_record'=>$payment_record,
                                    'user'=>$user,
                                    'auction'=>$auction
                                    );
                
                

                if ($payment_record->payment_for=='bidding') {

                    //SEND EMAIL AND DB NOTIFICATION TO ADMIN
                    $admin = User::where('role_id',getRoleData('admin'))->first();
                    if ($admin) {
                    $admin->notify(new \App\Notifications\AuctionBidPayment($user,$auction,$payment_record,'admin'));

                    //admin-db notification
                    $admin->notify(new \App\Notifications\AuctionBidPaymentAdmindb($user,$payment_record->paid_amount));
                    }

                    
                    //SEND EMAIL NOTIFICATION TO BIDDER
                    $user->notify(new \App\Notifications\AuctionBidPayment($user,$auction,$payment_record,'user'));


                } elseif ($payment_record->payment_for=='buy_auction') {

                    //EMAIL AND DB NOTIFICATION TO ADMIN
                    $admin = User::where('role_id',getRoleData('admin'))->first();
                    if ($admin)
                    // $admin->notify(new \App\Notifications\AuctionBuyPayment($total_data,'admin'));
                    $admin->notify(new \App\Notifications\AuctionBuyPayment($user,$auction,$payment_record,'admin'));

                    //admin-db notification
                    $admin->notify(new \App\Notifications\AuctionBuyPaymentAdmindb($user,$payment_record->paid_amount));


                    //EMAIL NOTIFICATION TO BIDDER
                    // $user->notify(new \App\Notifications\AuctionBuyPayment($total_data,'user'));

                    $user->notify(new \App\Notifications\AuctionBuyPayment($user,$auction,$payment_record,'user'));
                }
            }                          

            } catch(Exception $ex) {

                 $message .= getPhrase('\ncannot_send_email_to_user, please_check_your_server_settings');
            }

        }
        else {
            //PAYMENT RECORD IS NOT VALID
            //PREPARE METHOD FOR FAILED CASE
            pageNotFound();
        }
        //REDIRECT THE USER BY LOADING A VIEW
        
        // return redirect(URL_PAYMENTS_LIST.$user->slug);

        flash('success',$message, 'overlay');
        return redirect(URL_BIDDER_PAYMENTS);
    }




      /**
     * Common method to handle success payments
     * @return [type] [description]
     */
    protected function paymentSuccess(Request $request)
    {

        if (env('DEMO_MODE')) {
            return TRUE;
        }

        $params = explode('?token=',$_SERVER['REQUEST_URI']) ;
       
        if (!count($params))
          return FALSE;
    
        $slug = $params[1];
        
         
   
        $payment_record = Payment::where('slug', '=', $slug)->first();
        
        

        if ($this->processPaymentRecord($payment_record))
        {
            $payment_record->payment_status = PAYMENT_STATUS_SUCCESS;

            
            if ($payment_record->payment_gateway=='paypal') {

                $payment_record->paid_amount    = $request->mc_gross;
                $payment_record->transaction_id = $request->txn_id;
                // $payment_record->paid_by         = $request->payer_email;
            } elseif ($payment_record->payment_gateway=='payu') {

                $payment_record->paid_amount    = $request->amount;
                $payment_record->transaction_id = $request->txnid;

            }


            //Capcture all the response from the payment.
            //In case want to view total details, we can fetch this record
            $payment_record->transaction_record = json_encode($request->request->all());

            $payment_record->save();


            if ($payment_record->payment_for==PAYMENT_FOR_BIDDING) {

                $auctionbidder = AuctionBidder::where('id','=',$payment_record->ab_id)->first();
                

                if ($auctionbidder) {

                    $auctionbidder->is_bidder_paid = 'Yes';
                    $auctionbidder->paid_amount    = $payment_record->paid_amount;
                    $auctionbidder->payment_id     = $payment_record->id;
                    $auctionbidder->paid_datetime  = date('Y-m-d H:i:s');
                    $auctionbidder->is_bidder_won  = 'Yes';

                    $auctionbidder->save();

                }
            }

            //send email,db notifications-to bidder,admin with all details
           /*if($item_details->type == 'online'){  

                \Event::fire(new \App\Events\CertificationPaymentCompleted($item_details));
            }*/
            return TRUE;
        }

        return FALSE;
    }



    /**
     * This method Process the payment record by validating through 
     * the payment status and the age of the record and returns boolen value
     * @param  Payment $payment_record [description]
     * @return [type]                  [description]
     */
    protected  function processPaymentRecord(Payment $payment_record)
    {
        if(!$this->isValidPaymentRecord($payment_record))
        {
            flash('Oops','invalid_record', 'error');
            return FALSE;
        }

        if($this->isExpired($payment_record))
        {
            flash('Oops','time_out', 'error');
            return FALSE;
        }

        return TRUE;
    }


    /**
     * This method validates the payment record before update the payment status
     * @param  [type]  $payment_record [description]
     * @return boolean                 [description]
     */
    protected function isValidPaymentRecord(Payment $payment_record)
    {
        $valid = FALSE;
        if($payment_record)
        {
            if($payment_record->payment_status == PAYMENT_STATUS_PENDING)
                $valid = TRUE;
        }
        return $valid;
    }


    /**
     * This method checks the age of the payment record
     * If the age is > than MAX TIME SPECIFIED (30 MINS), it will update the record to aborted state
     * @param  payment $payment_record [description]
     * @return boolean                 [description]
     */
    protected function isExpired(Payment $payment_record)
    {

        $is_expired = FALSE;
        $to_time = strtotime(Carbon\Carbon::now());
        $from_time = strtotime($payment_record->updated_at);
        $difference_time = round(abs($to_time - $from_time) / 60,2);

        if($difference_time > PAYMENT_RECORD_MAXTIME)
        {
            $payment_record->payment_status = PAYMENT_STATUS_CANCELLED;
            $payment_record->save();
            return $is_expired =  TRUE;
        }
        return $is_expired;
    }

    /**
     * [paypal_cancel description]
     * @return [type] [description]
     */
    public function paypal_cancel()
    {
        if ($this->paymentFailed()) {

            //FAILED PAYMENT RECORD UPDATED SUCCESSFULLY
            //PREPARE SUCCESS MESSAGE
            flash('Ooops...!', 'your_payment_was cancelled', 'overlay');

        } else {
            //PAYMENT RECORD IS NOT VALID
            //PREPARE METHOD FOR FAILED CASE
            pageNotFound();
        }

        //REDIRECT THE USER BY LOADING A VIEW
        return redirect(URL_DASHBOARD);
        // $user = Auth::user();
        // return redirect(URL_PAYMENTS_LIST.$user->slug);
         
    }


     /**
     * Common method to handle payment failed records
     * @return [type] [description]
     */
    protected function paymentFailed()
    {
        if (env('DEMO_MODE')) {
            return TRUE;
        }

        $params = explode('?token=',$_SERVER['REQUEST_URI']) ;
    
        if(!count($params))
        return FALSE;
    
        $slug = $params[1];
        $payment_record = Payment::where('slug', '=', $slug)->first();
     

        if(!$this->processPaymentRecord($payment_record))
        {
            return FALSE;
        }
    
        $payment_record->payment_status = PAYMENT_STATUS_CANCELLED;
        $payment_record->save();
        
        return TRUE;
    }

    /**
     * [payu_success description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function payu_success(Request $request)
    {

        if (env('DEMO_MODE')) {
            flash('info', 'crud_operations_disabled_in_demo', 'overlay');
        }


        $user = \Auth::user();
        $response = $request->all();

        $message='';



        $params = explode('?token=',$_SERVER['REQUEST_URI']) ;
        if (!count($params))
            return FALSE;
        
        $slug = $params[1];


       if ($this->paymentSuccess($request)) {

            //PAYMENT RECORD UPDATED SUCCESSFULLY
            //PREPARE SUCCESS MESSAGE
            
            $message .= 'your_auction_payment_is_successfull';

            try {

                 $payment_record = Payment::where('slug', '=', $slug)
                                      ->where('payment_status','=','success')
                                      ->first();

                if (count($payment_record)) {

                    $user = User::where('id',$payment_record->user_id)->first();
                    $auction = Auction::where('id',$payment_record->auction_id)->first();

                    $total_data = array('payment_record'=>$payment_record,
                                        'user'=>$user,
                                        'auction'=>$auction
                                        );

                    if ($payment_record->payment_for=='bidding') {

                        //SEND EMAIL AND DB NOTIFICATION TO ADMIN
                        $admin = User::where('role_id',getRoleData('admin'))->first();

                        if ($admin) {

                            // $admin->notify(new \App\Notifications\AuctionBidPayment($total_data,'admin'));
                            $admin->notify(new \App\Notifications\AuctionBidPayment($user,$auction,$payment_record,'admin'));

                            //db notification
                             $admin->notify(new \App\Notifications\AuctionBidPaymentAdmindb($user,$payment_record->paid_amount));
                        }
                        

                        //SEND EMAIL NOTIFICATION TO BIDDER
                        $user->notify(new \App\Notifications\AuctionBidPayment($user,$auction,$payment_record,'user'));


                    } elseif ($payment_record->payment_for=='buy_auction') {

                        //EMAIL AND DB NOTIFICATION TO ADMIN
                        $admin = User::where('role_id',getRoleData('admin'))->first();
                        if ($admin) {

                            // $admin->notify(new \App\Notifications\AuctionBuyPayment($total_data,'admin'));
                            
                            $admin->notify(new \App\Notifications\AuctionBuyPayment($user,$auction,$payment_record,'admin'));

                            //db notification
                            $admin->notify(new \App\Notifications\AuctionBuyPaymentAdmindb($user,$payment_record->paid_amount));
                        }
                        

                        //EMAIL NOTIFICATION TO BIDDER
                        $user->notify(new \App\Notifications\AuctionBuyPayment($user,$auction,$payment_record,'user'));
                    }
                }

            } catch(Exception $ex) {
            
                $message .= getPhrase('\ncannot_send_email_to_user, please_check_your_server_settings');
            }

            

       } else {
            //PAYMENT RECORD IS NOT VALID
            //PREPARE METHOD FOR FAILED CASE
            pageNotFound();
       }

      //REDIRECT THE USER BY LOADING A VIEW
      // return redirect(URL_PAYMENTS_LIST.$user->slug);
      flash('success', $message, 'overlay');
      return redirect(URL_BIDDER_PAYMENTS);
    }

    /**
     * [payu_cancel description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function payu_cancel(Request $request)
    {
          if($this->paymentFailed())
          {
            //FAILED PAYMENT RECORD UPDATED SUCCESSFULLY
            //PREPARE SUCCESS MESSAGE
              flash('Ooops...!', 'your_payment_was cancelled', 'overlay');
          }
          else {
          //PAYMENT RECORD IS NOT VALID
          //PREPARE METHOD FOR FAILED CASE
            pageNotFound();
          }

          //REDIRECT THE USER BY LOADING A VIEW
          $user = \Auth::user();
          // return redirect(URL_PAYMENTS_LIST.$user->slug);
          return redirect(URL_DASHBOARD);
       
    }



    /**
     * [payStripe description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
   public function payStripe(Request $request) 
   {

      // dd($request);

     if (env('DEMO_MODE')) {
        flash('info', 'crud_operations_disabled_in_demo', 'overlay');
     }

      if (!checkRole(getUserGrade(2)))
      {
          prepareBlockUserMessage();
          return back();
      }

        // dd($request);
        $payment_gateway = $request->payment_gateway;
        $payment_for     = $request->payment_for;
        $token=null;

        if ($payment_for==PAYMENT_FOR_BIDDING) {

            $ab_id = $request->ab_id;
            $amount = $request->bid_amount;

            $auctionbidder = AuctionBidder::where('id',$ab_id)->first();
            if (count($auctionbidder)) {

                //check if anyone has paid 
                $auction = Auction::where('id',$auctionbidder->auction_id)->first();
                if (count($auction)) {

                    $bid_payment = $auction->getAuctionPayment();

                    if (count($bid_payment)) {
                        flash('error','other_bidder_has_already_paid_for_this_auction_please_contact_admin', 'error');
                        return redirect(URL_BIDDER_AUCTIONS);
                    }

                } else {

                    flash('error','auction_not_found', 'error');
                    return redirect(URL_BIDDER_AUCTIONS);
                }   


                //check his payment end time is valid 
                $bidpayment = bidpayment($auctionbidder->id);

                if ($bidpayment) {

                    $token = $this->preserveBeforeSave($auctionbidder,$payment_gateway,$payment_for);

                } else {

                    flash('error','invalid_operation', 'error');
                    return redirect(URL_BIDDER_AUCTIONS);
                }



            } else {

                flash('error','auction_bid_not_found', 'error');
                return redirect(URL_BIDDER_AUCTIONS);
            }

            

        } elseif ($payment_for==PAYMENT_FOR_BUY_AUCTION) {

            $auction_id = $request->auction_id;
            $amount = $request->auction_price;

            $auction = Auction::where('id',$auction_id)
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

                    $token = $this->preserveBeforeSave($auction,$payment_gateway,$payment_for);

                }
            } else {

                flash('error','auction_record_not_found_please_contact_admin', 'error');
                return redirect(URL_DASHBOARD);
            }               

        }


        // $stripe_key_test_secret = getSetting('stripe_key_test_secret','stripe');

       
        $message='';

        DB::beginTransaction();
        
        $user          = \Auth::user();
        $paid_amount   = $amount * 100;
        // dd($course_schedule_data);
          

        $stripe_currency = getSetting('stripe_currency','stripe');
        if (!$stripe_currency)
          $stripe_currency = 'USD';
        

        if ($token) {
          
            try {

                \Stripe\Stripe::setApiKey (env('STRIPE_SECRET'));
               
                $charge = \Stripe\Charge::create ( array (
                          "amount"      => $paid_amount,
                          "currency"    => $stripe_currency,//'USD',
                          "source"      => $request->input ('stripeToken'), // obtained with Stripe.js
                          "description" => "Auction payment." 
                ) );
                  
               $payment_record = Payment::where('slug',$token)->first();



               $payment_record->payment_status = PAYMENT_STATUS_SUCCESS;
               $payment_record->paid_amount    = $amount;
               
               $payment_record->transaction_id = $charge->id;

               $payment_record->save();


                if ($payment_record->payment_for==PAYMENT_FOR_BIDDING) {

                    $auctionbidder = AuctionBidder::where('id',$payment_record->ab_id)->first();

                    if ($auctionbidder) {

                        $auctionbidder->is_bidder_paid = 'Yes';
                        $auctionbidder->paid_amount    = $payment_record->paid_amount;
                        $auctionbidder->payment_id     = $payment_record->id;
                        $auctionbidder->paid_datetime  = date('Y-m-d H:i:s');
                        $auctionbidder->is_bidder_won  = 'Yes';

                        $auctionbidder->save();
                    }
                }

                DB::commit();


               
                //email&db notifications
                try {

                    $payment_record = Payment::where('slug',$token)->first();

                    if (count($payment_record)) {

                        $user = User::where('id',$payment_record->user_id)->first();
                        $auction = Auction::where('id',$payment_record->auction_id)->first();

                        $total_data = array('payment_record'=>$payment_record,
                                            'user'=>$user,
                                            'auction'=>$auction
                                         );

                        if ($payment_record->payment_for=='bidding') {

                            //SEND EMAIL AND DB NOTIFICATION TO ADMIN
                            $admin = User::where('role_id',getRoleData('admin'))->first();
                            if ($admin) {
                            $admin->notify(new \App\Notifications\AuctionBidPayment($user,$auction,$payment_record,'admin'));

                            //admin-db notification
                            $admin->notify(new \App\Notifications\AuctionBidPaymentAdmindb($user,$payment_record->paid_amount));
                            }

                            
                            //SEND EMAIL NOTIFICATION TO BIDDER
                            $user->notify(new \App\Notifications\AuctionBidPayment($user,$auction,$payment_record,'user'));


                        } elseif ($payment_record->payment_for=='buy_auction') {

                            //EMAIL AND DB NOTIFICATION TO ADMIN
                            $admin = User::where('role_id',getRoleData('admin'))->first();
                            if ($admin)
                            // $admin->notify(new \App\Notifications\AuctionBuyPayment($total_data,'admin'));
                            $admin->notify(new \App\Notifications\AuctionBuyPayment($user,$auction,$payment_record,'admin'));

                            //admin-db notification
                            $admin->notify(new \App\Notifications\AuctionBuyPaymentAdmindb($user,$payment_record->paid_amount));


                            //EMAIL NOTIFICATION TO BIDDER
                            // $user->notify(new \App\Notifications\AuctionBuyPayment($total_data,'user'));

                            $user->notify(new \App\Notifications\AuctionBuyPayment($user,$auction,$payment_record,'user'));
                        }


                    }

                } catch(\Exception $e) {

                    $message .= getPhrase('\ncannot_send_email_to_user, please_check_your_server_settings');
                }
               

                $message .= '\nPayment done successfully !';

                flash('success',$message, 'success');
                return redirect(URL_DASHBOARD);


                

            } catch ( \Exception $e ) {

                DB::rollBack();
                // dd($e->getMessage());
                flash('Oops...!',$e->getMessage(), 'error');
                  // \Session::flash ( 'fail-message', "Error! Please Try again." );
                 // return redirect(URL_INVOICES_LIST.'/'.$user->slug);
                 return redirect(URL_DASHBOARD);
            }

        } else {

            flash('Oops...!','Error! Please Try again', 'error');
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
      return URL_DASHBOARD;
    }
}
