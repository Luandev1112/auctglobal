@extends('admin.messenger.template')

@section('title', 'New message')

@section('messenger-content')

    <div class="form-auth-style">

    <div class="row">

        <div class="col-md-12">
        	{{--
            {!! Form::open(['route' => ['admin.messenger.store'], 'method' => 'POST', 'novalidate', 'class' => 'stepperForm validate']) !!}

            @include('admin.messenger.form-partials.fields')

            {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            --}}

            @if ($user)
			{{ Form::model($user, 
			array('url' => URL_MESSENGER_EDIT, 
			'method'=>'POST', 'name'=>'formValidate', 'novalidate'=>'', 'class'=>'stepperForm validate' )) }}
			@else
			{!! Form::open(array('url' => URL_MESSENGER_ADD, 'method' => 'POST','name'=>'formValidate', 'novalidate'=>'', 'class'=>'stepperForm validate')) !!}
			@endif

			@include('admin.messenger.form-partials.fields',array('user' => $user))

			{!! Form::close() !!}

        </div>
    </div>

</div>
@stop


@section('footer_scripts')
@include('common.validations')
@endsection
