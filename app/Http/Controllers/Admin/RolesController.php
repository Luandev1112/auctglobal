<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRolesRequest;
use App\Http\Requests\Admin\UpdateRolesRequest;

class RolesController extends Controller
{
    
    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Display a listing of Role.
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

        $data['title']              = getPhrase('roles');
        $data['active_class']       = 'user_management';

        $roles = Role::all();
        $data['roles']              = $roles;

        return view('admin.roles.index', $data);
    }

    /**
     * Show the form for creating new Role.
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

        $data['title']              = getPhrase('roles');
        $data['active_class']       = 'user_management';
        
        $permissions = \App\Permission::get()->pluck('title', 'id');

        $data['permissions']        = $permissions;

        return view('admin.roles.create', $data);
    }

    /**
     * Store a newly created Role in storage.
     *
     * @param  \App\Http\Requests\StoreRolesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $role = Role::create($request->all());
        $role->permission()->sync(array_filter((array)$request->input('permission')));



        return redirect()->route('admin.roles.index');
    }


    /**
     * Show the form for editing Role.
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

        $permissions = \App\Permission::get()->pluck('title', 'id');


        $role = Role::findOrFail($id);

        $data['title']              = getPhrase('roles');
        $data['active_class']       = 'user_management';
        $data['role']               = $role;
        $data['permissions']        = $permissions;

        return view('admin.roles.edit', $data);
    }

    /**
     * Update Role in storage.
     *
     * @param  \App\Http\Requests\UpdateRolesRequest  $request
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

        $role = Role::findOrFail($id);
        $role->update($request->all());
        $role->permission()->sync(array_filter((array)$request->input('permission')));



        return redirect()->route('admin.roles.index');
    }


    /**
     * Display Role.
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

        $permissions = \App\Permission::get()->pluck('title', 'id');
        $users = \App\User::whereHas('role',
                    function ($query) use ($id) {
                        $query->where('users.id', $id);
                    })->get();

        $role = Role::findOrFail($id);

        $data['title']              = getPhrase('roles');
        $data['active_class']       = 'user_management';

        $data['role']               = $role;
        $data['users']              = $users;

        return view('admin.roles.show', $data);
    }


    /**
     * Remove Role from storage.
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

        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('admin.roles.index');
    }

    /**
     * Delete all selected Role at once.
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
            $entries = Role::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
