<?php $__env->startSection('custom_div'); ?>

<?php if(isset($record) && count($record)): ?>
    <div ng-controller="prepareUserData" ng-init="initFunctions()">
<?php else: ?>
     <div ng-controller="prepareUserData">
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo e(getPhrase('users')); ?></h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(isset($title) ? $title : ''); ?>

        </div>

        

        <div class="panel-body form-auth-style" id="app">

        	<div class="row">
        		<?php if($record): ?>
				<?php echo e(Form::model($record, 
				array('url' => URL_USERS_EDIT.'/'.$record->slug, 
				'method'=>'PATCH', 'name'=>'formValidate', 'files'=>'true' , 'novalidate'=>''))); ?>

				<?php else: ?>
				<?php echo Form::open(array('url' => URL_USERS_ADD, 'method' => 'POST','name'=>'formValidate', 'files'=>'true', 'novalidate'=>'')); ?>

				<?php endif; ?>

				<?php echo $__env->make('admin.users.form_elements', array('record' => $record), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<?php echo Form::close(); ?>

			</div>

    	</div>
    </div>
<?php $__env->stopSection(); ?>

</div>


<?php $__env->startSection('footer_scripts'); ?>
<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin.users.scripts.user-js-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
               alertify.error("<?php echo e(getPhrase('file_type_not_allowed')); ?>");
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
               alertify.error("<?php echo e(getPhrase('file_type_not_allowed')); ?>");
            this.value='';
    }
};
 </script>
 
<?php $__env->stopSection(); ?>    
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>