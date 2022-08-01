<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App;
use \Auth;

class UserNotificationsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }


     /**
     * notifications listing method
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        if (!checkRole(getUserGrade(7)))
        {
           prepareBlockUserMessage();
           return back();
        }
 
        $data['active_class']       = 'notifications';
        $data['title']              = getPhrase('notifications');
        $data['layout']             = getLayout();
        $data['notifications']      = $notifications  = Auth::user()->notifications()->paginate(getRecordsPerPage());

       
        if (checkRole(getUserGrade(4))) {
           return view('user-notifications.list', $data);
        }
        elseif (checkRole(getUserGrade(2))) {
           $data['datatable'] = TRUE;
           return view('bidder.notifications.list', $data);
        }
        else
           return redirect(URL_USERS_LOGIN);

    	
    }

 
     /**
     * Delete Record based on the provided slug
     * @param  [string] $slug [unique slug]
     * @return Boolean 
     */
    public function delete($slug)
    {
      if(!checkRole(getUserGrade(1)))
      {
        prepareBlockUserMessage();
        return back();
      }
      /**
       * Delete the questions associated with this quiz first
       * Delete the quiz
       * @var [type]
       */
        $record = Notification::where('slug', $slug)->first();
        if(!env('DEMO_MODE')) {
            $record->delete();
        }

        $response['status'] = 1;
        $response['message'] = getPhrase('record_deleted_successfully');
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
    	return URL_ADMIN_NOTIFICATIONS;
    }

    /**
     * [display description]
     * @param  [type] $slug [description]
     * @return [type]       [description]
     */
    public function display($slug)
    {

    	$user = Auth::user();
      $record = $user->notifications()->where('id','=',$slug)->first();
     	$record->markAsRead();
        $data['active_class']       = 'notifications';
        $data['title']              = $record->title;
        $data['layout']             = getLayout();
        $data['notification']       = $record;
        

        if (checkRole(getUserGrade(4)))
           return view('user-notifications.details', $data);  
        elseif (checkRole(getUserGrade(2)))
           return view('bidder.notifications.details', $data);
        else
           return redirect(URL_USERS_LOGIN);
    }

}
