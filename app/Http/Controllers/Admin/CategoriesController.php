<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\Admin\StoreCategoriesRequest;
use App\Http\Requests\Admin\UpdateCategoriesRequest;*/
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class CategoriesController extends Controller
{

     public function __construct()
    {
         $this->middleware('auth');
    }
    
    /**
     * Display a listing of Category.
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

        $categories = Category::all();

         $data['categories'] = $categories;
      
        $data['title']              = getPhrase('categories');
        $data['active_class']       = 'categories';

        return view('admin.categories.index',$data);
    }

    /**
     * Show the form for creating new Category.
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
        $data['active_class'] = 'categories';
        $data['record']       = FALSE;

        return view('admin.categories.add-edit', $data);
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param  \App\Http\Requests\StoreCategoriesRequest  $request
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
         'category'      => 'bail|required|max:50',
         'description'   => 'bail|max:200',
        
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record = new Category();

        $category = $request->category;

        $record->category = $category;
        $record->slug            = $record->makeSlug($category, TRUE);
        $record->description     = $request->description;
        $record->status          = $request->status;

        $record->save();

        flash('success','record_added_successfully', 'success');
        return redirect(URL_CATEGORIES);
    }


    /**
     * Show the form for editing Category.
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
        $data['active_class'] = 'categories';


        $category = Category::getRecordWithSlug($slug);
        
        if ($isValid = $this->isValidRecord($category))
             return redirect($isValid);
       

        $data['record'] = $category;

        return view('admin.categories.add-edit',$data);
    }

    /**
     * Update Category in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriesRequest  $request
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

        $record = Category::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);

        $this->validate($request, [
         'category'      => 'bail|required|max:50',
         'description'   => 'bail|max:200',
        
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $category = $request->category;

        /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($category != $record->category)
            $record->slug = $record->makeSlug($category, TRUE);


        $record->category        = $category;
        $record->description     = $request->description;
        $record->status          = $request->status;

        $record->save();

        flash('success','record_updated_successfully', 'success');
        return redirect(URL_CATEGORIES);
    }


    /**
     * Display Category.
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

        $category = Category::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($category))
             return redirect($isValid);
         
        $data['title']        = getPhrase('view');
        $data['active_class'] = 'categories';
        
        $data['category']       = $category; 
        $data['sub_catogories'] = \App\SubCatogory::where('category_id',$category->id)->get();
        $data['creates'] = null;
        return view('admin.categories.show',$data);
    }


    /**
     * Remove Category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories.index');
    }

    /**
     * Delete all selected Category at once.
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
        
        $category = Category::where('id',$request->id)->first();

        if ($isValid = $this->isValidRecord($category)) {

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
                     
                    $sub_categories = $category->getSubCategories()->get();

                    if (count($sub_categories)) {
                        
                        $response['status']  = 0;
                        $response['message'] = getPhrase('this_record_is_in_use_in_other_modules');

                    } else {

                        $entries = Category::where('id', $request->id)->get();

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
     * Restore Category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();

        return redirect()->route('admin.categories.index');
    }

    /**
     * Permanently delete Category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->forceDelete();

        return redirect()->route('admin.categories.index');
    }

     public function isValidRecord($record)
    {
      if ($record === null) {
        flash('Ooops...!', getPhrase("page_not_found"), 'error');
        return $this->getRedirectUrl();
       }

       return FALSE;
    }


    public function getRedirectUrl()
    {
      return URL_CATEGORIES;
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_CATEGORIES;
       else
          return false;
    }

}
