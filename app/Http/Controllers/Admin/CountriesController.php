<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\Admin\StoreCountriesRequest;
use App\Http\Requests\Admin\UpdateCountriesRequest;*/

class CountriesController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }


    /**
     * Display a listing of Country.
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


        $countries = Country::all();

       
        $data['countries']    = $countries;
        $data['title']        = getPhrase('countries');
        $data['active_class'] = 'locations';

        return view('admin.countries.index',$data);
    }

    /**
     * Show the form for creating new Country.
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

        
        return view('admin.countries.add-edit', $data);
    }

    /**
     * Store a newly created Country in storage.
     *
     * @param  \App\Http\Requests\StoreCountriesRequest  $request
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
         'shortcode'      => 'bail|required|max:5',
         'title'   => 'bail|required|max:100',
        
        ]);


        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record = new Country();

        $country = $request->title;

        $record->shortcode       = $request->shortcode;
        $record->title           = $country;
        $record->slug            = $record->makeSlug($country, TRUE);
        
        $record->save();


        flash('success','record_added_successfully', 'success');
        return redirect(URL_COUNTRIES);

    }


    /**
     * Show the form for editing Country.
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

        $country = Country::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($country))
             return redirect($isValid);


        $data['record'] = $country;

        return view('admin.countries.add-edit',$data);
    }

    /**
     * Update Country in storage.
     *
     * @param  \App\Http\Requests\UpdateCountriesRequest  $request
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
        
        $record = Country::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);


        $this->validate($request, [
         'shortcode'      => 'bail|required|max:5',
         'title'   => 'bail|required|max:100',
        
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $country = $request->title;

         /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($country != $record->title)
            $record->slug = $record->makeSlug($country, TRUE);

        $record->shortcode       = $request->shortcode;
        $record->title           = $country;
        
        $record->save();


        flash('success','record_updated_successfully', 'success');
        return redirect(URL_COUNTRIES);


    }


    /**
     * Display Country.
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

        $country = Country::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($country))
             return redirect($isValid);
         
        $data['title']        = getPhrase('view');
        $data['active_class'] = 'locations';
        
        $data['country']      = $country; 

        return view('admin.countries.show', $data);
    }


    /**
     * Remove Country from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();

        return redirect()->route('admin.countries.index');
    }

    /**
     * Delete all selected Country at once.
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


        $country = Country::where('id',$request->id)->first();

         if ($isValid = $this->isValidRecord($country)) {

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
                     
                    $states = $country->getStates()->get();

                    if (count($states)) {

                        $response['status']  = 0;
                        $response['message'] = getPhrase('this_record_is_in_use_in_other_modules');

                    } else {

                        $entries = Country::where('id', $request->id)->get();

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
     * Restore Country from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $country = Country::onlyTrashed()->findOrFail($id);
        $country->restore();

        return redirect()->route('admin.countries.index');
    }

    /**
     * Permanently delete Country from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        $country = Country::onlyTrashed()->findOrFail($id);
        $country->forceDelete();

        return redirect()->route('admin.countries.index');
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
      return URL_COUNTRIES;
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_COUNTRIES;
       else
          return false;
    }
}
