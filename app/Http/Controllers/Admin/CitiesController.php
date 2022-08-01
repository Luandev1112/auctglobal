<?php

namespace App\Http\Controllers\Admin;

use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\Admin\StoreCitiesRequest;
use App\Http\Requests\Admin\UpdateCitiesRequest;*/

use App\Country;
use App\State;

class CitiesController extends Controller
{

     public function __construct()
    {
         $this->middleware('auth');
    }
    
    /**
     * Display a listing of City.
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

        $cities = City::join('countries','cities.country_id','countries.id')
                        ->join('states','cities.state_id','states.id')
                        ->select('cities.*','countries.title','states.state')
                        ->get();
        

        $data['cities']       = $cities;
        $data['title']        = getPhrase('cities');
        $data['active_class'] = 'locations';

        
        return view('admin.cities.index', $data );
    }

    /**
     * Show the form for creating new City.
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

        $data['countries'] =  State::getCountries();
        // $data['states']    =  City::getStates();

        return view('admin.cities.add-edit', $data);
    }

    /**
     * Store a newly created City in storage.
     *
     * @param  \App\Http\Requests\StoreCitiesRequest  $request
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
         'city'         => 'bail|required|max:100',
         'country_id'   => 'bail|required',
         'state_id'     => 'bail|required'
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record = new City();

        $city = $request->city;

        $record->country_id      = $request->country_id;
        $record->state_id        = $request->state_id;
        $record->city            = $city;
        $record->slug            = $record->makeSlug($city, TRUE);
        $record->status          = $request->status;

        
        $record->save();

        flash('success','record_added_successfully', 'success');
        return redirect(URL_CITIES);


    }


    /**
     * Show the form for editing City.
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

        $city = City::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($city))
             return redirect($isValid);


        $data['record'] = $city;


        $countries = State::getCountries();
        $data['countries']    = $countries;

        return view('admin.cities.add-edit',$data);

    }

    /**
     * Update City in storage.
     *
     * @param  \App\Http\Requests\UpdateCitiesRequest  $request
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
        
        $record = City::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);


        $this->validate($request, [
         'city'         => 'bail|required|max:100',
         'country_id'   => 'bail|required',
         'state_id'     => 'bail|required'
        
        ]); 


        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $city = $request->city;

         /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($city != $record->city)
            $record->slug = $record->makeSlug($city, TRUE);


        $record->country_id      = $request->country_id;
        $record->state_id        = $request->state_id;
        $record->city            = $city;
        $record->status          = $request->status;

        $record->save();

        flash('success','record_updated_successfully', 'success');
        return redirect(URL_CITIES);
    }


    /**
     * Display City.
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
        
        $city = City::join('countries','cities.country_id','countries.id')
                        ->join('states','cities.state_id','states.id')
                        ->select('cities.*','countries.title','states.state')
                        ->where('cities.slug',$slug)->first();

                       
        if ($isValid = $this->isValidRecord($city))
             return redirect($isValid);
         
        $data['title']        = getPhrase('view');
        $data['active_class'] = 'locations';
        
        $data['city']      = $city; 

        return view('admin.cities.show', $data);
    }


    /**
     * Remove City from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return redirect()->route('admin.cities.index');
    }

    /**
     * Delete all selected City at once.
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


         $city = City::where('id',$request->id)->first();

        if ($isValid = $this->isValidRecord($city)) {

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
                     
                    $entries = City::where('id', $request->id)->get();

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
     * Restore City from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $city = City::onlyTrashed()->findOrFail($id);
        $city->restore();

        return redirect()->route('admin.cities.index');
    }

    /**
     * Permanently delete City from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        $city = City::onlyTrashed()->findOrFail($id);
        $city->forceDelete();

        return redirect()->route('admin.cities.index');
    }



    /**
      * This method returns the states based on country
      * @param  [type] $request [description]
      * @return [type] array    [description]
      */
     public function getStates(Request $request)
     {
        $country_id = $request->id;

        $states = State::where('country_id','=',$country_id)->orderBy('state')->get();

        return json_encode(array('states'=>$states));
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
    }

    /**
     * [getRedirectUrl description]
     * @return [type] [description]
     */
    public function getRedirectUrl()
    {
      return URL_CITIES;
    }


    /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_CITIES;
       else
          return false;
    }
}
