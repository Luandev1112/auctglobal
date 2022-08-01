@extends('layouts.admin.adminlayout')
@section('content')
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
							<li><a href="{{URL_LOCATIONS}}">{{ getPhrase('locations')}}</a> </li>
							<li class="active">{{isset($title) ? $title : ''}}</li>
						</ol>
					</div>
				</div>
					@include('errors.errors')
				<!-- /.row -->
				
				<div class="panel panel-custom col-lg-6 col-lg-offset-3">
					<div class="panel-heading">
						<div class="pull-right messages-buttons">
							<a href="{{URL_LOCATIONS}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>
						</div>
					<h1>{{ $title }}  </h1>
					</div>
					<div class="panel-body  form-auth-style" id="app">
					<?php $button_name = getPhrase('create'); ?>
					@if ($record)
					 <?php $button_name = getPhrase('update'); ?>
						{{ Form::model($record, 
						array('url' => URL_LOCATIONS_EDIT.'/'. $record->slug, 
						'method'=>'patch', 'name'=>'formLocations', 'novalidate'=>'')) }}
					@else
						{!! Form::open(array('url' => URL_LOCATIONS_ADD, 'method' => 'POST', 'name'=>'formLocations', 'novalidate'=>'')) !!}
					@endif

					 @include('mastersettings.locations.form_elements', 
					 array('button_name'=> $button_name),
					 array())
					 
					{!! Form::close() !!}
					 

					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
@stop
@section('footer_scripts')

@include('common.validations');
@stop