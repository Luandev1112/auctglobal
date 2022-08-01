<?php

namespace App\Http\Controllers\Admin;

use App\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\Admin\StoreTemplatesRequest;
use App\Http\Requests\Admin\UpdateTemplatesRequest;*/
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class TemplatesController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }
    
    /**
     * Display a listing of Template.
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

        $data['active_class'] = 'email_templates';
        $data['title'] = getPhrase('email_templates');

        $templates = Template::all();
      
        $data['templates']      = $templates;

        return view('admin.templates.index', $data);
    }

    /**
     * Show the form for creating new Template.
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

        $data['active_class']   = 'email_templates';
        $data['title']          = getPhrase('email_templates');
        $data['record']         = FALSE;
        return view('admin.templates.add-edit', $data);
    }

    /**
     * Store a newly created Template in storage.
     *
     * @param  \App\Http\Requests\StoreTemplatesRequest  $request
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
         'type'       => 'bail|required',
         'subject'    => 'bail|required|max:100',  
         'content'    => 'bail|required',
        
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record = new Template();

        $title = $request->title;

        $record->title = $title;
        $record->slug            = $record->makeSlug($title, TRUE);

        $record->type          = $request->type;
        $record->subject       = $request->subject;
        $record->content       = $request->content;


        $record->save();

        flash('success','record_added_successfully', 'success');
        return redirect(URL_EMAIL_TEMPLATES);

    }


    /**
     * Show the form for editing Template.
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
        $data['active_class'] = 'email_templates';


        $template = Template::getRecordWithSlug($slug);
        
        if ($isValid = $this->isValidRecord($template))
             return redirect($isValid);
       

        $data['record'] = $template;

        return view('admin.templates.add-edit', $data);
    }

    /**
     * Update Template in storage.
     *
     * @param  \App\Http\Requests\UpdateTemplatesRequest  $request
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

        $record = Template::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);

        $this->validate($request, [
         'title'      => 'bail|required|max:100',
         'type'       => 'bail|required',
         'subject'    => 'bail|required|max:100',  
         'content'    => 'bail|required',
        
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


        $record->title         = $title;

        $record->type          = $request->type;
        $record->subject       = $request->subject;
        $record->content       = $request->content;


        $record->save();

        flash('success','record_updated_successfully', 'success');
        return redirect(URL_EMAIL_TEMPLATES);
    }


    /**
     * Display Template.
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

        $template = Template::findOrFail($id);

        return view('admin.templates.show', compact('template'));
    }


    /**
     * Remove Template from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $template = Template::findOrFail($id);
        $template->delete();

        return redirect()->route('admin.templates.index');
    }

    /**
     * Delete all selected Template at once.
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

        $template = Template::where('id',$request->id)->first();

        if ($isValid = $this->isValidRecord($template)) {

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
                     
                    $entries = Template::where('id', $request->id)->get();

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
                    $response['message'] =  getPhrase('this_record_is_in_use_in_other_modules');
            }  

            
        } else {

            $response['status'] = 0;
            $response['message'] = getPhrase('invalid_operation');
        }

        return json_encode($response);
    }


    /**
     * Restore Template from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $template = Template::onlyTrashed()->findOrFail($id);
        $template->restore();

        return redirect()->route('admin.templates.index');
    }

    /**
     * Permanently delete Template from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        $template = Template::onlyTrashed()->findOrFail($id);
        $template->forceDelete();

        return redirect()->route('admin.templates.index');
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
      return URL_EMAIL_TEMPLATES;
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_EMAIL_TEMPLATES;
       else
          return false;
    }


}
