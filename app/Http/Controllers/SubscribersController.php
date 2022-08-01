<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscribersController extends Controller
{
   /* public function __construct()
    {
         $this->middleware('guest');
    }*/


    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($redirect = $this->check_isdemo()) {
            
            $response['status']  = 0;
            $response['message'] = getPhrase('crud_operations_disabled_in_demo');
            return json_encode($response);
        }   

    	$existed = Subscriber::where('email',$request->email)->first();
    	if ($existed) {

    		$response['status'] = 0;
            $response['message'] = getPhrase('entered_email_already_subscribed');

    	} else {
       
	        $subscriber     = new Subscriber();
	        $subscriber->email    = $request->email;
	      
	        $subscriber->save();

	        $response['status'] = 1;
	        $response['message'] = getPhrase('you_have_subscribed_successfully');
    	}

    	return json_encode($response);
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_HOME;
       else
          return false;
    }

}
