<?php

namespace App\Http\Controllers\Admin;

use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\Admin\StoreStatesRequest;
use App\Http\Requests\Admin\UpdateStatesRequest;*/

use App\Country;

class StatesController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Display a listing of State.
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

        $states = State::join('countries','states.country_id','countries.id')
                        ->select('states.*','countries.title')
                        ->get();
        

        $data['states']       = $states;
        $data['title']        = getPhrase('states');
        $data['active_class'] = 'locations';


        return view('admin.states.index', $data);
    }

    /**
     * Show the form for creating new State.
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
        
        $data['title']        = getPhrase('create');
        $data['active_class'] = 'locations';
        $data['record']       = FALSE;

        $countries = State::getCountries();
        $data['countries']    = $countries;

        return view('admin.states.add-edit', $data);
    }

    /**
     * Store a newly created State in storage.
     *
     * @param  \App\Http\Requests\StoreStatesRequest  $request
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
         'state'      => 'bail|required|max:100',
         'country_id'   => 'bail|required',
        
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record = new State();

        $state = $request->state;

        $record->country_id      = $request->country_id;
        $record->state           = $state;
        $record->slug            = $record->makeSlug($state, TRUE);
        
       
        $record->save();

        flash('success','record_added_successfully', 'success');
        return redirect(URL_STATES);

    }


    /**
     * Show the form for editing State.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
       
       if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }
        

        $data['title']        = getPhrase('edit');
        $data['active_class'] = 'locations';

        $state = State::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($state))
             return redirect($isValid);


        $data['record'] = $state;


        $countries = State::getCountries();
        $data['countries']    = $countries;

        return view('admin.states.add-edit',$data);
    }

    /**
     * Update State in storage.
     *
     * @param  \App\Http\Requests\UpdateStatesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }
       

        $record = State::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);

        $this->validate($request, [
         'state'      => 'bail|required|max:100',
         'country_id'   => 'bail|required',
        
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $state = $request->state;

         /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($state != $record->state)
            $record->slug = $record->makeSlug($state, TRUE);


        $record->country_id      = $request->country_id;
        $record->state           = $state;
        
        $record->save();

        flash('success','record_updated_successfully', 'success');
        return redirect(URL_STATES);

        // return redirect()->route('admin.states.index');
    }


    /**
     * Display State.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $state = State::join('countries','states.country_id','countries.id')
                        ->select('states.*','countries.title')
                        ->where('states.slug',$slug)->first();

                       
        if ($isValid = $this->isValidRecord($state))
             return redirect($isValid);
         
        $data['title']        = getPhrase('view');
        $data['active_class'] = 'locations';
        
        $data['state']      = $state; 

        return view('admin.states.show', $data);
    }


    /**
     * Remove State from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = State::findOrFail($id);
        $state->delete();

        return redirect()->route('admin.states.index');
    }

    /**
     * Delete all selected State at once.
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


         $state = State::where('id',$request->id)->first();

        if ($isValid = $this->isValidRecord($state)) {
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
                     
                    $cities = $state->getCities()->get();
                     
                    if (count($cities)) { 
                        
                        $response['status']  = 0;
                        $response['message'] = getPhrase('this_record_is_in_use_in_other_modules');

                    } else {

                        $entries = State::where('id', $request->id)->get();

                        foreach ($entries as $entry) {
                            $entry->delete();
                        }

                        $response['status'] = 1;
                        $response['message'] = getPhrase('record_deleted_successfully');
                    }
                }
            }
            catch ( \Illuminate\Database\QueryException $e) {

                   $response['status'] = 0;
                   if(getSetting('show_foreign_key_constraint','module'))
                    $response['message'] =  $e->errorInfo;
                   else
                    $response['message'] =  getPhrase('this_record_is_in_use_in_other_modules');
            }  

            
        } else {

            $response['status'] = 0;
            $response['message'] = getPhrase('invalid_operation');
        }

        return json_encode($response);
    }


    /**
     * Restore State from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $state = State::onlyTrashed()->findOrFail($id);
        $state->restore();

        return redirect()->route('admin.states.index');
    }

    /**
     * Permanently delete State from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        $state = State::onlyTrashed()->findOrFail($id);
        $state->forceDelete();

        return redirect()->route('admin.states.index');
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
        return URL_STATES;
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_STATES;
       else
          return false;
    }
}
