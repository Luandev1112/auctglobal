@extends($layout)


@section('custom_div')

@if (isset($record) && count($record))
    <div ng-controller="prepareUserData" ng-init="initFunctions()">
@else
     <div ng-controller="prepareUserData">
@endif

@stop

@section('content')
    <h3 class="page-title">{{getPhrase('users')}}</h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            {{ isset($title) ? $title : ''}}
        </div>

        {{--@include('errors.errors')--}}

        <div class="panel-body form-auth-style" id="app">

        	<div class="row">
        		@if ($record)
				{{ Form::model($record, 
				array('url' => URL_USERS_EDIT.'/'.$record->slug, 
				'method'=>'PATCH', 'name'=>'formValidate', 'files'=>'true' , 'novalidate'=>'')) }}
				@else
				{!! Form::open(array('url' => URL_USERS_ADD, 'method' => 'POST','name'=>'formValidate', 'files'=>'true', 'novalidate'=>'')) !!}
				@endif

				@include('admin.users.form_elements', array('record' => $record))

				{!! Form::close() !!}
			</div>

    	</div>
    </div>
@endsection

</div>


@section('footer_scripts')
@include('common.validations')
@include('common.alertify')

@include('admin.users.scripts.user-js-scripts')

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



var company_logo = document.getElementById('company_logo_input');

company_logo.onchange = function(e){
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