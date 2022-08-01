<?php

namespace App\Http\Controllers\Admin;

use App\SubCatogory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\Admin\StoreSubCatogoriesRequest;
use App\Http\Requests\Admin\UpdateSubCatogoriesRequest;*/
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class SubCatogoriesController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Display a listing of SubCatogory.
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

        $sub_categories = SubCatogory::join('categories','categories.id','sub_catogories.category_id')
                                    ->select('sub_catogories.*','categories.category')->get();

        $data['sub_categories']    = $sub_categories;
      
        $data['title']              = getPhrase('categories');
        $data['active_class']       = 'categories';

        return view('admin.sub_catogories.index',$data);

        
    }

    /**
     * Show the form for creating new SubCatogory.
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

        $data['categories']   = SubCatogory::getCategories();

        $data['title']        = getPhrase('create');
        $data['active_class'] = 'sub_categories';
        $data['record']       = FALSE;

        return view('admin.sub_catogories.add-edit', $data);
    }

    /**
     * Store a newly created SubCatogory in storage.
     *
     * @param  \App\Http\Requests\StoreSubCatogoriesRequest  $request
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
         'category_id'   => 'bail|required',
         'sub_category' => 'bail|required|max:100',
     
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record = new SubCatogory();

        $sub_category = $request->sub_category;

        $record->sub_category    = $sub_category;
        $record->slug            = $record->makeSlug($sub_category, TRUE);

        $record->category_id     = $request->category_id;
        $record->status          = $request->status;
        
        
        $record->save();

        flash('success','record_added_successfully', 'success');
        return redirect(URL_SUB_CATEGORIES);
    }


    /**
     * Show the form for editing SubCatogory.
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

        $sub_category = SubCatogory::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($sub_category))
             return redirect($isValid);

        $data['title']        = getPhrase('edit');
        $data['active_class'] = 'categories';

        $categories = SubCatogory::getCategories();

        $data['record']     = $sub_category;
        $data['categories'] = $categories;

        return view('admin.sub_catogories.add-edit', $data);
    }

    /**
     * Update SubCatogory in storage.
     *
     * @param  \App\Http\Requests\UpdateSubCatogoriesRequest  $request
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

        $record = SubCatogory::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);

        $this->validate($request, [
         'category_id'   => 'bail|required',
         'sub_category'  => 'bail|required|max:100',
         
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $sub_category = $request->sub_category;

         /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($sub_category != $record->sub_category)
            $record->slug = $record->makeSlug($sub_category, TRUE);


        $record->category_id     = $request->category_id;
        $record->status          = $request->status;
        
        $record->save();

        flash('success','record_updated_successfully', 'success');
        return redirect(URL_SUB_CATEGORIES);
    }


    /**
     * Display SubCatogory.
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


        $sub_category = SubCatogory::join('categories',
                                    'sub_catogories.category_id','categories.id')
                                    ->select('sub_catogories.*','categories.category')
                                    ->where('sub_catogories.slug',$slug)->first();


        if ($isValid = $this->isValidRecord($sub_category))
             return redirect($isValid);

        $data['title']        = getPhrase('view');
        $data['active_class'] = 'categories';
        $data['sub_catogory'] = $sub_category;
       

        return view('admin.sub_catogories.show', $data);
    }


    /**
     * Remove SubCatogory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_catogory = SubCatogory::findOrFail($id);
        $sub_catogory->delete();

        return redirect()->route('admin.sub_catogories.index');
    }

    /**
     * Delete all selected SubCatogory at once.
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

        $sub_category = SubCatogory::where('id',$request->id)->first();

        if ($isValid = $this->isValidRecord($sub_category)) {

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
                  if (!env('DEMO_MODE')) {
                     
                    $entries = SubCatogory::where('id', $request->id)->get();

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
     * Restore SubCatogory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $sub_catogory = SubCatogory::onlyTrashed()->findOrFail($id);
        $sub_catogory->restore();

        return redirect()->route('admin.sub_catogories.index');
    }

    /**
     * Permanently delete SubCatogory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        $sub_catogory = SubCatogory::onlyTrashed()->findOrFail($id);
        $sub_catogory->forceDelete();

        return redirect()->route('admin.sub_catogories.index');
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
      return URL_SUB_CATEGORIES;
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_SUB_CATEGORIES;
       else
          return false;
    }
}
