@extends($layout)

@section('content')

    <h2 style="margin-top:0px;">@yield('title')</h2>

    <div class="row" style="margin-top:15px;">

        {{--Sidebar--}}
        <div class="col-xs-3">
            <a href="{{ URL_MESSENGER_ADD }}" class="btn btn-primary btn-group-justified">{{getPhrase('new_message')}}</a>

            <div class="list-group" style="margin-top:8px;">
                <a href="{{ URL_MESSENGER }}" class="list-group-item">{{getPhrase('all_messages')}}</a>
                @php($unread = App\MessengerTopic::unreadInboxCount())
                <a href="{{ URL_MESSENGER_INBOX }}" class="list-group-item {{ ($unread > 0 ? 'unread' : '') }}">
                    Inbox
                    {{ ($unread > 0 ? '('.$unread.')' : '') }}
                </a>
                <a href="{{ URL_MESSENGER_OUTBOX }}" class="list-group-item">{{getPhrase('outbox')}}</a>
            </div>
        </div>


        {{--Main content--}}
        <div class="col-xs-9">
            @yield('messenger-content')
        </div>
    </div>

@stop
