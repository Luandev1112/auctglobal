<?php $__env->startSection('content'); ?>

<div class="login-content installation-page" >

		<div class="logo text-center"><img src="<?php echo e(IMAGES); ?>logo.png" alt=""></div>
		<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo Form::open(array('url' => URL_FIRST_USER_REGISTER, 'method' => 'POST', 'name'=>'registrationForm ', 'novalidate'=>'', 'class'=>"loginform", 'id'=>"install_form")); ?>

	
<div class="row" >
	<div class="col-md-6 col-md-offset-3">
	 
	<div class="info">
		<h3>Exam System User Details</h3>
			<p>Please enter Admin  details for this system</p>
	</div>
	
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>

			<?php echo e(Form::text('owner_name', $value = null , $attributes = array('class'=>'form-control',
				'placeholder' => 'Admin Name',
				'ng-model'=>'system_name',
				'required'=> 'true', 
				'ng-class'=>'{"has-error": registrationForm.system_name.$touched && registrationForm.system_name.$invalid}',
				'ng-minlength' => '1',
			))); ?>

			<div class="validation-error" ng-messages="registrationForm.system_name.$error" >
				<p ng-message="required">This field is required </p>
				<p ng-message="minlength">Text is too short</p>
			</div>
		</div>

		<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>

			<?php echo e(Form::text('owner_user_name', $value = null , $attributes = array('class'=>'form-control',
				'placeholder' => 'Admin Username',
				'ng-model'=>'system_user_name',
				'required'=> 'true', 
				'ng-class'=>'{"has-error": registrationForm.system_user_name.$touched && registrationForm.system_user_name.$invalid}',
				'ng-minlength' => '1',
			))); ?>

			<div class="validation-error" ng-messages="registrationForm.system_user_name.$error" >
				<p ng-message="required">This field is required </p>
				<p ng-message="minlength">Text is too short</p>
			</div>
		</div>

		

		<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
			<?php echo e(Form::email('owner_email', '' , $attributes = array('class'=>'form-control',
				'placeholder' => 'Admin Email',
				'ng-model'=>'owner_email',
				'required'=> 'true', 
				'ng-class'=>'{"has-error": registrationForm.owner_email.$touched && registrationForm.owner_email.$invalid}',
				'ng-minlength' => '1',
			))); ?>

			<div class="validation-error" ng-messages="registrationForm.owner_email.$error" >
				<p ng-message="required">This field is required </p>
				<p ng-message="minlength">Text is too short</p>
			</div>
		</div>

		<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
			<?php echo e(Form::password('owner_password', $attributes = array('class'=>'form-control',
				'placeholder' => 'Admin Password',
				'ng-model'=>'owner_password',
			))); ?>

			 
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

	<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
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