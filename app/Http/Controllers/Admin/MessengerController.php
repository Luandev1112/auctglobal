<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\MessengerTopic;
use App\Http\Controllers\Controller;

class MessengerController extends Controller
{

     public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!checkRole(getUserGrade(7)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $topics = Auth::user()->topics()->with('receiver', 'sender')->orderBy('sent_at', 'desc')->get();
        $title  = 'Messages';

        $data['topics'] = $topics;
        $data['title']  = $title;
        $data['layout'] = getLayOut();
        $data['active_class'] = 'all_messages';


        if (checkRole(getUserGrade(4)))
           return view('admin.messenger.index', $data);
        elseif (checkRole(getUserGrade(2)))
           return view('bidder.messenger.index', $data);
        else
           return redirect(URL_USERS_LOGIN);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (!checkRole(getUserGrade(7)))
        {
            prepareBlockUserMessage();
            return back();
        }

        if (checkRole(getUserGrade(1))) {
            $users = User::all()->pluck('email', 'id');
        } else {
            $users = User::where('role_id',getRoleData('admin'))->pluck('email', 'id');
        }

        $data['user']  =  FALSE;

        $data['users']  = $users;
        $data['title']  = getPhrase('create');
        $data['layout'] = getLayOut();
        $data['active_class'] = 'create_message';

        if (checkRole(getUserGrade(4))) {
           return view('admin.messenger.create', $data);
        }
        elseif (checkRole(getUserGrade(2))) {
           return view('bidder.messenger.create', $data);
        }
        else
           return redirect(URL_USERS_LOGIN);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMessageRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageRequest $request)
    {

        if (!checkRole(getUserGrade(7)))
        {
            prepareBlockUserMessage();
            return back();
        }

         if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }
          

        $sender = Auth::user()->id;

        MessengerTopic::create([
            'subject'     => $request->input('subject'),
            'sender_id'   => $sender,
            'receiver_id' => $request->input('receiver'),
            'sent_at'     => Carbon::now(),
        ])->read()
            ->messages()->create([
                'sender_id' => $sender,
                'content'   => $request->input('content'),
            ]);

        // return redirect()->route('admin.messenger.index');
        
        flash('success','message_sent_successfully', 'success');   
        return redirect(URL_MESSENGER);
    }

    /**
     * Display the specified resource.
     *
     * @param MessengerTopic $topic
     * @return \Illuminate\Http\Response
     * @internal param MessengerTopic $topic
     * @internal param int $id
     */
    public function show(MessengerTopic $topic)
    {

        if (!checkRole(getUserGrade(7)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $user = Auth::user();

        if ($topic->receiver->id != $user->id && $topic->sender->id != $user->id) {
            return abort(401);
        }

        $topic->load('receiver', 'sender', 'messages');
        $unreadMessages = [];
        foreach($topic->messages as $message) {
            if($message->unread($topic)) {
                $unreadMessages[] = $message->id;
            }
        }
        $topic->read();

        $data['topic']  = $topic;
        $data['unreadMessages']  = $unreadMessages;

        $data['layout'] = getLayOut();
        $data['active_class'] = 'inbox';

        if (checkRole(getUserGrade(4)))
           return view('admin.messenger.show', $data);
        elseif (checkRole(getUserGrade(2)))
           return view('bidder.messenger.show', $data);
        else
           return redirect(URL_USERS_LOGIN);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param MessengerTopic $topic
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(MessengerTopic $topic)
    {

        if (!checkRole(getUserGrade(7)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $user = Auth::user();
        if ($topic->receiver->id != $user->id && $topic->sender->id != $user->id) {
            return abort(401);
        }
        $topic->load('receiver', 'sender');
        $user = $topic->otherPerson()->email;

        $data['topic']      = $topic;
        $data['user']       = $user;
        $data['layout']     = getLayOut();
        $data['active_class'] = 'create_message';

        if (checkRole(getUserGrade(4)))
           return view('admin.messenger.reply', $data);
        elseif (checkRole(getUserGrade(2)))
           return view('bidder.messenger.reply', $data);
        else
           return redirect(URL_USERS_LOGIN);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMessageRequest|Request $request
     * @param MessengerTopic $topic
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(UpdateMessageRequest $request, MessengerTopic $topic)
    {
        if (!checkRole(getUserGrade(7)))
        {
            prepareBlockUserMessage();
            return back();
        }


        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }
          

        $user = Auth::user();
        if ($topic->receiver->id != $user->id && $topic->sender->id != $user->id) {
            return abort(401);
        }

        $topic->sent_at = Carbon::now();
        $topic->save();
        $topic->read();
        $topic->messages()->create([
            'sender_id' => Auth::user()->id,
            'content'   => $request->input('content'),
        ]);

        flash('success','message_sent_successfully', 'success');   
        return redirect()->route('messenger.show', $topic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param MessengerTopic $topic
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @internal param int $id
     */
    public function destroy(Request $request)
    {

        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

         if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }
          
          
        $topic = MessengerTopic::where('id',$request->id)->first();
       
        $user  = Auth::user();
        /*if ($topic->receiver->id != $user->id && $topic->sender->id != $user->id) {
            return abort(401);
        }*/

        $topic->delete();

        flash('success','message_deleted_successfully', 'success'); 
        return redirect()->route('messenger.index');
    }

    public function inbox()
    {

        if (!checkRole(getUserGrade(7)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $topics = Auth::user()->inbox()->with('receiver', 'sender')->orderBy('sent_at', 'desc')->get();
        $title  = 'Inbox';

        $data['topics'] = $topics;
        $data['title']  = $title;
        $data['layout'] = getLayOut();
        $data['active_class'] = 'inbox';

        if (checkRole(getUserGrade(4)))
           return view('admin.messenger.index', $data);
        elseif (checkRole(getUserGrade(2)))
           return view('bidder.messenger.index', $data);
        else
           return redirect(URL_USERS_LOGIN);

       
    }

    public function outbox()
    {

        if (!checkRole(getUserGrade(7)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $topics = Auth::user()->outbox()->with('receiver', 'sender')->orderBy('sent_at', 'desc')->get();
        $title  = 'Outbox';

        $data['topics'] = $topics;
        $data['title']  = $title;
        $data['layout'] = getLayOut();
        $data['active_class'] = 'outbox';

        if (checkRole(getUserGrade(4)))
           return view('admin.messenger.index', $data);
        elseif (checkRole(getUserGrade(2)))
           return view('bidder.messenger.index', $data);
        else
           return redirect(URL_USERS_LOGIN);

    }


       /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_MESSENGER;
       else
          return false;
    }
}
