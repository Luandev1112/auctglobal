<?php

namespace App\Http\Controllers\Admin;

use App\UserAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserActionsRequest;
use App\Http\Requests\Admin\UpdateUserActionsRequest;

class UserActionsController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Display a listing of UserAction.
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
        
        $data['title']              = getPhrase('users');
        $data['active_class']       = 'user_management';

        $user_actions = UserAction::all();
        $data['user_actions']       = $user_actions;

        return view('admin.user_actions.index', $data);
    }
}
