@extends($layout)

@section('header_scripts')
<link href="{{CSS}}checkbox.css" rel="stylesheet" type="text/css">
@stop

@section('content')
    <h3 class="page-title">{{getPhrase('sms')}}</h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            {{ isset($title) ? $title : ''}}
        </div>

        <div class="panel-body form-auth-style" id="app">

        	<div class="row">

                <div class="col-xs-6">  

        		<?php $button_name = getPhrase('send_sms'); 

                    ?>
             
                    {!! Form::open(array('url' => URL_SEND_SMS_NOW, 'method' => 'POST', 'name'=>'formValidate')) !!}

                    


                    <!-- <div class="form-group">

                        {{ Form::label('sms_to', getphrase('sms_to')) }}

                        <span class="text-red">*</span>

                        <div class="form-group row">
                            
                        <div class="col-md-4">

                        {{ Form::radio('sms_to', 'seller', true, array('id'=>'paid1', 'name'=>'sms_to')) }}
                            <label for="paid1"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('sellers')}} </label>
                        </div>

                        <div class="col-md-4">
                        {{ Form::radio('sms_to', 'bidder', false, array('id'=>'bidders', 'name'=>'sms_to')) }}
                            <label for="bidders"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('bidders')}} </label>
                        </div>


                        @if (checkRole(['seller','bidder']))
                        <div class="col-md-4">
                        {{ Form::radio('sms_to', 'owner',false, array('id'=>'free1', 'name'=>'sms_to')) }}
                            
                            <label for="free1"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('admins')}}</label> 
                        </div>
                        @endif

                        

                        </div>

                    </div> -->





                 <div class="form-group">

                    {!! Form::label('sms_to', getPhrase('sms_to'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                   
                        {{Form::select('users[]', $users, null, ['class'=>'form-control select2',
                            
                            'required'=> 'true',

                            'multiple'=> 'true',

                            'ng-class'=>'{"has-error": formValidate.users.$touched && formValidate.users.$invalid}'

                         ])}}


                    
                        <div class="validation-error" ng-messages="formValidate.users.$error" >

                            {!! getValidationMessage()!!}

                        </div>

                </div>



                    <div class="form-group">

                        {!! Form::label('message_template', getPhrase('message'), ['class' => 'control-label']) !!}

                       
                        {{ Form::textarea('message', old('message'), $attributes = 

                        array('class' => 'form-control', 

                        'placeholder' => 'Message',

                        'ng-maxlength' => '200',

                        'required' => 'true',

                        'ng-class'=>'{"has-error": formValidate.message.$touched && formValidate.message.$invalid}',

                        )) }}


                        
                        <div class="validation-error" ng-messages="formValidate.message.$error" >

                            {!! getValidationMessage()!!}

                            {!! getValidationMessage('maxlength')!!}

                        </div>

                    </div>



                     <div class="form-group pull-right">

                            <button class="btn btn-success" ng-disabled='!formValidate.$valid'>{{ $button_name }}</button>

                        </div>

                    </div>
                   
			</div>
             {!! Form::close() !!}

    	</div>

@endsection


@section('footer_scripts')

@include('common.validations')


<script src="{{JS}}bootstrap-toggle.min.js"></script>      
@stop
 