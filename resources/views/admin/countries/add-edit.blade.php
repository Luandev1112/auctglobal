@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{getPhrase('countries')}}</h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            {{ isset($title) ? $title : ''}}
        </div>

        {{--@include('errors.errors')--}}

        <div class="panel-body form-auth-style" id="app">

        	<div class="row">
        		@if ($record)
				{{ Form::model($record, 
				array('url' => URL_COUNTRIES_EDIT.'/'.$record->slug, 
				'method'=>'PATCH', 'name'=>'formValidate', 'novalidate'=>'')) }}
				@else
				{!! Form::open(array('url' => URL_COUNTRIES_ADD, 'method' => 'POST','name'=>'formValidate', 'novalidate'=>'')) !!}
				@endif

				@include('admin.countries.form_elements', array('record' => $record))

				{!! Form::close() !!}
			</div>

    	</div>

@endsection


@section('footer_scripts')
@include('common.validations')
@include('common.alertify')

@stop    