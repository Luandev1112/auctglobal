<!DOCTYPE html>

<html lang="en" dir="{{ (App\Language::isDefaultLanuageRtl()) ? 'rtl' : 'ltr' }}">

<head>
    @include('partials.home.head')

</head>


<body class="" ng-app="academia" ng-controller="auctionsController">


@yield('custom_div')
 <?php
 $class = '';

 if(!isset($right_bar))
    $class = 'no-right-sidebar';
 ?>


<!-- PRELOADER -->
<div id="preloader"> <img src="{{IMAGES_HOME}}loader.gif" alt="pre loader" class="img-responsive"> </div>
<!-- /PRELOADER -->



 <!-- Color Swicher -->
<div class="theme-settings" id="switcher"> 
    <span class="theme-click"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></span> 


   <!--  <span class="theme-color theme-default theme-active" data-color="{{CSS_HOME}}one"></span> 
    <span class="theme-color theme-color-two" data-color="{{CSS_HOME}}two"></span> 
    <span class="theme-color theme-color-three" data-color="{{CSS_HOME}}three"></span> 
    <span class="theme-color theme-color-four" data-color="{{CSS_HOME}}four"></span> 
    <span class="theme-color theme-color-five" data-color="{{CSS_HOME}}five"></span> 
    <span class="theme-color theme-color-six" data-color="{{CSS_HOME}}six"></span> 
    <span class="theme-color theme-color-seven" data-color="{{CSS_HOME}}seven"></span> 
    <span class="theme-color theme-color-eight" data-color="{{CSS_HOME}}eight"></span> 
    <span class="theme-color theme-color-nine" data-color="{{CSS_HOME}}nine"></span> 
    <span class="theme-color theme-color-ten" data-color="{{CSS_HOME}}ten"></span> 
    <span class="theme-color theme-color-eleven" data-color="{{CSS_HOME}}eleven"></span> 
    <span class="theme-color theme-color-twelve" data-color="{{CSS_HOME}}twelve"></span> 
    <span class="theme-color theme-color-thirteen" data-color="{{CSS_HOME}}thirteen"></span> 
    <span class="theme-color theme-color-fourteen" data-color="{{CSS_HOME}}fourteen"></span> 
    <span class="theme-color theme-color-fifteen" data-color="{{CSS_HOME}}fifteen"></span>  -->


    <a class="theme theme-one" href="{{CHANGE_THEME}}/one.css"></a> 
    <a class="theme theme-two" href="{{CHANGE_THEME}}/two.css"></a>
    <a class="theme theme-three" href="{{CHANGE_THEME}}/three.css"></a>
    <a class="theme theme-four" href="{{CHANGE_THEME}}/four.css"></a>
    <a class="theme theme-five" href="{{CHANGE_THEME}}/five.css"></a>
    <a class="theme theme-six" href="{{CHANGE_THEME}}/six.css"></a>
    <a class="theme theme-seven" href="{{CHANGE_THEME}}/seven.css"></a>
    <a class="theme theme-eight" href="{{CHANGE_THEME}}/eight.css"></a>
    <a class="theme theme-nine" href="{{CHANGE_THEME}}/nine.css"></a>
    <a class="theme theme-ten" href="{{CHANGE_THEME}}/ten.css"></a>
    <a class="theme theme-eleven" href="{{CHANGE_THEME}}/eleven.css"></a>
    <a class="theme theme-twelve" href="{{CHANGE_THEME}}/twelve.css"></a>
    <a class="theme theme-thirteen" href="{{CHANGE_THEME}}/thirteen.css"></a>
    <a class="theme theme-fourteen" href="{{CHANGE_THEME}}/fourteen.css"></a>
    <a class="theme theme-fifteen" href="{{CHANGE_THEME}}/fifteen.css"></a>
  

</div>
<!-- /Color Swicher -->


<div id="wrapper">

@include('partials.home.topbar')



 <div class="row">
    <div class="col-md-12">

        @if (Session::has('message'))
            <div class="alert alert-info">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
        @if ($errors->count() > 0)
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')

    </div>
</div>










<!--FORGOT PASSWORD MODAL-->

