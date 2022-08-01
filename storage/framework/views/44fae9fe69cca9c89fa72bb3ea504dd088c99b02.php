<!DOCTYPE html>

<html lang="en" dir="<?php echo e((App\Language::isDefaultLanuageRtl()) ? 'rtl' : 'ltr'); ?>">

<head>
    <?php echo $__env->make('partials.home.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</head>


<body class="" ng-app="academia" ng-controller="auctionsController">


<?php echo $__env->yieldContent('custom_div'); ?>
 <?php
 $class = '';

 if(!isset($right_bar))
    $class = 'no-right-sidebar';
 ?>


<!-- PRELOADER -->
<div id="preloader"> <img src="<?php echo e(IMAGES_HOME); ?>loader.gif" alt="pre loader" class="img-responsive"> </div>
<!-- /PRELOADER -->



 <!-- Color Swicher -->
<div class="theme-settings" id="switcher"> 
    <span class="theme-click"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></span> 


   <!--  <span class="theme-color theme-default theme-active" data-color="<?php echo e(CSS_HOME); ?>one"></span> 
    <span class="theme-color theme-color-two" data-color="<?php echo e(CSS_HOME); ?>two"></span> 
    <span class="theme-color theme-color-three" data-color="<?php echo e(CSS_HOME); ?>three"></span> 
    <span class="theme-color theme-color-four" data-color="<?php echo e(CSS_HOME); ?>four"></span> 
    <span class="theme-color theme-color-five" data-color="<?php echo e(CSS_HOME); ?>five"></span> 
    <span class="theme-color theme-color-six" data-color="<?php echo e(CSS_HOME); ?>six"></span> 
    <span class="theme-color theme-color-seven" data-color="<?php echo e(CSS_HOME); ?>seven"></span> 
    <span class="theme-color theme-color-eight" data-color="<?php echo e(CSS_HOME); ?>eight"></span> 
    <span class="theme-color theme-color-nine" data-color="<?php echo e(CSS_HOME); ?>nine"></span> 
    <span class="theme-color theme-color-ten" data-color="<?php echo e(CSS_HOME); ?>ten"></span> 
    <span class="theme-color theme-color-eleven" data-color="<?php echo e(CSS_HOME); ?>eleven"></span> 
    <span class="theme-color theme-color-twelve" data-color="<?php echo e(CSS_HOME); ?>twelve"></span> 
    <span class="theme-color theme-color-thirteen" data-color="<?php echo e(CSS_HOME); ?>thirteen"></span> 
    <span class="theme-color theme-color-fourteen" data-color="<?php echo e(CSS_HOME); ?>fourteen"></span> 
    <span class="theme-color theme-color-fifteen" data-color="<?php echo e(CSS_HOME); ?>fifteen"></span>  -->


    <a class="theme theme-one" href="<?php echo e(CHANGE_THEME); ?>/one.css"></a> 
    <a class="theme theme-two" href="<?php echo e(CHANGE_THEME); ?>/two.css"></a>
    <a class="theme theme-three" href="<?php echo e(CHANGE_THEME); ?>/three.css"></a>
    <a class="theme theme-four" href="<?php echo e(CHANGE_THEME); ?>/four.css"></a>
    <a class="theme theme-five" href="<?php echo e(CHANGE_THEME); ?>/five.css"></a>
    <a class="theme theme-six" href="<?php echo e(CHANGE_THEME); ?>/six.css"></a>
    <a class="theme theme-seven" href="<?php echo e(CHANGE_THEME); ?>/seven.css"></a>
    <a class="theme theme-eight" href="<?php echo e(CHANGE_THEME); ?>/eight.css"></a>
    <a class="theme theme-nine" href="<?php echo e(CHANGE_THEME); ?>/nine.css"></a>
    <a class="theme theme-ten" href="<?php echo e(CHANGE_THEME); ?>/ten.css"></a>
    <a class="theme theme-eleven" href="<?php echo e(CHANGE_THEME); ?>/eleven.css"></a>
    <a class="theme theme-twelve" href="<?php echo e(CHANGE_THEME); ?>/twelve.css"></a>
    <a class="theme theme-thirteen" href="<?php echo e(CHANGE_THEME); ?>/thirteen.css"></a>
    <a class="theme theme-fourteen" href="<?php echo e(CHANGE_THEME); ?>/fourteen.css"></a>
    <a class="theme theme-fifteen" href="<?php echo e(CHANGE_THEME); ?>/fifteen.css"></a>
  

</div>
<!-- /Color Swicher -->


<div id="wrapper">

<?php echo $__env->make('partials.home.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



 <div class="row">
    <div class="col-md-12">

        <?php if(Session::has('message')): ?>
            <div class="alert alert-info">
                <p><?php echo e(Session::get('message')); ?></p>
            </div>
        <?php endif; ?>
        <?php if($errors->count() > 0): ?>
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>

    </div>
</div>










<!--FORGOT PASSWORD MODAL-->

<div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <?php echo Form::open(array('url' => URL_FORGOT_PASSWORD, 'method' => 'POST', 'novalidate'=>'', 'class'=>"loginform", 'name'=>"passwordForm")); ?>


    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title"><?php echo e(getPhrase('forgot_password')); ?></h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">

       <div class="form-auth-style">

        <div class="form-group">


             <?php echo e(Form::email('fp_email', $value = null , $attributes = array('class'=>'form-control',

            'ng-model'=>'fp_email',

            'required'=> 'true',

            'placeholder' => getPhrase('email'),

            'ng-class'=>'{"has-error": passwordForm.fp_email.$touched && passwordForm.fp_email.$invalid}',

        ))); ?>


            <div class="validation-error" ng-messages="passwordForm.fp_email.$error" >

                <?php echo getValidationMessage(); ?>


                <?php echo getValidationMessage('email'); ?>


            </div>


            </div>


      <div class="text-center">

    <button type="button" class="btn btn-default login-bttn" data-dismiss="modal"><?php echo e(getPhrase('close')); ?></button>

    <button type="submit" class="btn btn-primary login-bttn" ng-disabled='!passwordForm.$valid'><?php echo e(getPhrase('submit')); ?></button>

        </div>

      </div>

  </div>

      </div>

    </div>

    <?php echo Form::close(); ?>


  </div>

</div>
<!--FORGOT PASSWORD MODAL-->




<!-- LOGIN Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">

            <h4><a href="#" class="active" id="login-form-modal-link"><?php echo e(getPhrase('login')); ?></a>

            <a href="#" id="register-form-modal-link"><?php echo e(getPhrase('register')); ?></a></h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">


        <div class="form-auth-style">


                <?php echo Form::open(array('url' => URL_USERS_LOGIN, 'method' => 'POST', 'novalidate'=>'', 'class'=>"form-horizontal", 'name'=>"loginFormModal",'id'=>'login-form-modal', 'style'=>'display:block')); ?>


                <div class="row">
                 <div class="form-group col-lg-12">


                            <?php echo e(Form::text('email', $value = null , $attributes = array('class'=>'form-control',

                                'ng-model'=>'email',

                                'required'=> 'true',

                                'id'=> 'lg_modal_email',

                                'placeholder' => getPhrase('username').'/'.getPhrase('email'),

                                'ng-class'=>'{"has-error": loginFormModal.email.$touched && loginFormModal.email.$invalid}',

                            ))); ?>



                        <div class="validation-error" ng-messages="loginFormModal.email.$error" >

                            <?php echo getValidationMessage(); ?>


                            <?php echo getValidationMessage('email'); ?>


                        </div>



                    </div>


                    <div class="form-group col-lg-12">



                                   <?php echo e(Form::password('password', $attributes = array('class'=>'form-control instruction-call',

                                        'placeholder' => getPhrase("password"),

                                        'ng-model'=>'registration.password',

                                        'required'=> 'true',

                                        'id'=> 'lg_modal_password',

                                        'ng-class'=>'{"has-error": loginFormModal.password.$touched && loginFormModal.password.$invalid}',

                                        'ng-minlength' => 5

                                    ))); ?>


                             <div class="validation-error" ng-messages="loginFormModal.password.$error" >

                                <?php echo getValidationMessage(); ?>


                                <?php echo getValidationMessage('password'); ?>


                            </div>


                    </div>





                     <div class="form-group col-lg-12">
                        <div class="text-center login-btn">
                            <button type="submit"
                                    class="btn btn-primary login-bttn"
                                     ng-disabled='!loginFormModal.$valid'>
                                <?php echo e(getPhrase('login')); ?>

                            </button>
                         </div>
                        <hr>
                    </div>

                        <div class="form-group col-lg-6">
                        <a href="javascript:void(0);" onclick="showModal('myModal')" title="Forgot Password"> <?php echo e(getPhrase('forgot_password')); ?> ? </a>
                    </div>
                    <div class="form-group col-lg-6">

<?php 
$fb_login = getSetting('facebook_login','module');
$google_login = getSetting('google_plus_login','module');

?>
  
                    <div class="text-right login-icons">

                            <?php if($google_login): ?>
                            <a href="<?php echo e(route('auth.login.social', 'google')); ?>" class="btn btn-primary login-bttn" data-toggle="tooltip" title="Google Login Only For Bidder">
                                <i class="fa fa-google"></i>
                            </a>
                            <?php endif; ?>

                            <?php if($fb_login): ?>
                            <a href="<?php echo e(route('auth.login.social', 'facebook')); ?>" class="btn btn-primary login-bttn" data-toggle="tooltip" title="Facebook Login Only For Bidder">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <?php endif; ?>
                    </div>

                    </div>
            </div>

                <?php echo Form::close(); ?>




                  <?php echo Form::open(array('url' => URL_USERS_REGISTER, 'method' => 'POST', 'novalidate'=>'', 'class'=>"form-horizontal", 'name'=>"registrationFormModal",'id'=>'register-form-modal', 'style'=>'display:none')); ?>


<div class="row">
                   <div class="form-group col-lg-12">





                                    <?php echo e(Form::text('name', old('name') , $attributes = array('class'=>'form-control',

                                        'placeholder' => 'Name',

                                        'ng-model'=>'name',

                                        'ng-pattern' => getRegexPattern('name'),

                                        'required'=> 'true',

                                        'id'=>'rg_name',

                                        'ng-class'=>'{"has-error": registrationFormModal.name.$touched && registrationFormModal.name.$invalid}',

                                        'ng-minlength' => '4',

                                    ))); ?>



                                    <div class="validation-error" ng-messages="registrationFormModal.name.$error" >

                                        <?php echo getValidationMessage(); ?>


                                        <?php echo getValidationMessage('minlength'); ?>


                                        <?php echo getValidationMessage('pattern'); ?>


                                    </div>

                                </div>






                            <div class="form-group  col-lg-12">




                                    <?php echo e(Form::text('username', old('username') , $attributes = array('class'=>'form-control',

                                        'placeholder' => 'Username',

                                        'ng-model'=>'username',

                                        'required'=> 'true',

                                        'id'=>'rg_username',

                                        'ng-class'=>'{"has-error": registrationFormModal.username.$touched && registrationFormModal.username.$invalid}',

                                        'ng-minlength' => '4',

                                    ))); ?>



                                    <div class="validation-error" ng-messages="registrationFormModal.username.$error" >

                                        <?php echo getValidationMessage(); ?>


                                        <?php echo getValidationMessage('minlength'); ?>


                                        <?php echo getValidationMessage('pattern'); ?>


                                    </div>



                            </div>


                  <div class="form-group  col-lg-12">





                                   <?php echo e(Form::email('email', $value = null , $attributes = array('class'=>'form-control',

                                        'placeholder' => getPhrase("email"),

                                        'ng-model'=>'email',

                                        'required'=> 'true',

                                        'id'=>'rg_email_modal',

                                     'ng-class'=>'{"has-error": registrationFormModal.email.$touched  && registrationFormModal.email.$invalid}',

                                    ))); ?>





                                    <div class="validation-error" ng-messages="registrationFormModal.email.$error" >

                                            <?php echo getValidationMessage(); ?>


                                            <?php echo getValidationMessage('email'); ?>


                                     </div>


                            </div>






                            <div class="form-group  col-lg-12">






                                    <?php echo e(Form::password('password', $attributes = array('class'=>'form-control instruction-call',

                                        'placeholder' => getPhrase("password"),

                                        'ng-model'=>'registration.password',

                                        'required'=> 'true',

                                        'id'=>'rg_password_modal',

                                        'ng-class'=>'{"has-error": registrationFormModal.password.$touched && registrationFormModal.password.$invalid}',

                                        'ng-minlength' => 5

                                    ))); ?>




                                   <div class="validation-error" ng-messages="registrationFormModal.password.$error" >

                                        <?php echo getValidationMessage(); ?>


                                        <?php echo getValidationMessage('password'); ?>


                                    </div>

                            </div>


                             <div class="form-group  col-lg-12 mb-4">





                                    <?php echo e(Form::password('password_confirmation', $attributes = array('class'=>'form-control instruction-call',

                                        'placeholder' => getPhrase("password_confirmation"),

                                        'ng-model'=>'registration.password_confirmation',

                                        'required'=> 'true',

                                        'id'=>'rg_password_confirmation',

                                        'ng-class'=>'{"has-error": registrationFormModal.password_confirmation.$touched && registrationFormModal.password_confirmation.$invalid}',

                                        'ng-minlength' => 5,

                                        'compare-to' =>"registration.password"

                                    ))); ?>


                                        <div class="validation-error" ng-messages="registrationFormModal.password_confirmation.$error" >

                                            <?php echo getValidationMessage(); ?>


                                            <?php echo getValidationMessage('minlength'); ?>


                                            <?php echo getValidationMessage('confirmPassword'); ?>


                                        </div>


                            </div>



                            <div class="form-group  col-lg-12">






                                <div class="form-group row">
                                    <div class="col-md-6">
                                    <?php echo e(Form::radio('user_type','seller', true, array('id'=>'seller_modal', 'name'=>'user_type'))); ?>


                                        <label for="seller_modal"> <span class="radio-button"> <i class="mdi mdi-check active"></i> </span> <?php echo e(getPhrase('seller')); ?></label>
                                    </div>
                                    <div class="col-md-6">
                                    <?php echo e(Form::radio('user_type','bidder', false, array('id'=>'bidder_modal', 'name'=>'user_type'))); ?>

                                        <label for="bidder_modal"> <span class="radio-button"> <i class="mdi mdi-check active"></i> </span> <?php echo e(getPhrase('bidder')); ?>

                                        </label>
                                    </div>
                                </div>

                            </div>



                  <div class="form-group  col-lg-12">
<div class="text-center login-btn">
                        <button type="submit" class="btn btn-primary login-bttn" ng-disabled='!registrationFormModal.$valid'>
                                       <?php echo e(getPhrase('register')); ?>

                                    </button>
                      </div>

                  </div>
            </div>

                <?php echo Form::close(); ?>



        </div>


      </div>


    </div>
  </div>
</div>
<!--LOGIN MODAL-->





</div>




<?php echo $__env->make('partials.home.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('partials.home.javascripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('errors.formMessages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


</body>
</html>

