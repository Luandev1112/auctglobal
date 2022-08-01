@extends('layouts.home')

@section('header_scripts')
<link href="{{CSS}}checkbox.css" rel="stylesheet" type="text/css">
@stop

@section('content')

<section class="au-who">

    <div class="container">

        <div class="row">

          <div class="col-lg-6 col-lg-offset-2">

                <div class="panel panel-default">


                   <div class="au-who-main"> <h2 class="text-left">{{getPhrase('register')}}</h2>  </div>

                    <div class="panel-body form-auth-style">


                        @include('errors.errors')

                        {!! Form::open(array('url' => URL_USERS_REGISTER, 'method' => 'POST', 'novalidate'=>'', 'class'=>"form-horizontal", 'name'=>"registrationForm")) !!}

                       



                            <div class="form-group">

                               {!! Form::label('name', getPhrase('name'), ['class' => 'control-label']) !!}

                                     <span class="text-red">*</span>
                                 
                                    {{ Form::text('name', old('name') , $attributes = array('class'=>'form-control',

                                        'placeholder' => 'Name',

                                        'ng-model'=>'name',

                                        'ng-pattern' => getRegexPattern('name'),

                                        'required'=> 'true', 

                                        'ng-class'=>'{"has-error": registrationForm.name.$touched && registrationForm.name.$invalid}',

                                        'ng-minlength' => '4',

                                    )) }}


                                    <div class="validation-error" ng-messages="registrationForm.name.$error" >

                                        {!! getValidationMessage()!!}

                                        {!! getValidationMessage('minlength')!!}

                                        {!! getValidationMessage('pattern')!!}

                                    </div>

                                </div>

                            




                            <div class="form-group">

                                {!! Form::label('username', getPhrase('username'), ['class' => 'control-label']) !!}

                                    <span class="text-red">*</span>
                                 
                                    {{ Form::text('username', old('username') , $attributes = array('class'=>'form-control',

                                        'placeholder' => 'Username',

                                        'ng-model'=>'username',

                                        'required'=> 'true', 

                                        'ng-class'=>'{"has-error": registrationForm.username.$touched && registrationForm.username.$invalid}',

                                        'ng-minlength' => '4',

                                    )) }}


                                    <div class="validation-error" ng-messages="registrationForm.username.$error" >

                                        {!! getValidationMessage()!!}

                                        {!! getValidationMessage('minlength')!!}

                                        {!! getValidationMessage('pattern')!!}

                                    </div>

                       

                            </div>





                            <div class="form-group">

                                {!! Form::label('email', getPhrase('email'), ['class' => 'control-label']) !!}

                                 <span class="text-red">*</span>

                                   {{ Form::email('email', $value = null , $attributes = array('class'=>'form-control',

                                        'placeholder' => getPhrase("email"),

                                        'ng-model'=>'email',

                                        'required'=> 'true', 

                                        'ng-class'=>'{"has-error": registrationForm.email.$touched && registrationForm.email.$invalid}',

                                    )) }}




                                    <div class="validation-error" ng-messages="registrationForm.email.$error" >

                                            {!! getValidationMessage()!!}

                                            {!! getValidationMessage('email')!!}

                                     </div>

                               
                            </div>






                            <div class="form-group">

                                {!! Form::label('password', getPhrase('password'), ['class' => 'control-label']) !!}

                                <span class="text-red">*</span>
                              

                                    {{ Form::password('password', $attributes = array('class'=>'form-control instruction-call',

                                        'placeholder' => getPhrase("password"),

                                        'ng-model'=>'registration.password',

                                        'required'=> 'true', 

                                        'ng-class'=>'{"has-error": registrationForm.password.$touched && registrationForm.password.$invalid}',

                                        'ng-minlength' => 5

                                    )) }}



                                   <div class="validation-error" ng-messages="registrationForm.password.$error" >

                                        {!! getValidationMessage()!!}

                                        {!! getValidationMessage('password')!!}

                                    </div>

                            </div>






                            <div class="form-group">

                              {!! Form::label('confirm_password', getPhrase('confirm_password'), ['class' => 'control-label']) !!}

                                <span class="text-red">*</span>

                                    
                                    {{ Form::password('password_confirmation', $attributes = array('class'=>'form-control instruction-call',

                                        'placeholder' => getPhrase("password_confirmation"),

                                        'ng-model'=>'registration.password_confirmation',

                                        'required'=> 'true', 

                                        'ng-class'=>'{"has-error": registrationForm.password_confirmation.$touched && registrationForm.password_confirmation.$invalid}',

                                        'ng-minlength' => 5,

                                        'compare-to' =>"registration.password"

                                    )) }}

                                        <div class="validation-error" ng-messages="registrationForm.password_confirmation.$error" >

                                            {!! getValidationMessage()!!}

                                            {!! getValidationMessage('minlength')!!}

                                            {!! getValidationMessage('confirmPassword')!!}

                                        </div>

                                
                            </div>



                            <div class="form-group">

                           {!! Form::label('user', getPhrase('user'), ['class' => 'control-label']) !!}

                       


                                <div class="form-group row">
                                    <div class="col-md-6">
                                    {{ Form::radio('user_type','seller', true, array('id'=>'seller', 'name'=>'user_type')) }}
                                        
                                        <label for="seller"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('seller')}}</label> 
                                    </div>
                                    <div class="col-md-6">
                                    {{ Form::radio('user_type','bidder', false, array('id'=>'bidder', 'name'=>'user_type')) }}
                                        <label for="bidder"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('bidder')}} 
                                        </label>
                                    </div>
                                </div>

                                


                            </div>




                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" ng-disabled='!registrationForm.$valid'>
                                       {{getPhrase('register_now')}}
                                    </button>
                                </div>
                            </div>


                       {!! Form::close() !!}


                       <a href="{{URL_USERS_LOGIN}}"><p class="text-center">{{getPhrase('i_am_having_account')}} </p></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

