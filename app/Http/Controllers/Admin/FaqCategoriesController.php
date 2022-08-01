<?php

namespace App\Http\Controllers\Admin;

use App\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFaqCategoriesRequest;
use App\Http\Requests\Admin\UpdateFaqCategoriesRequest;

class FaqCategoriesController extends Controller
{

     public function __construct()
    {
         $this->middleware('auth');
    }
    
    /**
     * Display a listing of FaqCategory.
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

        $faq_categories = FaqCategory::all();

        $data['faq_categories']     = $faq_categories;
        $data['title']              = getPhrase('categories');
        $data['active_class']       = 'faqs';

        return view('admin.faq_categories.index', $data);
    }

    /**
     * Show the form for creating new FaqCategory.
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
        $data['active_class'] = 'faqs';
        $data['record']       = FALSE;

        return view('admin.faq_categories.add-edit',$data);
    }

    /**
     * Store a newly created FaqCategory in storage.
     *
     * @param  \App\Http\Requests\StoreFaqCategoriesRequest  $request
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
         'title'      => 'bail|required|max:100',
        ]);

        $record = new FaqCategory();

        $title = $request->title;

        $record->title           = $title;
        $record->slug            = $record->makeSlug($title, TRUE);
        $record->status          = $request->status;
        

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record->save();

        flash('success','record_added_successfully', 'success');
        return redirect(URL_FAQ_CATEGORIES);
    }


    /**
     * Show the form for editing FaqCategory.
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
        $data['active_class'] = 'faqs';

        $category = FaqCategory::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($category))
             return redirect($isValid);


        $data['record'] = $category;

        return view('admin.faq_categories.add-edit',$data);
    }

    /**
     * Update FaqCategory in storage.
     *
     * @param  \App\Http\Requests\UpdateFaqCategoriesRequest  $request
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


        $record = FaqCategory::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);

        $this->validate($request, [
         'title'      => 'bail|required|max:100',
        ]);



        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $title = $request->title;

         /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($title != $record->title)
            $record->slug = $record->makeSlug($title, TRUE);


        $record->title           = $title;
        $record->status          = $request->status;
        
        $record->save();

        flash('success','record_updated_successfully', 'success');
        return redirect(URL_FAQ_CATEGORIES);
    }


    /**
     * Display FaqCategory.
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

        $faq_category = FaqCategory::getRecordWithSlug($slug);


        if ($isValid = $this->isValidRecord($faq_category))
             return redirect($isValid);

        $faq_questions = \App\FaqQuestion::where('category_id', $faq_category->id)->get();


        $data['title']        = getPhrase('view');
        $data['active_class'] = 'faqs';
        $data['faq_category'] = $faq_category;
        $data['faq_questions']= $faq_questions;

        return view('admin.faq_categories.show', $data);
    }


    /**
     * Remove FaqCategory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq_category = FaqCategory::findOrFail($id);
        $faq_category->delete();

        return redirect()->route('admin.faq_categories.index');
    }

    /**
     * Delete all selected FaqCategory at once.
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

        $category = FaqCategory::where('id',$request->id)->first();

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
                  if(!env('DEMO_MODE')) {
                     

                   $questions = $category->getCategoryQuestions()->get();

                   if (count($questions)) {

                        $response['status']  = 0;
                        $response['message'] = getPhrase('this_record_is_in_use_in_other_modules');

                   } else {

                        $entries = FaqCategory::where('id', $request->id)->get();

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
      return URL_FAQ_CATEGORIES;
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_FAQ_CATEGORIES;
       else
          return false;
    }


}
