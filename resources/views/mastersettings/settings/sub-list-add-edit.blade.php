@extends('layouts.app')

@section('header_scripts')
<link rel="stylesheet" type="text/css" href="{{CSS}}select2.css">

<link rel="stylesheet" type="text/css" href="{{CSS}}checkbox.css">
@stop

@section('content')
    <h3 class="page-title">{{getPhrase('settings')}}</h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            {{ isset($title) ? $title : ''}}
        </div>

        {{--@include('errors.errors')--}}

        <div class="panel-body" ng-controller="angTopicsController">

            <?php $field_types = array(
                            '' => 'Select Type',
                            'text' => 'Text',
                            'number' => 'Number',
                            'email' => 'Email',
                            'password' => 'Password',
                            'select' => 'Select',
                            'checkbox' => 'Checkbox',
                            'file' => 'Image(.png/.jpeg/.jpg)',
                            'textarea' => 'Textarea',
                            ); ?>

            {!! Form::open(array('url' => URL_SETTINGS_ADD_SUBSETTINGS.$record->slug, 'method' => 'POST', 
                        'name'=>'formSettings ', 'files'=>'true')) !!}
                                      
        	<div class="row">
        		
                <div class="col-xs-6">  

                     <div class="form-group">

                        {{ Form::label('key', getphrase('key')) }}
                        <span class="text-red">*</span>
                        {{ Form::text('key', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => getPhrase('setting_key'),
                    
                         ))}}

                     </div>


                     <div class="form-group">

                       {{ Form::label('tool_tip', getphrase('tool_tip')) }}
                        <span class="text-red">*</span>
                        {{ Form::text('tool_tip', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => getPhrase('tool_tip'),
                    
                         ))}}

                     </div>



                      <div class="form-group">
                        {{ Form::label('type', getphrase('type')) }}

                        <span class="text-red">*</span>
                        {{Form::select('type',$field_types, null, ['class'=>'form-control', 
                        'ng-model' => 'field_type' ])}}

                     </div>


                      <div class="form-group" ng-if="field_type=='text' || field_type=='password' || field_type=='number' || field_type=='email'||  field_type=='file' ">
                        {{ Form::label('type', getphrase('type')) }}
                        
                         <input 
                            type="@{{field_type}}" 
                            class="form-control" 
                            name="value" 
                            required="true" 
                            ng-model='value'>
                     </div>



                     <div class="form-group" ng-if="field_type=='checkbox' ">
                        {{ Form::label('type', getphrase('type')) }}
                        
                         <input 
                            type="checkbox" 
                            data-toggle="toggle" 
                            data-onstyle="success" 
                            data-offstyle="default"

                            class="form-control" 
                            name="value" 
                            value="1" 
                            required="true" 
                            ng-model='value'
                            style="display:block;"
                            checked>
                     </div>



                      <div class="form-group" ng-if="field_type=='select'">

                        {{ Form::label('total_options', getphrase('total_options')) }}
                        
                        <input 
                            type="number" 
                            class="form-control" 
                            name="total_options" 
                            min="1"
                            required="true" 
                            ng-model='obj.total_options'
                            ng-change="intilizeOptions(obj.total_options)"
                     >
                     </div>



                     <div class="form-group" ng-if="field_type=='textarea'">

                        {{ Form::label('description', getphrase('description')) }}
                        
                       <textarea name="value" class="form-control ckeditor" ng-model='value' rows="5" ></textarea>

                     </div>



                      <div class="row" data-ng-repeat="option in options">
                        <div class="col-md-12">
                        
                    <div class="form-group col-md-4" >
                        {{ Form::label('option_value', getphrase('option_value') ) }} @{{option}}
                            <input 
                            type="text" 
                            class="form-control" 
                            name="option_value[]" 
                            required="true" >
                    </div>

                    <div class="form-group col-md-4" >
                        {{ Form::label('option_text', getphrase('option_text') ) }} @{{option}}
                            <input 
                            type="text" 
                            class="form-control" 
                            name="option_text[]" 
                            required="true" >
                    </div>

                    <div class="form-group col-md-4" >
                    
                            <input type="radio" name="value" value="@{{option-1}}" id="radio@{{option}}" >
                            <label for="radio@{{option}}"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('make_default')}} </label>
                    
                    </div>

                        </div>

                     </div>





                </div>

			</div>



           <div class="form-group pull-right">

                <button class="btn btn-success" ng-disabled='!formSettings.$valid'>{{ getPhrase('save') }}</button>

            </div>



            {!! Form::close() !!}


    	</div>

@endsection


@section('footer_scripts')

@include('mastersettings.settings.scripts.js-scripts' );
@include('common.validations', array('isLoaded'=>true));

<script src="{{JS}}bootstrap-toggle.min.js"></script>


@stop    