@extends($layout)

@section('content')

@include('bidder.leftmenu')

    <!--Dashboard section -->


    <div class="col-lg-8 col-md-8 col-sm-12 au-onboard">


            <a href="{{URL_HOME}}" class="au-middles justify-content-start"> {{getPhrase('home')}} &nbsp;<span> / {{getPhrase('reply_message')}} </span></a>

             <div class="au-left-side form-auth-style">

             <div class="row">

             <div class="col-lg-12">


                @if ($user)
                {{ Form::model($user,
                array('route' => ['messenger.update', $topic->id],
                'method'=>'PUT', 'name'=>'formValidate', 'novalidate'=>'', 'class'=>'stepperForm validate' )) }}
                @else
                {!! Form::open(array('url' => URL_MESSENGER_ADD, 'method' => 'POST','name'=>'formValidate', 'novalidate'=>'', 'class'=>'stepperForm validate')) !!}
                @endif

                @include('bidder.messenger.form-partials.fields',array('user' => $user))

                {!! Form::close() !!}

            </div>
              </div>



              </div>

            </div>

              </div>
      </div>
    </section>
    <!--Dashboard section-->

     <style>
        .messenger-table tr:first-child td {
            border-top: 0 !important;
        }
        .unread {
            font-weight: bold;
            color:black;
        }
    </style>
@endsection


