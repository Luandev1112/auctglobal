<?php

namespace App\Http\Controllers\Admin;

use App\SocialLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSocialLoginsRequest;
use App\Http\Requests\Admin\UpdateSocialLoginsRequest;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class SocialLoginsController extends Controller
{

    /**
     * Display a listing of SocialLogin.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($filterBy = Input::get('filter')) {
            if ($filterBy == 'all') {
                Session::put('SocialLogin.filter', 'all');
            } elseif ($filterBy == 'my') {
                Session::put('SocialLogin.filter', 'my');
            }
        }

        
        if (request()->ajax()) {
            $query = SocialLogin::query();
            $query->with("created_by");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'social_logins.id',
                'social_logins.facebook_client_id',
                'social_logins.facebook_client_secret',
                'social_logins.facebook_redirect_url',
                'social_logins.facebook_login_enable',
                'social_logins.google_client_id',
                'social_logins.google_client_secret',
                'social_logins.google_redirect_url',
                'social_logins.google_login_enable',
                'social_logins.created_by_id',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'social_login_';
                $routeKey = 'admin.social_logins';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('facebook_login_enable', function ($row) {
                return $row->facebook_login_enable ? $row->facebook_login_enable : '';
            });
            $table->editColumn('google_client_secret', function ($row) {
                return $row->google_client_secret ? $row->google_client_secret : '';
            });
            $table->editColumn('google_redirect_url', function ($row) {
                return $row->google_redirect_url ? $row->google_redirect_url : '';
            });
            $table->editColumn('google_login_enable', function ($row) {
                return $row->google_login_enable ? $row->google_login_enable : '';
            });
            $table->editColumn('created_by.name', function ($row) {
                return $row->created_by ? $row->created_by->name : '';
            });

            $table->rawColumns(['actions']);

            return $table->make(true);
        }

        $data['title']              = getPhrase('site_settings');
        $data['active_class']       = 'settings';

        return view('admin.social_logins.index', $data);
    }

    /**
     * Show the form for creating new SocialLogin.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');

        return view('admin.social_logins.create', compact('created_bies'));
    }

    /**
     * Store a newly created SocialLogin in storage.
     *
     * @param  \App\Http\Requests\StoreSocialLoginsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialLoginsRequest $request)
    {
        $social_login = SocialLogin::create($request->all());



        return redirect()->route('admin.social_logins.index');
    }


    /**
     * Show the form for editing SocialLogin.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');

        $social_login = SocialLogin::findOrFail($id);

        return view('admin.social_logins.edit', compact('social_login', 'created_bies'));
    }

    /**
     * Update SocialLogin in storage.
     *
     * @param  \App\Http\Requests\UpdateSocialLoginsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialLoginsRequest $request, $id)
    {
        $social_login = SocialLogin::findOrFail($id);
        $social_login->update($request->all());



        return redirect()->route('admin.social_logins.index');
    }


    /**
     * Display SocialLogin.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $social_login = SocialLogin::findOrFail($id);

        return view('admin.social_logins.show', compact('social_login'));
    }


    /**
     * Remove SocialLogin from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social_login = SocialLogin::findOrFail($id);
        $social_login->delete();

        return redirect()->route('admin.social_logins.index');
    }

    /**
     * Delete all selected SocialLogin at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = SocialLogin::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore SocialLogin from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $social_login = SocialLogin::onlyTrashed()->findOrFail($id);
        $social_login->restore();

        return redirect()->route('admin.social_logins.index');
    }

    /**
     * Permanently delete SocialLogin from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        $social_login = SocialLogin::onlyTrashed()->findOrFail($id);
        $social_login->forceDelete();

        return redirect()->route('admin.social_logins.index');
    }
}
