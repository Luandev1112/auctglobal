<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>checkbox.css" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo e(getPhrase('sms')); ?></h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(isset($title) ? $title : ''); ?>

        </div>

        <div class="panel-body form-auth-style" id="app">

        	<div class="row">

                <div class="col-xs-6">  

        		<?php $button_name = getPhrase('send_sms'); 

                    ?>
             
                    <?php echo Form::open(array('url' => URL_SEND_SMS_NOW, 'method' => 'POST', 'name'=>'formValidate')); ?>


                    


                    <!-- <div class="form-group">

                        <?php echo e(Form::label('sms_to', getphrase('sms_to'))); ?>


                        <span class="text-red">*</span>

                        <div class="form-group row">
                            
                        <div class="col-md-4">

                        <?php echo e(Form::radio('sms_to', 'seller', true, array('id'=>'paid1', 'name'=>'sms_to'))); ?>

                            <label for="paid1"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> <?php echo e(getPhrase('sellers')); ?> </label>
                        </div>

                        <div class="col-md-4">
                        <?php echo e(Form::radio('sms_to', 'bidder', false, array('id'=>'bidders', 'name'=>'sms_to'))); ?>

                            <label for="bidders"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> <?php echo e(getPhrase('bidders')); ?> </label>
                        </div>


                        <?php if(checkRole(['seller','bidder'])): ?>
                        <div class="col-md-4">
                        <?php echo e(Form::radio('sms_to', 'owner',false, array('id'=>'free1', 'name'=>'sms_to'))); ?>

                            
                            <label for="free1"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> <?php echo e(getPhrase('admins')); ?></label> 
                        </div>
                        <?php endif; ?>

                        

                        </div>

                    </div> -->





                 <div class="form-group">

                    <?php echo Form::label('sms_to', getPhrase('sms_to'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>

                   
                        <?php echo e(Form::select('users[]', $users, null, ['class'=>'form-control select2',
                            
                            'required'=> 'true',

                            'multiple'=> 'true',

                            'ng-class'=>'{"has-error": formValidate.users.$touched && formValidate.users.$invalid}'

                         ])); ?>



                    
                        <div class="validation-error" ng-messages="formValidate.users.$error" >

                            <?php echo getValidationMessage(); ?>


                        </div>

                </div>



                    <div class="form-group">

                        <?php echo Form::label('message_template', getPhrase('message'), ['class' => 'control-label']); ?>


                       
                        <?php echo e(Form::textarea('message', old('message'), $attributes = 

                        array('class' => 'form-control', 

                        'placeholder' => 'Message',

                        'ng-maxlength' => '200',

                        'required' => 'true',

                        'ng-class'=>'{"has-error": formValidate.message.$touched && formValidate.message.$invalid}',

                        ))); ?>



                        
                        <div class="validation-error" ng-messages="formValidate.message.$error" >

                            <?php echo getValidationMessage(); ?>


                            <?php echo getValidationMessage('maxlength'); ?>


                        </div>

                    </div>



                     <div class="form-group pull-right">

                            <button class="btn btn-success" ng-disabled='!formValidate.$valid'><?php echo e($button_name); ?></button>

                        </div>

                    </div>
                   
			</div>
             <?php echo Form::close(); ?>


    	</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>

<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<script src="<?php echo e(JS); ?>bootstrap-toggle.min.js"></script>      
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>