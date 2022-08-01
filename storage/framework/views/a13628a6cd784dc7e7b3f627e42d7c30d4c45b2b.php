<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>checkbox.css" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<style>
.btn:not([disabled]):not(.disabled).active, .btn:not([disabled]):not(.disabled):active {
     background-image: none; 
     background-color: #f8fafb; 
}

.btn {
	border: 2px solid #71c484;
}

.btn:hover, .btn:focus {
	border: 2px solid #71c484;
}
.btn-default{
	    width: 70px !important;
    margin-top: -5px  !important;
        height: 34px !important;
    color: transparent;
}
.btn-success{
	    border-color: transparent;
}
.btn-default .active .toggle-off{
	    background-image: none;
    background-color: #d4d4d4;
    border: 1px solid #d4d4d4;
}
.toggle-handle {
	background: #fff;
    margin-top: 2px;
        margin-left: 16px;
}
.toggle .btn-success{
	    width: 71px !important;
}
.btn:not([disabled]):not(.disabled).active, .btn:not([disabled]):not(.disabled):active{
	    background-image: none;
    background-color: #e6e6e6;
}
.btn:not([disabled]):not(.disabled).active, .btn:not([disabled]):not(.disabled):active {
    background-image: none;
    background-color: #e6e6e6;
    border:none;
}
.toggle.btn {
    height: 26px !important;
    min-width: 54px !important ;
    border-radius: 50px;
    min-height: 30px !important;
    border: 2px solid #f6f7fa;
}
.btn .toggle-handle
{    height: 22px !important;
    width: 22px !important;
    margin-top: 2px !important;
    margin-left: 19px;}
.btn-success{
	width:71px !important;
}
.btn-success:not([disabled]):not(.disabled).active, .btn-success:not([disabled]):not(.disabled):active, .show>.btn-success.dropdown-toggle{
	box-shadow:none;
}
.btn,.toggle.btn {
    border: none;
    margin-top: 0px !important;
}

.btn,.toggle.btn{
	border:none;
}
.btn.off .toggle-handle {
    height: 22px !important;
    width: 22px !important;
    margin-left: 23px;
    margin-top: 2px !important;
    background: #fff;
}
.btn:hover {
    border: none}
</style>

<div class="login-content installation-page" >

		<div class="logo text-center"><img src="<?php echo e(IMAGES); ?>logo.png" alt=""></div>
		<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo Form::open(array('url' => URL_INSTALL_SYSTEM, 'method' => 'POST', 'name'=>'registrationForm ', 'novalidate'=>'', 'class'=>"loginform", 'id'=>"install_form")); ?>

	
<div class="row" >
	<div class="col-md-6 col-md-offset-3">
	<div class="info">
		<h3>Server Hosting Details</h3>
<p>Please enter server login details to install this system </p>
</div>
		<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-server" aria-hidden="true"></i></div>
			<?php echo e(Form::text('host_name', $value = null , $attributes = array('class'=>'form-control',
				'placeholder' => 'Host Name',
				'ng-model'=>'host_name',
				'required'=> 'true', 
				'ng-class'=>'{"has-error": registrationForm.host_name.$touched && registrationForm.host_name.$invalid}',
				'ng-minlength' => '4',
			))); ?>

			<div class="validation-error" ng-messages="registrationForm.host_name.$error" >
				<p ng-message="required">This field is required </p>
				<p ng-message="minlength">Text is too short</p>
			</div>
		</div>
		<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-database" aria-hidden="true"></i></div>
			<?php echo e(Form::text('database_name', $value = null , $attributes = array('class'=>'form-control',
				'placeholder' => 'Database Name',
				'ng-model'=>'database_name',
				'required'=> 'true', 
				'ng-class'=>'{"has-error": registrationForm.database_name.$touched && registrationForm.database_name.$invalid}',
				'ng-minlength' => '1',
			))); ?>

			<div class="validation-error" ng-messages="registrationForm.database_name.$error" >
				<p ng-message="required">This field is required </p>
				<p ng-message="minlength">Text is too short</p>
			</div>
		</div>

		<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>

			<?php echo e(Form::text('user_name', $value = null , $attributes = array('class'=>'form-control',
				'placeholder' => 'Database Username',
				'ng-model'=>'user_name',
				'required'=> 'true', 
				'ng-class'=>'{"has-error": registrationForm.user_name.$touched && registrationForm.user_name.$invalid}',
				'ng-minlength' => '1',
			))); ?>

			<div class="validation-error" ng-messages="registrationForm.user_name.$error" >
				<p ng-message="required">This field is required </p>
				<p ng-message="minlength">Text is too short</p>
			</div>
		</div>


		<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
			<?php echo e(Form::password('password', $attributes = array('class'=>'form-control',
				'placeholder' => 'Database Password',
				'ng-model'=>'password',
			))); ?>

			 
		</div>

		
		<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div>
			<?php echo e(Form::text('port_number', '3306' , $attributes = array('class'=>'form-control',
				'placeholder' => 'Port Number',
				'ng-model'=>'port_number',
				'required'=> 'true', 
				'ng-class'=>'{"has-error": registrationForm.port_number.$touched && registrationForm.port_number.$invalid}',
				'ng-minlength' => '1',
			))); ?>

			<div class="validation-error" ng-messages="registrationForm.port_number.$error" >
				<p ng-message="required">This field is required </p>
				<p ng-message="minlength">Text is too short</p>
			</div>
		</div>

		<div class="input-group">
		 <?php echo e(Form::label('sample_data', 'Install sample data')); ?> &nbsp;&nbsp;
  			<input 
		 		type="checkbox" 
				data-toggle="toggle" 
				data-onstyle="success" 
				data-offstyle="default"
		 		name="sample_data" 
		 		value = "1" 

				>
		</div>

	</div>
	
</div>
		
		


		

		

		
			<div class="text-center buttons">

				<button type="button"  class="btn button btn-success btn-lg" 

				ng-disabled='!registrationForm.$valid' onclick="submitForm();" >Next</button>

			</div>

		<?php echo Form::close(); ?>

		

		 <div class="loadingpage text-center" style="display: none;" id="after_display">
		 	
		 	<p>Please Wait...</p>

		 	<img width="50" src="<?php echo IMAGES;?>loading.gif">
		 </div>

	</div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script src="<?php echo e(JS); ?>bootstrap-toggle.min.js"></script>
  
 <script>
 	function submitForm() {
 		$('#install_form').hide();
 		$('#after_display').show();
 		$('#install_form').submit();
 	}
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('install.install-layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>