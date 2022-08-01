<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePermissionsRequest;
use App\Http\Requests\Admin\UpdatePermissionsRequest;

class PermissionsController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Display a listing of Permission.
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

        $data['title']              = getPhrase('permissions');
        $data['active_class']       = 'user_management';

        $permissions = Permission::all();
        $data['permissions'] = $permissions;

        return view('admin.permissions.index', $data);
    }

    /**
     * Show the form for creating new Permission.
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

        $data['title']              = getPhrase('permissions');
        $data['active_class']       = 'user_management';

        return view('admin.permissions.create',$data);
    }

    /**
     * Store a newly created Permission in storage.
     *
     * @param  \App\Http\Requests\StorePermissionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $permission = Permission::create($request->all());

        return redirect()->route('admin.permissions.index');
    }


    /**
     * Show the form for editing Permission.
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

        $permission = Permission::findOrFail($id);

        $data['title']              = getPhrase('permissions');
        $data['active_class']       = 'user_management';

        $data['permission']         = $permission;

        return view('admin.permissions.edit', $data);
    }

    /**
     * Update Permission in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionsRequest  $request
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

        $permission = Permission::findOrFail($id);
        $permission->update($request->all());



        return redirect()->route('admin.permissions.index');
    }


    /**
     * Display Permission.
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

        $roles = \App\Role::whereHas('permission',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $permission = Permission::findOrFail($id);

        $data['title']              = getPhrase('permissions');
        $data['active_class']       = 'user_management';

        $data['permission']         = $permission;
        $data['roles']              = $roles;

        return view('admin.permissions.show', $data);
    }


    /**
     * Remove Permission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $permission = Permission::findOrFail($id);
        $permission->delete();

        return redirect()->route('admin.permissions.index');
    }

    /**
     * Delete all selected Permission at once.
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
        
        if ($request->input('ids')) {
            $entries = Permission::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
