<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

use Auth;
use Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $user->role()->attach(config('app_service.default_role_id'));

        return $user;
    }


    /**
     * [showRegistrationForm description]
     * @return [type] [description]
     */
    public function showRegistrationForm()
    {
        $user = Auth::user();
        if ($user)
            return redirect(PREFIX);

        return view('auth.register');
    }


     /**
     * [register description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
     public function register(Request $request)
     {
        $columns = array(
        'name'      => 'bail|required|max:20|',
        'username'  => 'bail|required|unique:users,username',
        'email'     => 'bail|required|unique:users,email',
        'password'  => 'bail|required',
        );
        $this->validate($request,$columns);

        $role_id = getRoleData('bidder');

        if ($request->user_type=='seller')
            $role_id = getRoleData('seller');
        

        $user           = new User();

        $name           = $request->name;
        
        $user->name     = $name;
        $user->slug     = $user->makeSlug($user->name); 

        $user->username = $request->username;
        $user->email    = $request->email;
        $password       = $request->password;
        $user->password       = bcrypt($password);
        $user->role_id        = $role_id;
        $user->login_enabled  = 1;
        $user->approved  =1;

        $user->save();

        
        $message = 'registered_successfully';
        
        try {

            if(!env('DEMO_MODE')) {

            $user->roles()->attach($user->role_id);
            
           //send db and email notification to admin - when user registered
            $admin = User::where('role_id',getRoleData('admin'))->first();
            if ($admin)
            $admin->notify(new \App\Notifications\NewUserRegistration($user,'admin'));


            //send email notification to user - when user registered
            $user->notify(new \App\Notifications\NewUserRegistration($user,'user',$password));

            }

        } catch(Exception $ex) {

            $message = getPhrase('registered_successfully ');
            $message .= getPhrase('\ncannot_send_email_to_user, please_check_your_server_settings');
        }

        flash('Success..',$message,'success');
        return redirect(URL_USERS_LOGIN);
     }
}
