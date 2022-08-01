<?php

namespace App\Http\Controllers\Admin;

use App\Testmony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\Admin\StoreTestmoniesRequest;
use App\Http\Requests\Admin\UpdateTestmoniesRequest;*/
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class TestmoniesController extends Controller
{


    public function __construct()
    {
         $this->middleware('auth');
    }
    
    /**
     * Display a listing of Testmony.
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

        $records = Testmony::join('users', 'testmonies.user_id','users.id')
                            ->select('testmonies.*','users.username')
                            ->orderBy('testmonies.id','desc')
                            ->get();

        $data['records']      = $records;

        $data['active_class']       = 'testimonials';
        $data['title']              = getPhrase('testimonials');

        return view('admin.testmonies.index', $data);
    }

    /**
     * Show the form for creating new Testmony.
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

        $users = \App\User::get()->pluck('name', 'id');
        
        $data['active_class']       = 'testimonials';
        $data['title']              = getPhrase('testimonials');
        
        $data['users']              = $users;
        $data['record']             = FALSE;

        return view('admin.testmonies.add-edit', $data);
    }

    /**
     * Store a newly created Testmony in storage.
     *
     * @param  \App\Http\Requests\StoreTestmoniesRequest  $request
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
         'user_id' => 'bail|required',
         'testmony'      => 'bail|required',
         'status'   => 'bail|required'
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record = new Testmony();

        $testmony = $request->testmony;

        $record->testmony = $testmony;
        // $record->slug            = $record->makeSlug($title, TRUE);
        $record->user_id       = $request->user_id;
        $record->status        = $request->status;

        $record->save();

        flash('success','record_added_successfully', 'success');
        return redirect(URL_TETSIMONIALS);
    }


    /**
     * Show the form for editing Testmony.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }
        
        $users = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');
        
        $testmony = Testmony::findOrFail($id);



        if ($isValid = $this->isValidRecord($testmony))
             return redirect($isValid);

        $data['active_class']       = 'testimonials';
        $data['title']              = getPhrase('testimonials');
        
        $data['users']              = $users;
        $data['record']             = $testmony;

        return view('admin.testmonies.add-edit', $data);
    }

    /**
     * Update Testmony in storage.
     *
     * @param  \App\Http\Requests\UpdateTestmoniesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $record = Testmony::getRecordWithSlug($id);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);


        $this->validate($request, [
         'user_id' => 'bail|required',
         'testmony'      => 'bail|required',
         'status'   => 'bail|required'
        ]);


        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $testmony = $request->testmony;

        $record->testmony = $testmony;
        // $record->slug            = $record->makeSlug($title, TRUE);
        $record->user_id       = $request->user_id;
        $record->status        = $request->status;

        $record->save();

        flash('success','record_updated_successfully', 'success');
        return redirect(URL_TETSIMONIALS);
 
    }


    /**
     * Display Testmony.
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

        $testmony = Testmony::join('users','testmonies.user_id','users.id')
                            ->select('testmonies.*','users.username')
                            ->where('testmonies.id',$id)->first();


        if ($isValid = $this->isValidRecord($testmony))
             return redirect($isValid);

        $data['active_class']       = 'testimonials';
        $data['title']              = getPhrase('testimonials');

        $data['testmony'] = $testmony;

        return view('admin.testmonies.show', $data);
    }


    /**
     * Remove Testmony from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testmony = Testmony::findOrFail($id);
        $testmony->delete();

        return redirect()->route('admin.testmonies.index');
    }

    /**
     * Delete all selected Testmony at once.
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

        $testmony = Testmony::where('id',$request->id)->first();

        if ($isValid = $this->isValidRecord($testmony)) {

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
                     
                    $entries = Testmony::where('id', $request->id)->get();

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
     * Restore Testmony from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $testmony = Testmony::onlyTrashed()->findOrFail($id);
        $testmony->restore();

        return redirect()->route('admin.testmonies.index');
    }

    /**
     * Permanently delete Testmony from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        $testmony = Testmony::onlyTrashed()->findOrFail($id);
        $testmony->forceDelete();

        return redirect()->route('admin.testmonies.index');
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
      return URL_TETSIMONIALS;
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_TETSIMONIALS;
       else
          return false;
    }
}