<div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    {!! Form::open(array('url' => URL_FORGOT_PASSWORD, 'method' => 'POST', 'novalidate'=>'', 'class'=>"loginform", 'name'=>"passwordForm")) !!}

    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">{{getPhrase('forgot_password')}}</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">

       <div class="form-auth-style">

        <div class="form-group">


             {{ Form::email('fp_email', $value = null , $attributes = array('class'=>'form-control',

            'ng-model'=>'fp_email',

            'required'=> 'true',

            'placeholder' => getPhrase('email'),

            'ng-class'=>'{"has-error": passwordForm.fp_email.$touched && passwordForm.fp_email.$invalid}',

        )) }}

            <div class="validation-error" ng-messages="passwordForm.fp_email.$error" >

                {!! getValidationMessage()!!}

                {!! getValidationMessage('email')!!}

            </div>


            </div>


      <div class="text-center">

    <button type="button" class="btn btn-default login-bttn" data-dismiss="modal">{{getPhrase('close')}}</button>

    <button type="submit" class="btn btn-primary login-bttn" ng-disabled='!passwordForm.$valid'>{{getPhrase('submit')}}</button>

        </div>

      </div>

  </div>

      </div>

    </div>

    {!! Form::close() !!}

  </div>

</div>
<!--FORGOT PASSWORD MODAL-->




<!-- LOGIN Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">

            <h4><a href="#" class="active" id="login-form-modal-link">{{getPhrase('login')}}</a>

            <a href="#" id="register-form-modal-link">{{getPhrase('register')}}</a></h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">


        <div class="form-auth-style">


                {!! Form::open(array('url' => URL_USERS_LOGIN, 'method' => 'POST', 'novalidate'=>'', 'class'=>"form-horizontal", 'name'=>"loginFormModal",'id'=>'login-form-modal', 'style'=>'display:block')) !!}

                <div class="row">
                 <div class="form-group col-lg-12">


                            {{ Form::text('email', $value = null , $attributes = array('class'=>'form-control',

                                'ng-model'=>'email',

                                'required'=> 'true',

                                'id'=> 'lg_modal_email',

                                'placeholder' => getPhrase('username').'/'.getPhrase('email'),

                                'ng-class'=>'{"has-error": loginFormModal.email.$touched && loginFormModal.email.$invalid}',

                            )) }}


                        <div class="validation-error" ng-messages="loginFormModal.email.$error" >

                            {!! getValidationMessage()!!}

                            {!! getValidationMessage('email')!!}

                        </div>



                    </div>


                    <div class="form-group col-lg-12">



                                   {{ Form::password('password', $attributes = array('class'=>'form-control instruction-call',

                                        'placeholder' => getPhrase("password"),

                                        'ng-model'=>'registration.password',

                                        'required'=> 'true',

                                        'id'=> 'lg_modal_password',

                                        'ng-class'=>'{"has-error": loginFormModal.password.$touched && loginFormModal.password.$invalid}',

                                        'ng-minlength' => 5

                                    )) }}

                             <div class="validation-error" ng-messages="loginFormModal.password.$error" >

                                {!! getValidationMessage()!!}

                                {!! getValidationMessage('password')!!}

                            </div>


                    </div>





                     <div class="form-group col-lg-12">
                        <div class="text-center login-btn">
                            <button type="submit"
                                    class="btn btn-primary login-bttn"
                                     ng-disabled='!loginFormModal.$valid'>
                                {{getPhrase('login')}}
                            </button>
                         </div>
                        <hr>
                    </div>

                        <div class="form-group col-lg-6">
                        <a href="javascript:void(0);" onclick="showModal('myModal')" title="Forgot Password"> {{getPhrase('forgot_password')}} ? </a>
                    </div>
                    <div class="form-group col-lg-6">

<?php 
$fb_login = getSetting('facebook_login','module');
$google_login = getSetting('google_plus_login','module');

?>
  
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
            </div>

                {!! Form::close() !!}



                  {!! Form::open(array('url' => URL_USERS_REGISTER, 'method' => 'POST', 'novalidate'=>'', 'class'=>"form-horizontal", 'name'=>"registrationFormModal",'id'=>'register-form-modal', 'style'=>'display:none')) !!}

