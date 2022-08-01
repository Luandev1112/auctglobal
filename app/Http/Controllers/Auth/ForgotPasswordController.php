<?php

namespace App\Http\Controllers\Auth;

use \App;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use \Auth;
use DB;
use Exception;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function resetUsersPassword(Request $request)
    {
         

         $user  = User::where('email','=',$request->fp_email)->first();
         

          DB::beginTransaction();

         try{

         if ($user!=null) {

           $password       = str_random(8);
           $user->password = bcrypt($password);

           $user->save();
           
           DB::commit();

           $user->notify(new \App\Notifications\UserForgotPassword($user,$password));

         }

         else {

            flash('Ooops','your_email_is_not_existed','error');
             return redirect(URL_USERS_LOGIN);
         }
      }

      catch(Exception $ex){
          DB::rollBack();

         flash('oops...!', $ex->getMessage(), 'error');

      }
         
         flash('Success', 'new password is sent to your email account', 'success');
        return redirect(URL_USERS_LOGIN);
         
     } 
}
