@extends('layouts.app')

@section('custom_div')

@if (isset($record) && count($record))
    <div ng-controller="prepareCitiesData" ng-init="initFunctions()">
@else
     <div ng-controller="prepareCitiesData">
@endif

@stop


@section('content')
    <h3 class="page-title">{{getPhrase('cities')}}</h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            {{ isset($title) ? $title : ''}}
        </div>

       
        <div class="panel-body form-auth-style" id="app">

        	<div class="row">
        		@if ($record)
				{{ Form::model($record, 
				array('url' => URL_CITIES_EDIT.'/'.$record->slug, 
				'method'=>'PATCH', 'name'=>'formValidate', 'novalidate'=>'')) }}
				@else
				{!! Form::open(array('url' => URL_CITIES_ADD, 'method' => 'POST','name'=>'formValidate', 'novalidate'=>'')) !!}
				@endif

				@include('admin.cities.form_elements', array('record' => $record))

				{!! Form::close() !!}
			</div>

    	</div>

@endsection


@section('footer_scripts')
@include('common.validations')
@include('common.alertify')

@include('admin.cities.scripts.cities-js-scripts')


@stop    