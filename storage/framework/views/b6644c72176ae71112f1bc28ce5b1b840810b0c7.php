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
            <a href="<?php echo e(URL_HOME); ?>" class="au-middles justify-content-start"> <?php echo e(getPhrase('home')); ?> &nbsp;<span> / <?php echo e(getPhrase('profile')); ?> </span></a>

            <div class="au-left-side form-auth-style">


            	<?php echo e(Form::model($record, 
				array('url' => URL_USERS_EDIT.'/'.$record->slug, 
				'method'=>'PATCH', 'name'=>'formValidate', 'files'=>'true' , 'novalidate'=>''))); ?>


                <div class="row">

                	<div class="col-lg-6">

                	<div class="form-group">
                    <?php echo Form::label('name', getPhrase('name'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>

                    <?php
                        $val=old('name');
                        if ($record)
                         $val = $record->name;     
                    ?>

                    <?php echo e(Form::text('name', $val, $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Name',

                    'ng-model' => 'name', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

					'ng-minlength' => '2',

					'ng-maxlength' => '100',

                    'ng-init'=>'name="'.$val.'"',

					'ng-class'=>'{"has-error": formValidate.name.$touched && formValidate.name.$invalid}',

                    ))); ?>



                    <div class="validation-error" ng-messages="formValidate.name.$error" >

	    					<?php echo getValidationMessage(); ?>


	    					<?php echo getValidationMessage('minlength'); ?>


	    					<?php echo getValidationMessage('maxlength'); ?>


	    					<?php echo getValidationMessage('pattern'); ?>


					</div>
                </div>


                 <div class="form-group">

                    <?php 

                    $readonly = '';
                    $val=old('email');
                    if ($record) {
                        $readonly = 'readonly="true"';
                        $val = $record->email;
                    }



                    ?>

                    <?php echo Form::label('email', getPhrase('email'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>

                    <?php echo e(Form::email('email', $val, $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Email',

                    'ng-model' => 'email', 

                    'required' => 'true',

                    $readonly,

                    'ng-init'=>'email="'.$val.'"',
                    
                    'ng-class'=>'{"has-error": formValidate.email.$touched && formValidate.email.$invalid}',

                    ))); ?>


                    <div class="validation-error" ng-messages="formValidate.email.$error" >

                            <?php echo getValidationMessage(); ?>


                            <?php echo getValidationMessage('email'); ?>


                    </div>

                </div>


                <div class="form-group">

                    <?php echo Form::label('country', getPhrase('country'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>

                    <?php
                        $val=old('country_id');
                        if ($record)
                         $val = $record->country_id;
     
                    ?>

                    <?php echo e(Form::select('country_id', $countries, $val, ['placeholder' => getPhrase('select_country'),'class'=>'form-control select2',

                            'ng-model'=>'country_id',

                            'required'=> 'true',

                            'ng-init'=>'country_id="'.$val.'"',

                            'ng-change'=>'getStates(country_id)', 

                            'ng-class'=>'{"has-error": formValidate.country_id.$touched && formValidate.country_id.$invalid}'

                         ])); ?>



                    
                        <div class="validation-error" ng-messages="formValidate.country_id.$error" >

                            <?php echo getValidationMessage(); ?>


                        </div>

                </div>



                 <div class="form-group">

                       <label for="name"> <?php echo e(getPhrase('city')); ?> <span class="text-red">*</span></label>

                        <?php 

                        $val=old('city_id');
                        if ($record)
                          $val = $record->city_id;

                        ?>

                        <select ng-init="city_id={id:<?php echo e($val); ?> }" name="city_id" ng-model="city_id" class="form-control select2" ng-options="item.id as item.city for item in cities track by item.id" required="true">

                          <option value="">Select</option>  

                        </select>

                         <div class="validation-error" ng-messages="formValidate.city_id.$error">

                                <?php echo getValidationMessage(); ?>

                        </div>
                 </div>



                <div class="form-group">

                    <div class="row"> 

                       <div class="col-md-6">

                         <?php echo Form::label('profile_pic', getPhrase('profile_picture'), ['class' => 'control-label']); ?>    

                        <?php echo Form::file('image', array('id'=>'image_input', 'accept'=>'.png,.jpg,.jpeg')); ?>


                        </div>

                        <?php if(isset($record) && $record) { 

                              if($record->image!='') {

                            ?>

                        <div class="col-md-6">
                            <img src="<?php echo e(getProfilePath($record->image)); ?>" />
                        </div>

                        <?php } } ?>
                     </div>   

                </div>



                

                </div>


                <div class="col-lg-6">

                	<div class="form-group">

                    <?php 
                    $readonly = '';
                    $val=old('username');
                    if ($record) {
                        $readonly = 'readonly="true"';
                        $val = $record->username;
                    }

                    ?>

                    <?php echo Form::label('username', getPhrase('username'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>

                    <?php echo e(Form::text('username', $val , $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Username',

                    'ng-model' => 'username', 

                    'required' => 'true',

                    $readonly,

                    'ng-pattern' => getRegexPattern("name"),

                    'ng-minlength' => '2',

                    'ng-maxlength' => '100',

                    'ng-init'=>'username="'.$val.'"',

                    'ng-class'=>'{"has-error": formValidate.username.$touched && formValidate.username.$invalid}',

                    ))); ?>


                    <div class="validation-error" ng-messages="formValidate.username.$error" >

                            <?php echo getValidationMessage(); ?>


                            <?php echo getValidationMessage('minlength'); ?>


                            <?php echo getValidationMessage('maxlength'); ?>


                            <?php echo getValidationMessage('pattern'); ?>


                    </div>

                </div>



                <div class="form-group">

                    <?php echo Form::label('phone', getPhrase('phone'), ['class' => 'control-label']); ?>


                    <span class="text-red">*</span>

                    <?php
                        $val=old('phone');
                        if ($record)
                         $val = $record->phone;     
                    ?>

                    <?php echo e(Form::text('phone', $val, $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Phone',

                    'ng-model' => 'phone', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("phone"),

                    'ng-maxlength' => '20',

                    'ng-init'=>'phone="'.$val.'"',

                    'ng-class'=>'{"has-error": formValidate.phone.$touched && formValidate.phone.$invalid}',



                    ))); ?>


                    <div class="validation-error" ng-messages="formValidate.phone.$error" >

                            <?php echo getValidationMessage('phone'); ?>


                            <?php echo getValidationMessage('maxlength'); ?>


                    </div>

                </div>


                 <div class="form-group">

                        <label for="name"> <?php echo e(getPhrase('state')); ?> <span class="text-red">*</span></label>


                        <?php 

                        
                        $val=old('state_id');
                        if ($record)
                          $val = $record->state_id;

                        ?>

                        <select ng-init="state_id={id:<?php echo e($val); ?> }" name="state_id" ng-model="state_id" class="form-control select2" ng-options="item.id as item.state for item in states track by item.id" ng-change="getCities(state_id)" required="true">

                          <option value="">Select</option>  

                        </select>

                         <div class="validation-error" ng-messages="formValidate.state_id.$error">

                                <?php echo getValidationMessage(); ?>

                        </div>
                 </div>




                  <div class="form-group">

                    <?php echo Form::label('address', getPhrase('address'), ['class' => 'control-label']); ?>


                   <?php
                        $val=old('address');
                        if ($record)
                         $val = $record->address;     
                    ?>

                    <?php echo e(Form::textarea('address', $val, $attributes = 

                    array('class' => 'form-control', 'rows'=>3, 

                    'placeholder' => 'Address',

                    'ng-model' => 'address', 

                    'ng-maxlength' => '100',

                    'ng-init'=>'address="'.$val.'"',

                    'ng-class'=>'{"has-error": formValidate.address.$touched && formValidate.address.$invalid}',



                    ))); ?>



                    
                    <div class="validation-error" ng-messages="formValidate.address.$error" >

                           
                            <?php echo getValidationMessage('maxlength'); ?>


                    </div>

                </div>
                	  

                 <div class="form-group">

					<button class="btn btn-primary login-bttn"  ng-disabled='!formValidate.$valid'><?php echo e(getPhrase('save')); ?></button>

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
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>