@extends('layouts.home')

@section('content')


<!---LOGIN TABS-->


<div class="container">
<?php 
$fb_login = getSetting('facebook_login','module');
$google_login = getSetting('google_plus_login','module');

?>
      <div class="row">
      <div class="col-lg-6 lg-offset-3 mx-auto col-md-12">
        <div class="panel panel-login">

          <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>
                <a href="#" class="active" id="login-form-link">{{getPhrase('login')}}</a>
                  </h4> </div>
                        <div class="col-md-6">
                            <h4>
                <a href="#" id="register-form-link">{{getPhrase('register')}}</a>
                </h4> </div>
                    </div>
                     </div>

          <div class="panel-body form-auth-style">



                <!--form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;"-->

                   @include('errors.errors')

                   {!! Form::open(array('url' => URL_USERS_LOGIN, 'method' => 'POST', 'novalidate'=>'', 'class'=>"form-horizontal", 'name'=>"loginForm",'id'=>'login-form', 'style'=>'display:block')) !!}
  <div class="row">
                   <div class="form-group col-lg-12">


                            {{ Form::text('email', $value = null , $attributes = array('class'=>'form-control',

                                'ng-model'=>'email',

                                'required'=> 'true',

                                'id'=> 'lg_email',

                                'placeholder' => getPhrase('username').'/'.getPhrase('email'),

                                'ng-class'=>'{"has-error": loginForm.email.$touched && loginForm.email.$invalid}',

                            )) }}


                        <div class="validation-error" ng-messages="loginForm.email.$error" >

                            {!! getValidationMessage()!!}

                            {!! getValidationMessage('email')!!}

                        </div>

                    </div>






                    <div class="form-group col-lg-12">



                                   {{ Form::password('password', $attributes = array('class'=>'form-control instruction-call',

                                        'placeholder' => getPhrase("password"),

                                        'ng-model'=>'registration.password',

                                        'required'=> 'true',

                                        'id'=> 'lg_password',

                                        'ng-class'=>'{"has-error": loginForm.password.$touched && loginForm.password.$invalid}',

                                        'ng-minlength' => 5

                                    )) }}

                             <div class="validation-error" ng-messages="loginForm.password.$error" >

                                {!! getValidationMessage()!!}

                                {!! getValidationMessage('password')!!}

                            </div>

                    </div>




                  <div class="form-group col-lg-12">
                    <div class="text-center  login-btn">
                       <button type="submit"
                                    class="btn btn-primary login-bttn"
                                    style="margin-right: 15px;" ng-disabled='!loginForm.$valid'>
                                {{getPhrase('login')}}
                            </button>
                    </div>
                    <hr>
                  </div>



                  <div class="form-group col-lg-6 col-sm-6 col-xs-6">



                            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal"> {{getPhrase('forgot_password')}} ? </a>



                  </div>



                   <div class="form-group col-lg-6 col-sm-6 col-xs-6">
                      <div class="text-right login-icons">


                           @if ($google_login)
                            <a href="{{ route('auth.login.social', 'google') }}" class="btn btn-primary login-bttn" data-toggle="tooltip" title="Google Login Only For Bidder">
                                <i class="fa fa-google"></i>
                            </a>
                            @endif

                            @if ($fb_login)
                            <a href="{{ route('auth.login.social', 'facebook') }}" class="btn btn-primary login-bttn" data-toggle="tooltip" title="Facebook Login Only For Bidder">
                                <i class="fa fa-facebook"></i>
                            </a>
                            @endif


                      </div>

                      
                  </div>

                    <div class="row col-lg-12">
                      <p class="alert alert-info">
                          Social Logins only for Bidder
                      </p>
                    </div>
                 

                  
              </div>

                {!! Form::close() !!}




                <!--form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;"-->

                 {!! Form::open(array('url' => URL_USERS_REGISTER, 'method' => 'POST', 'novalidate'=>'', 'class'=>"form-horizontal", 'name'=>"registrationForm",'id'=>'register-form', 'style'=>'display:none')) !!}

  <div class="row">
                 <div class="form-group col-lg-12">



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






                            <div class="form-group col-lg-12">



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


                  <div class="form-group col-lg-12">



                                   {{ Form::email('email', $value = null , $attributes = array('class'=>'form-control',

                                        'placeholder' => getPhrase("email"),

                                        'ng-model'=>'email',

                                        'required'=> 'true',

                                        'id'=>'rg_email',

                                        'ng-class'=>'{"has-error": registrationForm.email.$touched && registrationForm.email.$invalid}',

                                    )) }}




                                    <div class="validation-error" ng-messages="registrationForm.email.$error" >

                                            {!! getValidationMessage()!!}

                                            {!! getValidationMessage('email')!!}

                                     </div>


                            </div>






                            <div class="form-group col-lg-12">




                                    {{ Form::password('password', $attributes = array('class'=>'form-control instruction-call',

                                        'placeholder' => getPhrase("password"),

                                        'ng-model'=>'registration.password',

                                        'required'=> 'true',

                                        'id'=>'rg_password',

                                        'ng-class'=>'{"has-error": registrationForm.password.$touched && registrationForm.password.$invalid}',

                                        'ng-minlength' => 5

                                    )) }}



                                   <div class="validation-error" ng-messages="registrationForm.password.$error" >

                                        {!! getValidationMessage()!!}

                                        {!! getValidationMessage('password')!!}

                                    </div>

                            </div>


                             <div class="form-group col-lg-12">




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



                            <div class=" col-lg-12">

                                <div class="form-group row">
                                    <div class="col-md-6">
                                    {{ Form::radio('user_type','seller', true, array('id'=>'seller', 'name'=>'user_type')) }}

                                        <label for="seller"><!-- <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> -->{{getPhrase('seller')}}</label>
                                    </div>
                                    <div class="col-md-6">
                                    {{ Form::radio('user_type','bidder', false, array('id'=>'bidder', 'name'=>'user_type')) }}
                                        <label for="bidder"><!-- <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span>--> {{getPhrase('bidder')}}
                                        </label>
                                    </div>
                                </div>

                            </div>



                  <div class="form-group col-lg-12">
                    <div class="text-center  login-btn">
                        <button type="submit" class="btn btn-primary login-bttn" ng-disabled='!registrationForm.$valid'>
                                       {{getPhrase('register_now')}}
                                    </button>
                      </div>

                  </div>
              </div>
                {!! Form::close() !!}




          </div>
        </div>
      </div>
    </div>
  </div>
<!---LOGIN TABS-->



@endsection


