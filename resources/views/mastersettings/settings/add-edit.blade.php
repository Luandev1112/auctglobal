@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{getPhrase('settings')}}</h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            {{ isset($title) ? $title : ''}}
        </div>

        {{--@include('errors.errors')--}}

        <div class="panel-body form-auth-style" id="app">

        	<div class="row">
        		@if ($record)
				{{ Form::model($record, 
				array('url' => URL_SETTINGS_EDIT.$record->slug, 
				'method'=>'PATCH', 'name'=>'formValidate', 'files'=>'true' , 'novalidate'=>'')) }}
				@else
				{!! Form::open(array('url' => URL_SETTINGS_ADD, 'method' => 'POST','name'=>'formValidate', 'files'=>'true' ,'novalidate'=>'')) !!}
				@endif

				@include('masterSettings.settings.form_elements', array('record' => $record))

				{!! Form::close() !!}
			</div>

    	</div>

@endsection


@section('footer_scripts')

@include('common.validations')
@include('common.alertify')



<script>
    var file = document.getElementById('image_input');

file.onchange = function(e){
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch(ext)
    {
        case 'jpg':
        case 'jpeg':
        case 'png':

            break;
        default:
               alertify.error("{{getPhrase('file_type_not_allowed')}}");
            this.value='';
    }
};
 </script>

@stop    