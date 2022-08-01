@extends('layouts.app')



@section('content')
    <h3 class="page-title">{{getPhrase('templates')}}</h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            {{ isset($title) ? $title : ''}}
        </div>

        {{--@include('errors.errors')--}}

        <div class="panel-body form-auth-style" id="app">

        	<div class="row">
        		@if ($record)
				{{ Form::model($record, 
				array('url' => URL_EMAIL_TEMPLATES_EDIT.'/'.$record->slug, 
				'method'=>'PATCH', 'name'=>'formValidate', 'novalidate'=>'')) }}
				@else
				{!! Form::open(array('url' => URL_EMAIL_TEMPLATES_ADD, 'method' => 'POST','name'=>'formValidate', 'novalidate'=>'')) !!}
				@endif

				@include('admin.templates.form_elements', array('record' => $record))

				{!! Form::close() !!}
			</div>

    	</div>

@endsection


@section('footer_scripts')
@include('common.validations')
@include('common.alertify')

<script src="{{PREFIX1}}ckeditor/ckeditor.js"></script>
<script src="{{PREFIX1}}ckeditor/adapters/jquery.js"></script>


 <script>
        CKEDITOR.replace( 'content' );
        $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['content'].getData().replace(/<[^>]*>/gi, '').length;
            if( !messageLength ) {
                // alert( 'Please enter content' );
                alertify.error('Please enter content');
                e.preventDefault();
            }
        });
    </script>

@stop    