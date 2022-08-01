<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App;
use App\User;
use Input;
use Sms;

use Plivo\RestAPI;
use Services_Twilio;


class SMSAgentController extends Controller
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


        $users = User::where('role_id','!=',getRoleData('admin'))
                      ->where('phone','!=','')
                      ->get()->pluck('username','id');
        $data['users'] = $users;

    	  $data['active_class']       = 'sms';
        $data['title']              = getPhrase('send_sms');
        $data['layout']             = getLayout();
        $data['record']             = FALSE;
        
        return view('admin.sms.sending-sms', $data);     
    }


     /**
     * This method sends SMS with the sent settings
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function sendSMS(Request $request)
    {
      
        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }


          $columns = array(
            'message'  => 'bail|required|'
          );

          $this->validate($request,$columns);

          if (!checkRole(getUserGrade(1))) {

              prepareBlockUserMessage();
              return back();
          }



        $message='';
        $status='success';

        $user_ids = [];
        $user_ids = $request->users;
        

        if (empty($user_ids)) {

           flash('info','Please select users', 'info');
           return redirect(URL_SEND_SMS);
        } 

      
        $users = User::whereIn('id',$user_ids)
                      ->where('approved',1)->get();

       

        if (count($users)) {

            $default_gateway = getSetting('sms_driver','sms_settings');

            // dd($default_gateway);

            $phone_code = getSetting('country_code','site_settings');//'91';

            if ($default_gateway!='') {

                if ($default_gateway=='plivo') {

                    $auth_id    = env('PLIVO_AUTH_ID');
                    $auth_token = env('PLIVO_AUTH_TOKEN');
                    $p = new RestAPI($auth_id, $auth_token);

                    foreach ($users as $user) {

                        if ($user->phone) {

                          $sms_data = array(
                                        'src' => '919700376656', //The phone number to use as the caller id (with the country code). E.g. For USA 15671234567
                                        'dst' => $phone_code.$user->phone, // The number to which the message needs to be send (regular phone numbers must be prefixed with country code but without the ‘+’ sign) E.g., For USA 15677654321.
                                        'text' => $request->message, // The text to send
                                        'type' => 'sms', //The type of message. Should be 'sms' for a text message. Defaults to 'sms'
                                      );

                          $response = $p->send_message($sms_data);

                          if ($response['status'] == '202') //Success
                          {
                              $status = 'success';
                              $message = getPhrase('message_sent_successfully');
                          }
                          else
                          {
                              $response2 = $response['response']['error'];
                              
                              $status = 'error';
                              $message = $response2;

                              flash($status,$message, $status);
                              return redirect(URL_SEND_SMS);
                          }

                        }
                    }
                  

                    

                } elseif ($default_gateway=='twilio') {
                    
                    $twilio_id    = env('TWILIO_SID');
                    $twilio_token = env('TWILIO_TOKEN');

                    $from_number = env('TWILIO_NUMBER');

                    $client = new Services_Twilio($twilio_id, $twilio_token);
                    // dd($client);
                   
                     foreach ($users as $user) {

                        if ($user->phone) {

                            try {
                                // Use the Twilio REST API client to send a text message
                                $m = $client->account->messages->sendMessage(
                                  $from_number,//$_ENV['TWILIO_NUMBER'], // the text will be sent from your Twilio number
                                  '+'.$phone_code.$user->phone, // the phone number the text will be sent to
                                  $request->message // the body of the text message
                                );

                                // dd($m);

                                  $status = 'success';
                                  $message = getPhrase('message_sent_successfully');

                            } catch(Services_Twilio_RestException $e) {
                                // Return and render the exception object, or handle the error as needed
                                // return $e;
                                // dd($e);
                                // 
                                
                                  $status = 'error';
                                  $message = $e->getMessage();
                            };
                        }
                    }
                   
                }

            } else {

              $status = 'info';
              $message = getPhrase('no_SMS_gateway_available');
            }

        } else {

          $status = 'info';
          $message = getPhrase('no_users_available');
        }


        flash($status,$message, $status);
        return redirect(URL_SEND_SMS);

    }




    /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_SEND_SMS;
       else
          return false;
    }
}
