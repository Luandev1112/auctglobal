@extends($layout)

@section('content')

@include('bidder.leftmenu')

    <!--Dashboard section -->
    <div class="col-lg-8 col-md-8 col-sm-12 au-onboard">
            <a href="{{URL_HOME}}" class="au-middles justify-content-start"> {{getPhrase('home')}} &nbsp;<span> / {{getPhrase('view_message')}} </span></a>


             <div class="au-left-side">

                 <div class="row">
                    <a href="{{ route('messenger.edit', [$topic->id]) }}" class="btn btn-primary login-bttn">{{getPhrase('reply')}}</a>

                    <div class="col-md-12">
                        <div class="list-group" style="margin-top:8px;">
                            @foreach($topic->messages as $message)
                                <div class="row list-group-item">
                                    <div class="row">
                                        <div class="col col-xs-10 {{ (in_array($message->id, $unreadMessages)?"unread":false) }}">
                                            {{ $message->sender->email }}
                                        </div>
                                        <div class="col col-xs-2">
                                            {{  $message->sent_at->diffForHumans()/*format('d F Y h:i')*/ }}
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                    <div class="row" style="padding-left:15px;">
                                        <div class="col col-xs-12">
                                            {{ $message->content }}
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>

                    </div>
                </div>
              </div>
    </div>


    </div>

    </div>
      </div>
    </section>
    <!--Dashboard section-->
@endsection
