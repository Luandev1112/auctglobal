@extends('layouts.admin.adminlayout')

@section('custom_div')


@if (isset($record) && count($record))
    <div ng-controller="prepareCitiesData" ng-init="initFunctions()">
@else
     <div ng-controller="prepareCitiesData">
@endif

@stop


@section('content')
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
							<li><a href="{{URL_BRANCHES.'all'}}">{{ getPhrase('branches')}}</a> </li>
							<li class="active">{{isset($title) ? $title : ''}}</li>
						</ol>
					</div>
				</div>
					@include('errors.errors')
				<!-- /.row -->
				
				<div class="panel panel-custom col-lg-12">
					<div class="panel-heading">
						<div class="pull-right messages-buttons">
							<a href="{{URL_BRANCHES.'all'}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>
						</div>
					<h1>{{ $title }}  </h1>
					</div>
					<div class="panel-body  form-auth-style" id="app">
					<?php $button_name = getPhrase('create'); ?>
					@if ($record)
					 <?php $button_name = getPhrase('update'); ?>
						{{ Form::model($record, 
						array('url' => URL_BRANCHES_EDIT.'/'. $record->slug, 
						'method'=>'patch', 'name'=>'formBranches' ,'novalidate'=>'')) }}
					@else
						{!! Form::open(array('url' => URL_BRANCHES_ADD, 'method' => 'POST', 'name'=>'formBranches', 'novalidate'=>'')) !!}
					@endif

					 @include('mastersettings.branches.form_elements', 
					 array('button_name'=> $button_name,'record'=>$record,'banks'=>$banks,'state_options'=>$state_options),
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

@include('common.validations',array('load_module'=> TRUE))
@include('masterSettings.branches.scripts.branch-js-scripts')

@stop