<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;
use App\Category;
use App\SubCatogory;
use App\Auction;
use App\Testmony;
use Exception;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '';
    protected $dbuser = '';
    protected $provider = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        // $this->middleware('guest', ['except' => 'logout']);
    }

    public function index()
    {


      if (env('DB_DATABASE')=="") {
        return redirect('install');
      }

      $user = \Auth::user();
      if (isset($user) && $user->role_id!=getRoleData('bidder'))
          return redirect(URL_DASHBOARD);
      

        $data['active_class']   = 'dashboard';
        $data['layout']         = getLayout();
        $data['title']          = getPhrase('home');

        return view('home.index', $data);
    }
    
    public function redirectToSocial($driver)
    {
        //return Socialite::driver($driver)->redirect();
         if (!getSetting($driver.'_login', 'module'))
        {
            flash('Ooops..!', $driver.'_login_is_disabled','error');
             return redirect(PREFIX);
        }

        // dd(Socialite::driver($driver)->redirect());
        $this->provider = $driver;
        return Socialite::driver($driver)->redirect();
    }

    public function handleSocialCallback($driver)
    {
       /* try
        {
            $social_user = Socialite::driver($driver)->user();
            $user = User::where('email', '=', $social_user->getEmail())->first();
            if (!is_null($user)) {
                Auth::login($user);
                return redirect($this->redirectPath());
            } else {
                return redirect()->back()->withErrors(trans('auth.failed'));
            }
        } catch (Exception $e) {
            return redirect('auth/google');
        }*/


        try
        {
            $user = Socialite::driver($driver)->user();

            if ($user)
            {
                
                if ($this->checkIsUserAvailable($user)) {

                    Auth::login($this->dbuser, true);
                    flash('Success...!', 'log_in_success', 'success');
                    return redirect(PREFIX);    
                }

                flash('Ooops...!', 'failed_to_login', 'error');
                return redirect(PREFIX);
            }


            /*$user = User::where('email', '=', $social_user->getEmail())->first();
            if (!is_null($user)) {
                Auth::login($user);
                return redirect($this->redirectPath());
            } else {
                return redirect()->back()->withErrors(trans('auth.failed'));
            }*/


        } catch (Exception $e) {

            return redirect(PREFIX);
        }
    }


     /**
     * This method checks for the user availability
     * @param  [type] $user [description]
     * @return [type]       [description]
     */
    public function checkIsUserAvailable($user)
    {
        
        $id         = $user->getId();
        $nickname   = $user->getNickname();
        $name       = $user->getName();
        $email      = $user->getEmail();
        $avatar     = $user->getAvatar();

        $this->dbuser = User::where('email', '=',$email)->first();
        
        if($this->dbuser) {
            //User already available return true
            return TRUE;
        }
        
        $newUser = array(
                            'name' => $name,
                            'email'=>$email,
                        );
        $newUser = (object)$newUser;

        $userObj = new User();

       $this->dbuser = $this->registerWithSocialLogin($newUser);

       $this->dbuser = User::where('slug','=',$this->dbuser->slug)->first();

      
       return TRUE;
     
    }


      /**
      * This method accepts the user object from social login methods 
      * Registers the user with the db
      * Sends Email with credentials list 
      * @param  User   $user [description]
      * @return [type]       [description]
      */
     public function registerWithSocialLogin($receivedData = '')
     {
        $user             = new User();
        $password         = str_random(8);
        $user->password   = bcrypt($password);
        $slug             = $user->makeSlug($receivedData->name);
        $user->username   =  $slug;
        $user->slug       = $slug;

        $role_id        = getRoleData('bidder');
        
        $user->name     = $receivedData->name;
        $user->email    = $receivedData->email;
        $user->role_id  = $role_id;
        $user->login_enabled  = 1;
        $user->approved = 1;
        
        $user->save();
        
        try {

            if (!env('DEMO_MODE')) {

                $user->roles()->attach($user->role_id);

                 //send db and email notification to admin - when user registered
                $admin = User::where('role_id',getRoleData('admin'))->first();
                if ($admin)
                $admin->notify(new \App\Notifications\NewUserRegistration($user,'admin'));


                $registered_user = User::where('id',$user->id)->first();
                //error
                //send email notification to user - when user registered
                $registered_user->notify(new \App\Notifications\NewUserRegistration($user,'user',$password));

            }

        } catch(Exception $ex) {

        }
        
        return $user;
     }



    public function showLoginForm()
    {
        $user = Auth::user();
        if ($user)
            return redirect(PREFIX);

        $data['title'] = 'Login';
        $data['breadcrumb'] = TRUE;
        return view('auth.login',$data); 
    }


     /**
     * This is method is override from Authenticate Users class
     * This validates the user with username or email with the sent password
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function postLogin(Request $request)
    {
        $login_status = FALSE;
        if (Auth::attempt(['username' => $request->email, 'password' => $request->password, 'approved'=>1])) {
                // return redirect(PREFIX);
                $login_status = TRUE;
        } 

        elseif (Auth::attempt(['email'=> $request->email, 'password' => $request->password, 'approved'=>1])) {
            $login_status = TRUE;
        }

        if(!$login_status) 
        {

            $message = getPhrase('please_check_your_details_or_contact_admin_to_approve_your_account');
            flash('Ooops...!', $message, 'error');
            return redirect()->back();

            /*return redirect()->back()
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);*/
        }

        /**
         * Check if the logged in user is seller or bidder
         * if seller check if admin enabled the seller module
         * if not enabled show the message to user and logout the user
         */
        
       /* if($login_status) {
            if(checkRole(getUserGrade(7)))  {
               if(!getSetting('parent', 'module')) {
                return redirect(URL_PARENT_LOGOUT);
               }
            } 
        }*/

        /**
         * The logged in user is seller/bidder/admin/owner
         */
            if($login_status)
            {
                return redirect('home');
            } 
        
    }


     /**
     * [updateAuctionStatus cronjob]
     * @return [type] [description]
     */
    public function updateAuctionStatus()
    {
        $timezone   = getSetting('system_timezone','site_settings');
        $dateformat = getSetting('date_format','site_settings');
        $cronjob    = getSetting('update_auction_status','auction_settings');

        if ($cronjob=='Yes') {

            $live_auctions = \App\Auction::getLiveAuctions();
            
            //start date time,end date time
            $now = strtotime(date('Y-m-d H:i:s'));

            if (!empty($live_auctions)) {

                foreach ($live_auctions as $auction) {

                    $start_date = strtotime($auction->start_date);
                    $end_date   = strtotime($auction->end_date);

                    if ($start_date<=$now && $end_date>=$now) {

                    } else {
                        //auction time is over
                        $auction->auction_status = 'closed';

                        $auction->save();
                    }

                }
            }
        
        }
        
    }




    /**
     * This method will change the theme on user preference
     * @param  [type] $theme [description]
     * @return [type]        [description]
     */
    public function changeTheme($theme)
    {
        $response = new Response();
        return back()->withCookie(cookie('selected_theme', $theme));
    }

}
