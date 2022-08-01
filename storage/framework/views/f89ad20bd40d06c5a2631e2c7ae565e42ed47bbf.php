<?php $__env->startSection('content'); ?>

<?php echo $__env->make('bidder.leftmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--Dashboard section -->


    <div class="col-lg-9 col-md-8 col-sm-12 au-onboard">
            <a href="<?php echo e(URL_HOME); ?>" class="au-middles justify-content-start"> <?php echo e(getPhrase('home')); ?> &nbsp;<span> / <?php echo e($title); ?> </span></a>

            <div class="au-left-side form-auth-style">


            	<?php echo e(Form::model($record, 
                        array('url' => ['users/change-password', $record->slug], 
                        'method'=>'patch', 'novalidate'=>'', 'name'=>"changePassword"))); ?>


                <div class="row">

                	<div class="col-lg-6">



                	   <div class="form-group">
                            <?php echo Form::label('current_password', getPhrase('current_password'), ['class' => 'control-label']); ?>


                            <?php echo e(Form::password('old_password', $attributes = array('class'=>'form-control', 'placeholder' => getphrase('old_password'),

                                    'ng-model'=>'old_password',

                                    'required'=> 'true', 

                                    'ng-class'=>'{"has-error": changePassword.old_password.$touched && changePassword.old_password.$invalid}',

                                    'ng-minlength' => 5

                            ))); ?>



                            <div class="validation-error" ng-messages="changePassword.old_password.$error" >

                                <?php echo getValidationMessage(); ?>


                                <?php echo getValidationMessage('password'); ?>


                            </div>
                    </div>


                    <div class="form-group">

                        <?php echo Form::label('new_password', getPhrase('new_password'), ['class' => 'control-label']); ?>


                        
                        <?php echo e(Form::password('password', $attributes = array('class'=>'form-control', 'placeholder' => getphrase('new_password'),

                            'ng-model'=>'password',

                            'required'=> 'true', 

                            'ng-class'=>'{"has-error": changePassword.password.$touched && changePassword.password.$invalid}',

                            'ng-minlength' => 5

                        ))); ?>



                        <div class="validation-error" ng-messages="changePassword.password.$error" >

                            <?php echo getValidationMessage(); ?>


                            <?php echo getValidationMessage('password'); ?>


                        </div>

                    </div>

                    <div class="form-group">
                            <?php echo Form::label('new_password_confirmation', getPhrase('password_confirm'), ['class' => 'control-label']); ?>



                            <?php echo e(Form::password('password_confirmation', $attributes = array('class'=>'form-control', 'placeholder' => getphrase('retype_password'),

                                'ng-model'=>'password_confirmation',

                                'required'=> 'true', 

                            'ng-class'=>'{"has-error": changePassword.password_confirmation.$touched && changePassword.password_confirmation.$invalid}',

                                'compare-to' =>"password",

                                'ng-minlength' => 5

                            ))); ?>



                                
                                <div class="validation-error" ng-messages="changePassword.password_confirmation.$error" >

                                <?php echo getValidationMessage(); ?>


                                <?php echo getValidationMessage('password'); ?>


                                <?php echo getValidationMessage('confirmPassword'); ?>



                                </div>

                        </div>



                
                    <div class="form-group">

                        <button class="btn btn-primary login-bttn" ng-disabled='!changePassword.$valid'><?php echo e(getPhrase('save')); ?></button>

                    </div>


                </div>

            </div> 

            <?php echo Form::close(); ?>


             </div> 
    </div> 




        </div>
      </div>   
    </section>
    <!--Dashboard section-->

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home.pages.auctions.auctions-js-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>