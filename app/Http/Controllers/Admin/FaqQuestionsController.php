<?php

namespace App\Http\Controllers\Admin;

use App\FaqQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFaqQuestionsRequest;
use App\Http\Requests\Admin\UpdateFaqQuestionsRequest;

class FaqQuestionsController extends Controller
{
    
    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Display a listing of FaqQuestion.
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

        $faq_questions = FaqQuestion::all();

        $data['faq_questions']      = $faq_questions;
        $data['title']              = getPhrase('faq_questions');
        $data['active_class']       = 'faqs';

        return view('admin.faq_questions.index', $data);
    }

    /**
     * Show the form for creating new FaqQuestion.
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

      
        $data['categories']  = FaqQuestion::getFaqCategories();

        return view('admin.faq_questions.add-edit', $data);
    }

    /**
     * Store a newly created FaqQuestion in storage.
     *
     * @param  \App\Http\Requests\StoreFaqQuestionsRequest  $request
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
         'question_text' => 'bail|required',
         'answer_text'   => 'bail|required'
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }
          

        $record = new FaqQuestion();

        $question_text = $request->question_text;

        $record->question_text   = $question_text;
        $record->slug            = $record->makeSlug($question_text, TRUE);

        $record->category_id     = $request->category_id;
        $record->answer_text     = $request->answer_text;
        $record->status          = $request->status;
        
        $record->save();

        flash('success','record_added_successfully', 'success');
        return redirect(URL_FAQ_QUESTIONS);
        

    }


    /**
     * Show the form for editing FaqQuestion.
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

        $faq_question = FaqQuestion::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($faq_question))
             return redirect($isValid);

        $data['title']        = getPhrase('edit');
        $data['active_class'] = 'faqs';

        $categories = FaqQuestion::getFaqCategories();

        $data['record']     = $faq_question;
        $data['categories'] = $categories;

        return view('admin.faq_questions.add-edit', $data);
    }

    /**
     * Update FaqQuestion in storage.
     *
     * @param  \App\Http\Requests\UpdateFaqQuestionsRequest  $request
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

        $record = FaqQuestion::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);

        $this->validate($request, [
         'category_id'   => 'bail|required',
         'question_text' => 'bail|required',
         'answer_text'   => 'bail|required'
        ]);


        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $question_text = $request->question_text;

         /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($question_text != $record->question_text)
            $record->slug = $record->makeSlug($question_text, TRUE);


        $record->category_id     = $request->category_id;
        $record->question_text   = $request->question_text;
        $record->answer_text     = $request->answer_text;
        $record->status          = $request->status;
        
        $record->save();

        flash('success','record_updated_successfully', 'success');
        return redirect(URL_FAQ_QUESTIONS);
    }


    /**
     * Display FaqQuestion.
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

        $faq_question = FaqQuestion::join('faq_categories',
                                    'faq_questions.category_id','faq_categories.id')
                                    ->where('faq_questions.slug',$slug)->first();


        if ($isValid = $this->isValidRecord($faq_question))
             return redirect($isValid);

        $data['title']        = getPhrase('view');
        $data['active_class'] = 'faqs';
        $data['faq_question'] = $faq_question;
       

        return view('admin.faq_questions.show', $data);
    }


    /**
     * Remove FaqQuestion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq_question = FaqQuestion::findOrFail($id);
        $faq_question->delete();

        return redirect()->route('admin.faq_questions.index');
    }

    /**
     * Delete all selected FaqQuestion at once.
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

        $faq_question = FaqQuestion::where('id',$request->id)->first();

        if ($isValid = $this->isValidRecord($faq_question)) {

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
                     
                    $entries = FaqQuestion::where('id', $request->id)->get();

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
      return URL_FAQ_QUESTIONS;
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_FAQ_QUESTIONS;
       else
          return false;
    }
}
