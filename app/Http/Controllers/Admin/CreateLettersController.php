<?php

namespace App\Http\Controllers\Admin;

use App\CreateLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

// use App\Http\Requests\Admin\StoreCreateLettersRequest;
// use App\Http\Requests\Admin\UpdateCreateLettersRequest;
// 
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use App\Subscriber;
use Exception;
class CreateLettersController extends Controller
{
    /**
     * Display a listing of CreateLetter.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

       
        $records = CreateLetter::join('subscribers','create_letters.subscriber_id','subscribers.id')
                                ->select(['create_letters.*','subscribers.email'])
                                ->get();

        $data['title']              = getPhrase('news_letter');
        $data['active_class']       = 'news_letter';

        $data['records']            = $records;
        $data['layout']             = getLayOut();
 
        return view('admin.create_letters.index',$data);
    }

    /**
     * Show the form for creating new CreateLetter.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $data['title']        = getPhrase('create_letter');
        $data['active_class'] = 'news_letter';
     

        $data['subscribers']  = Subscriber::getSubscriberOptions();
            
        return view('admin.create_letters.create', $data);
    }

    /**
     * Store a newly created CreateLetter in storage.
     *
     * @param  \App\Http\Requests\StoreCreateLettersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $this->validate($request, [
         'to'      => 'bail|required',
         'title'   => 'bail|required|max:50',
         'message' => 'bail|required'
        
        ]);


        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record = new CreateLetter();

        $record->subscriber_id   = $request->to;
        $record->title           = $request->title;
        $record->message         = $request->message;

        $record->save();

        $subscriber = Subscriber::select('email')->where('id',$request->to)->first();

        try {
            sendEmail('news_letter_subscription', array('title'=>$request->title, 'message'=> htmlspecialchars($request->message),'to_email'=>$subscriber->email, 'site_url'=>PREFIX, 'date'=>date('Y-m-d')));
            flash('success','email_sent_successfully', 'success');

        } catch(Exception $ex) {
    
            flash('oops...!', $ex->getMessage(), 'error');
        }


        return redirect(URL_LIST_NEWS_LETTER);
    }


    /**
     * Show the form for editing CreateLetter.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');
        $enum_to = CreateLetter::$enum_to;
            
        $create_letter = CreateLetter::findOrFail($id);

        return view('admin.create_letters.edit', compact('create_letter', 'enum_to', 'created_bies'));
    }

    /**
     * Update CreateLetter in storage.
     *
     * @param  \App\Http\Requests\UpdateCreateLettersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $create_letter = CreateLetter::findOrFail($id);
        $create_letter->update($request->all());

        return redirect()->route('admin.create_letters.index');
    }


    /**
     * Display CreateLetter.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $create_letter = CreateLetter::join('subscribers','create_letters.subscriber_id','subscribers.id'               )->select(['create_letters.*','subscribers.email'])
                            ->where('create_letters.id',$id)
                            ->first();

        if ($isValid = $this->isValidRecord($create_letter))
             return redirect($isValid);


        $data['title']        = getPhrase('view');
        $data['active_class'] = 'news_letter';
        
        $data['create_letter'] = $create_letter;
                                 
        return view('admin.create_letters.show', $data);
    }


    /**
     * Remove CreateLetter from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $create_letter = CreateLetter::findOrFail($id);
        $create_letter->delete();

        return redirect()->route('admin.create_letters.index');
    }

    /**
     * Delete all selected CreateLetter at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $record = CreateLetter::where('id',$request->id)->first();

        if ($isValid = $this->isValidRecord($record)) {
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
                     
                    $entries = CreateLetter::where('id', $request->id)->get();

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
                    $response['message'] =  getPhrase('record_not_deleted');
            }  

            
        } else {

            $response['status'] = 0;
            $response['message'] = getPhrase('invalid_operation');
        }

        return json_encode($response);
     
    }


    /**
     * Restore CreateLetter from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $create_letter = CreateLetter::onlyTrashed()->findOrFail($id);
        $create_letter->restore();

        return redirect()->route('admin.create_letters.index');
    }

    /**
     * Permanently delete CreateLetter from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        $create_letter = CreateLetter::onlyTrashed()->findOrFail($id);
        $create_letter->forceDelete();

        return redirect()->route('admin.create_letters.index');
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
      return URL_LIST_NEWS_LETTER;
    }


      /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_LIST_NEWS_LETTER;
       else
          return false;
    }

}
