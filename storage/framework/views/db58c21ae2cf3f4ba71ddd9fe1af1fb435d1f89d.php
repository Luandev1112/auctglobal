<?php $__env->startSection('content'); ?>

<!--CONTACT SECTION-->
    <section class="au-contacts">

        <div class="container">
<div class="row">

         <div class="col-lg-6 lg-offse-3 mx-auto">
         <div class="panel-login">

             <div class="au-who-main">
                <h2 class="text-center"><?php echo e($title); ?></h2>
              </div>
              
          <div class="panel-body form-auth-style">

            




               <?php echo Form::open(array('url' => URL_CONTACT_US, 'method' => 'POST','name'=>'formValidate', 'novalidate'=>'')); ?>


                <div class="row">

                    <div class="form-group col-lg-12">


                      <?php echo e(Form::text('name', old('name'), $attributes =

                      array('class' => 'form-control',

                      'placeholder' => 'Name',

                      'ng-model' => 'name',

                      'required' => 'true',

                      'ng-minlength' => '2',

                      'ng-maxlength' => '50',

                      'ng-class'=>'{"has-error": formValidate.name.$touched && formValidate.name.$invalid}',

                      ))); ?>



                      <div class="validation-error" ng-messages="formValidate.name.$error" >

                              <?php echo getValidationMessage(); ?>


                              <?php echo getValidationMessage('minlength'); ?>


                              <?php echo getValidationMessage('maxlength'); ?>


                              <?php echo getValidationMessage('pattern'); ?>


                      </div>

                   </div>


                   <div class="form-group col-lg-12">


                    <?php echo e(Form::text('contact_email', old('contact_email'), $attributes =

                    array('class' => 'form-control',

                    'placeholder' => 'Email',

                    'ng-model' => 'contact_email',

                    'required' => 'true',

                    'ng-class'=>'{"has-error": formValidate.contact_email.$touched && formValidate.contact_email.$invalid}',

                    ))); ?>



                    <div class="validation-error" ng-messages="formValidate.contact_email.$error" >

                            <?php echo getValidationMessage(); ?>


                            <?php echo getValidationMessage('email'); ?>


                    </div>

                </div>


                 <div class="form-group col-lg-12">



                      <?php echo e(Form::text('subject', old('subject'), $attributes =

                      array('class' => 'form-control',

                      'placeholder' => 'Subject',

                      'ng-model' => 'subject',

                      'required' => 'true',

                      'ng-minlength' => '2',

                      'ng-maxlength' => '100',

                      'ng-class'=>'{"has-error": formValidate.subject.$touched && formValidate.subject.$invalid}',

                      ))); ?>



                      <div class="validation-error" ng-messages="formValidate.subject.$error" >

                              <?php echo getValidationMessage(); ?>


                              <?php echo getValidationMessage('minlength'); ?>


                              <?php echo getValidationMessage('maxlength'); ?>


                              <?php echo getValidationMessage('pattern'); ?>


                      </div>

                   </div>



                    <div class="form-group col-lg-12">




                    <?php echo e(Form::textarea('message', old('message'), $attributes =

                    array('class' => 'form-control',

                    'rows'=>'3',

                    'cols'=>'5',

                    'placeholder' => 'Message',

                    'ng-model' => 'message',

                    'required' => 'true',

                    'ng-maxlength' => '200',

                    'ng-class'=>'{"has-error": formValidate.message.$touched && formValidate.message.$invalid}',

                    ))); ?>




                    <div class="validation-error" ng-messages="formValidate.message.$error" >

                      <?php echo getValidationMessage(); ?>


                      <?php echo getValidationMessage('maxlength'); ?>


                   </div>

                </div>




                  <div class="form-group text-center col-lg-12">

                      <button class="btn btn-primary login-bttn" ng-disabled='!formValidate.$valid'><?php echo e(getPhrase('contact')); ?></button>

                   </div>


               </div>
               <!--6-->


                <?php echo Form::close(); ?>




                   </div>
             </div>

 </div>
            </div>





            <?php echo e(Form::hidden('site_address', getSetting('site_address','site_settings'))); ?>

            <?php echo e(Form::hidden('site_city', getSetting('site_city','site_settings'))); ?>

            <?php echo e(Form::hidden('site_state', getSetting('site_state','site_settings'))); ?>

            <?php echo e(Form::hidden('site_zipcode', getSetting('site_zipcode','site_settings'))); ?>

            <?php echo e(Form::hidden('latitude', getSetting('latitude','site_settings'))); ?>

            <?php echo e(Form::hidden('longitude', getSetting('longitude','site_settings'))); ?>

        </div>

    </section>
    <!--CONTACT SECTION-->



    <!-- Google Maps -->
    <div class="google-map" id="am-portal-map"></div>
    <!-- /Google Maps -->


    <!--RECENT WINNERS SECTION-->
    <?php echo $__env->make('home.pages.auctions.recent-winners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--RECENT WINNERS SECTION-->


    <!--RECENT BUYERS SECTION-->
    <?php echo $__env->make('home.pages.auctions.recent-buyers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--RECENT BUYERS SECTION-->


    <?php echo $__env->make('home/testimonials', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>

<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('home.pages.auctions.auctions-js-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script src="<?php echo e(JS_HOME); ?>google-map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=<?php echo e(getSetting('api_key','site_settings')); ?>"></script>


<script>
$(document).ready(function () {

  var latitude  = <?php echo e(getSetting('latitude','site_settings')); ?>

  var longitude = <?php echo e(getSetting('longitude','site_settings')); ?>


  var address  = "<?php echo e(getSetting('site_address','site_settings')); ?>";
  address += "<br/>";
  address += " "+"<?php echo e(getSetting('site_state','site_settings')); ?>";
  address += " "+"<?php echo e(getSetting('site_city','site_settings')); ?>";
  address += " "+"<?php echo e(getSetting('site_zipcode','site_settings')); ?>";

  // console.log("ADDRES  "+address);
  googlemap(latitude, longitude, address);
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>