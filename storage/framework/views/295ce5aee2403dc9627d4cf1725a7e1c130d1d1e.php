<?php $__env->startSection('custom_div'); ?>

<?php if(isset($record) && count($record)): ?>
    <div ng-controller="auctionsController" ng-init="initFunctions()">
<?php else: ?>
    <div ng-controller="auctionsController">
<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<?php echo $__env->make('bidder.leftmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--Dashboard section -->


    <div class="col-lg-9 col-md-8 col-sm-12 au-onboard">
            <a href="<?php echo e(URL_HOME); ?>" class="au-middles justify-content-start"> <?php echo e(getPhrase('home')); ?> &nbsp;<span> / <?php echo e($title); ?> </span></a>

            <div class="au-left-side form-auth-style">


            	<?php echo e(Form::model($record, 
				array('url' => URL_USER_BILLING_ADDRESS, 
				'method'=>'PATCH', 'name'=>'formValidate' , 'novalidate'=>''))); ?>


                <div class="row">

                	<div class="col-lg-6">

                	<div class="form-group">

                    <?php echo Form::label('billing_name', getPhrase('billing_name'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>

                    <?php
                        $val=old('billing_name');
                        if ($record)
                         $val = $record->billing_name;     
                    ?>

                    <?php echo e(Form::text('billing_name', $val, $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Billing Name',

                    'ng-model' => 'billing_name', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

					'ng-minlength' => '2',

					'ng-maxlength' => '20',

                    'ng-init'=>'billing_name="'.$val.'"',

					'ng-class'=>'{"has-error": formValidate.billing_name.$touched && formValidate.billing_name.$invalid}',

                    ))); ?>



                    <div class="validation-error" ng-messages="formValidate.billing_name.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


					</div>

                </div>



                <div class="form-group">

                    <?php echo Form::label('billing_phone', getPhrase('billing_phone'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>

                    <?php
                        $val=old('billing_phone');
                        if ($record)
                         $val = $record->billing_phone;     
                    ?>

                    <?php echo e(Form::text('billing_phone', $val, $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Billing Phone',

                    'ng-model' => 'billing_phone', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("phone"),

                    'ng-maxlength' => '20',

                    'ng-init'=>'billing_phone="'.$val.'"',

                    'ng-class'=>'{"has-error": formValidate.billing_phone.$touched && formValidate.billing_phone.$invalid}',



                    ))); ?>


                    <div class="validation-error" ng-messages="formValidate.billing_phone.$error" >

                            <?php echo getValidationMessage('phone'); ?>


                            <?php echo getValidationMessage('maxlength'); ?>


                    </div>

                </div>
                


                
                 <div class="form-group">

                        <label for="name"> <?php echo e(getPhrase('state')); ?> <span class="text-red">*</span></label>


                        <?php 

                        
                        $val=old('billing_state');
                        if ($record)
                          $val = $record->billing_state;

                        ?>

                        <select ng-init="billing_state={id:<?php echo e($val); ?> }" name="billing_state" ng-model="billing_state" class="form-control select2" ng-options="item.id as item.state for item in states track by item.id" ng-change="getCities(billing_state)" required="true">

                          <option value="">Select</option>  

                        </select>

                         <div class="validation-error" ng-messages="formValidate.billing_state.$error">

                                <?php echo getValidationMessage(); ?>

                        </div>
                 </div>


                



                  <div class="form-group">

                    <?php echo Form::label('billing_address', getPhrase('billing_address'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>
                    
                   <?php
                        $val=old('billing_address');
                        if ($record)
                         $val = $record->billing_address;     
                    ?>

                    <?php echo e(Form::textarea('billing_address', $val, $attributes = 

                    array('class' => 'form-control', 'rows'=>3, 

                    'placeholder' => 'Billing Address',

                    'ng-model' => 'billing_address', 

                    'ng-maxlength' => '100',

                    'required'=>'true',

                    'ng-init'=>'billing_address="'.$val.'"',

                    'ng-class'=>'{"has-error": formValidate.billing_address.$touched && formValidate.billing_address.$invalid}',


                    ))); ?>


                    <div class="validation-error" ng-messages="formValidate.billing_address.$error" >

                            <?php echo getValidationMessage(); ?>


                            <?php echo getValidationMessage('maxlength'); ?>


                    </div>

                </div>
                 


                </div>



                <div class="col-lg-6">


                     <div class="form-group">

                    <?php 

                    $readonly = '';
                    $val=old('email');
                    if ($record) {
                        $readonly = 'readonly="true"';
                        $val = $record->email;
                    }



                    ?>

                    <?php echo Form::label('billing_email', getPhrase('billing_email'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>

                    <?php echo e(Form::email('billing_email', $val, $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Billing Email',

                    'ng-model' => 'billing_email', 

                    'required' => 'true',

                    $readonly,

                    'ng-init'=>'billing_email="'.$val.'"',
                    
                    'ng-class'=>'{"has-error": formValidate.billing_email.$touched && formValidate.billing_email.$invalid}',



                    ))); ?>



                    
                    <div class="validation-error" ng-messages="formValidate.billing_email.$error" >

                            <?php echo getValidationMessage(); ?>


                            <?php echo getValidationMessage('email'); ?>


                            

                    </div>

                </div>

                

                <div class="form-group">

                    <?php echo Form::label('billing_country', getPhrase('billing_country'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>

                    <?php
                        $val=old('billing_country');
                        if ($record)
                         $val = $record->billing_country;
     
                    ?>

                    <?php echo e(Form::select('billing_country', $countries, $val, ['placeholder' => getPhrase('select_country'),'class'=>'form-control select2',

                            'ng-model'=>'billing_country',

                            'required'=> 'true',

                            'ng-init'=>'billing_country="'.$val.'"',

                            'ng-change'=>'getStates(billing_country)', 

                            'ng-class'=>'{"has-error": formValidate.billing_country.$touched && formValidate.billing_country.$invalid}'

                         ])); ?>



                    
                        <div class="validation-error" ng-messages="formValidate.billing_country.$error" >

                            <?php echo getValidationMessage(); ?>


                        </div>

                </div>


                

                <div class="form-group">

                       <label for="name"> <?php echo e(getPhrase('city')); ?> <span class="text-red">*</span></label>

                        <?php 

                        $val=old('billing_city');
                        if ($record)
                          $val = $record->billing_city;

                        ?>

                        <select ng-init="billing_city={id:<?php echo e($val); ?> }" name="billing_city" ng-model="billing_city" class="form-control select2" ng-options="item.id as item.city for item in cities track by item.id" required="true">

                          <option value="">Select</option>  

                        </select>

                         <div class="validation-error" ng-messages="formValidate.billing_city.$error">

                                <?php echo getValidationMessage(); ?>

                        </div>
                 </div>



                 <div class="form-group">

					<button class="btn btn-primary login-bttn" ng-disabled='!formValidate.$valid'><?php echo e(getPhrase('save')); ?></button>

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