<div class="row">
                   <div class="form-group col-lg-12">





                                    {{ Form::text('name', old('name') , $attributes = array('class'=>'form-control',

                                        'placeholder' => 'Name',

                                        'ng-model'=>'name',

                                        'ng-pattern' => getRegexPattern('name'),

                                        'required'=> 'true',

                                        'id'=>'rg_name',

                                        'ng-class'=>'{"has-error": registrationFormModal.name.$touched && registrationFormModal.name.$invalid}',

                                        'ng-minlength' => '4',

                                    )) }}


                                    <div class="validation-error" ng-messages="registrationFormModal.name.$error" >

                                        {!! getValidationMessage()!!}

                                        {!! getValidationMessage('minlength')!!}

                                        {!! getValidationMessage('pattern')!!}

                                    </div>

                                </div>






                            <div class="form-group  col-lg-12">




                                    {{ Form::text('username', old('username') , $attributes = array('class'=>'form-control',

                                        'placeholder' => 'Username',

                                        'ng-model'=>'username',

                                        'required'=> 'true',

                                        'id'=>'rg_username',

                                        'ng-class'=>'{"has-error": registrationFormModal.username.$touched && registrationFormModal.username.$invalid}',

                                        'ng-minlength' => '4',

                                    )) }}


                                    <div class="validation-error" ng-messages="registrationFormModal.username.$error" >

                                        {!! getValidationMessage()!!}

                                        {!! getValidationMessage('minlength')!!}

                                        {!! getValidationMessage('pattern')!!}

                                    </div>



                            </div>


                  <div class="form-group  col-lg-12">





                                   {{ Form::email('email', $value = null , $attributes = array('class'=>'form-control',

                                        'placeholder' => getPhrase("email"),

                                        'ng-model'=>'email',

                                        'required'=> 'true',

                                        'id'=>'rg_email_modal',

                                     'ng-class'=>'{"has-error": registrationFormModal.email.$touched  && registrationFormModal.email.$invalid}',

                                    )) }}




                                    <div class="validation-error" ng-messages="registrationFormModal.email.$error" >

                                            {!! getValidationMessage()!!}

                                            {!! getValidationMessage('email')!!}

                                     </div>


                            </div>






                            <div class="form-group  col-lg-12">






                                    {{ Form::password('password', $attributes = array('class'=>'form-control instruction-call',

                                        'placeholder' => getPhrase("password"),

                                        'ng-model'=>'registration.password',

                                        'required'=> 'true',

                                        'id'=>'rg_password_modal',

                                        'ng-class'=>'{"has-error": registrationFormModal.password.$touched && registrationFormModal.password.$invalid}',

                                        'ng-minlength' => 5

                                    )) }}



                                   <div class="validation-error" ng-messages="registrationFormModal.password.$error" >

                                        {!! getValidationMessage()!!}

                                        {!! getValidationMessage('password')!!}

                                    </div>

                            </div>


                             <div class="form-group  col-lg-12 mb-4">





                                    {{ Form::password('password_confirmation', $attributes = array('class'=>'form-control instruction-call',

                                        'placeholder' => getPhrase("password_confirmation"),

                                        'ng-model'=>'registration.password_confirmation',

                                        'required'=> 'true',

                                        'id'=>'rg_password_confirmation',

                                        'ng-class'=>'{"has-error": registrationFormModal.password_confirmation.$touched && registrationFormModal.password_confirmation.$invalid}',

                                        'ng-minlength' => 5,

                                        'compare-to' =>"registration.password"

                                    )) }}

                                        <div class="validation-error" ng-messages="registrationFormModal.password_confirmation.$error" >

                                            {!! getValidationMessage()!!}

                                            {!! getValidationMessage('minlength')!!}

                                            {!! getValidationMessage('confirmPassword')!!}

                                        </div>


                            </div>



                            <div class="form-group  col-lg-12">






                                <div class="form-group row">
                                    <div class="col-md-6">
                                    {{ Form::radio('user_type','seller', true, array('id'=>'seller_modal', 'name'=>'user_type')) }}

                                        <label for="seller_modal"> <span class="radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('seller')}}</label>
                                    </div>
                                    <div class="col-md-6">
                                    {{ Form::radio('user_type','bidder', false, array('id'=>'bidder_modal', 'name'=>'user_type')) }}
                                        <label for="bidder_modal"> <span class="radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('bidder')}}
                                        </label>
                                    </div>
                                </div>

                            </div>



                  <div class="form-group  col-lg-12">
<div class="text-center login-btn">
                        <button type="submit" class="btn btn-primary login-bttn" ng-disabled='!registrationFormModal.$valid'>
                                       {{getPhrase('register')}}
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
<!--LOGIN MODAL-->





</div>




@include('partials.home.footer')

@include('partials.home.javascripts')

@include('errors.formMessages')


</body>
</html>

