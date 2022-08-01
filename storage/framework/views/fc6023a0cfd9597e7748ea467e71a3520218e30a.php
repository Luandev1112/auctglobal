 <?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>dropzone/basic.css" rel="stylesheet">

<script src="<?php echo e(JS); ?>dropzone.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_div'); ?>
<div ng-controller="prepareAuctionData">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3 class="page-title"> <?php echo e(getPhrase('auctions')); ?> </h3>

    <div class="panel panel-default">
        <div class="panel-heading">
           <?php echo e(getPhrase('view')); ?>

        </div>


<?php $currency = getSetting('currency_code','site_settings');?>

<div class="panel-body">


         <!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i class="fa fa-list"></i> <?php echo e(getPhrase('auction_details')); ?> </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="far fa-image"></i> <?php echo e(getPhrase('images')); ?> </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab"><i class="fa fa-user"></i> <?php echo e(getPhrase('auction_bidders')); ?> </a>
    </li>
</ul>




<!-- Tab panels -->
<div class="tab-content">


    <!--Panel 1-->
    <div class="tab-pane fade in active" id="panel1" role="tabpanel">
      
        <br>
            <div class="row">
                
                <div class="col-md-12">

                    <div class="table-responsive">

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th> <?php echo e(getPhrase('title')); ?> </th>
                            <td field-key='title'><?php echo e($record->title); ?></td>
                        </tr>
                       
                        <tr>
                            <th> <?php echo e(getPhrase('image')); ?> </th>
                            <td field-key='image'> <a href="<?php echo e(getAuctionImage($record->image,'auction')); ?>" target="_blank"> <img src="<?php echo e(getAuctionImage($record->image)); ?>" alt="<?php echo e($record->title); ?>" width="50"> </a> </td>
                        </tr>


                        <tr>
                            <th> <?php echo e(getPhrase('category')); ?>  </th>
                            <td field-key='category'> <?php echo e($record->category); ?> </td>
                        </tr>


                        <tr>
                            <th> <?php echo e(getPhrase('sub_category')); ?>  </th>
                            <td field-key='sub_category'> <?php echo e($record->sub_category); ?> </td>
                        </tr>


                        <tr>
                            <th> <?php echo e(getPhrase('seller')); ?>  </th>
                            <td field-key='seller'> <?php echo e($record->username); ?> </td>
                        </tr>


                        <tr>
                            <th> <?php echo e(getPhrase('start_date')); ?>  </th>
                            <td field-key='start_date'>  <?php if($record->start_date): ?> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($record->start_date));?> <?php endif; ?> </td>
                        </tr>

                        <tr>
                            <th> <?php echo e(getPhrase('end_date')); ?>  </th>
                            <td field-key='end_date'>  <?php if($record->end_date): ?> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($record->end_date));?> <?php endif; ?> </td>
                        </tr>


                        <tr>
                            <th> <?php echo e(getPhrase('live_auction_date')); ?>  </th>
                            <td>  <?php if($record->live_auction_date): ?> <?php echo date(getSetting('date_format','site_settings'), strtotime($record->live_auction_date));?> <?php endif; ?> </td>
                        </tr>

                        <tr>
                            <th> <?php echo e(getPhrase('live_auction_start_time')); ?>  </th>
                            <td>  <?php echo e($record->live_auction_start_time); ?> </td>
                        </tr>


                         <tr>
                            <th> <?php echo e(getPhrase('live_auction_end_time')); ?>  </th>
                            <td>  <?php echo e($record->live_auction_end_time); ?> </td>
                        </tr>

                        <tr>
                            <th> <?php echo e(getPhrase('minimum_bid')); ?>  </th>
                            <td field-key='minimum_bid'> <?php echo e($currency); ?><?php echo e($record->minimum_bid); ?> </td>
                        </tr>

                        <tr>
                            <th> <?php echo e(getPhrase('reserve_price')); ?>  </th>
                            <td field-key='reserve_price'> <?php echo e($currency); ?><?php echo e($record->reserve_price); ?> </td>
                        </tr>

                        <tr>
                            <th> <?php echo e(getPhrase('buy_now_price')); ?>  </th>
                            <td field-key='buy_now_price'> <?php echo e($currency); ?><?php echo e($record->buy_now_price); ?> </td>
                        </tr>

                         <tr>
                            <th> <?php echo e(getPhrase('bid_increment')); ?>  </th>
                            <td field-key='bid_increment'> <?php echo e($currency); ?><?php echo e($record->bid_increment); ?> </td>
                        </tr>

                        <tr>
                            <th> <?php echo e(getPhrase('description')); ?>  </th>
                            <td field-key='description'> <?php echo $record->description; ?> </td>
                        </tr>

                        <tr>
                            <th> <?php echo e(getPhrase('shipping_conditions')); ?>  </th>
                            <td field-key='shipping_conditions'> <?php echo $record->shipping_conditions; ?> </td>
                        </tr>

                        <tr>
                            <th> <?php echo e(getPhrase('international_shipping')); ?>  </th>
                            <td field-key='international_shipping'> 
                                <?php if($record->international_shipping==1): ?>
                                <?php echo e(getPhrase('yes')); ?>

                                <?php else: ?>
                                <?php echo e(getPhrase('no')); ?>

                                <?php endif; ?>
                            </td>
                        </tr>


                        <tr>
                            <th> <?php echo e(getPhrase('shipping_terms')); ?>  </th>
                            <td field-key='shipping_terms'> <?php echo $record->shipping_terms; ?> </td>
                        </tr>


                        <tr>
                            <th> <?php echo e(getPhrase('featured')); ?>  </th>
                            <td field-key='make_featured'> 
                                <?php if($record->make_featured==1): ?>
                                <?php echo e(getPhrase('yes')); ?>

                                <?php else: ?>
                                <?php echo e(getPhrase('no')); ?>

                                <?php endif; ?>
                            </td>
                        </tr>


                        <tr>
                            <th> <?php echo e(getPhrase('auction_status')); ?>  </th>
                            <td field-key='auction_status'> <?php echo e(ucfirst($record->auction_status)); ?> </td>
                        </tr>

                        <tr>
                            <th> <?php echo e(getPhrase('admin_status')); ?>  </th>
                            <td field-key='admin_status'> <?php echo e(ucfirst($record->admin_status)); ?> </td>
                        </tr>


                        <tr>
                            <th> <?php echo e(getPhrase('created_by')); ?>  </th>
                            <td field-key='created_by'> <?php echo e($record->created_by); ?> </td>
                        </tr>

                         <tr>
                            <th> <?php echo e(getPhrase('last_updated_by')); ?>  </th>
                            <td field-key='updated_by_name'> <?php echo e($record->updated_by_name); ?> </td>
                        </tr>


                        


                       

                        <tr>
                            <th> <?php echo e(getPhrase('admin_commission_type')); ?>  </th>
                            <td field-key='admin_commission_type'>
                                <?php if($record->admin_commission_type=='auction'): ?>
                                <?php echo e(getPhrase('per_auction')); ?>

                                <?php else: ?>
                                <?php echo e(ucfirst($record->admin_commission_type)); ?>

                                <?php endif; ?>
                                 </td>
                        </tr>



                        <tr>
                            <th> <?php echo e(getPhrase('commission_value')); ?>  </th>
                            <td field-key='commission_value'> <?php if($record->commission_value>0): ?> <?php echo e($currency); ?><?php echo e($record->commission_value); ?> <?php endif; ?> </td>
                        </tr>


                       
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/.Panel 1-->







    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">

        <br>
        <div class="row">

        <div class="col-md-12">
                <h4><?php echo e(getPhrase('upload_images')); ?></h4>

                    <?php echo Form::open(array('url' => URL_AUCTIONS_UPLOAD_IMAGES.$record->slug, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers', 
                        'files'=>'true','class'=>"dropzone", 'id'=>"real-dropzone",'multiple'=>true)); ?>


                    <div class="row">
        
                        <div class="col-lg-4">
                            <div class="dragble-area">
                                 <div class="dz-message">
                                <h4 style="text-align: center;color:#428bca;">Drop files in this area  <span class="glyphicon glyphicon-hand-down"></span></h4>
                                </div>
                            </div>

                             <div class="instuctions-block mt-3">
                                <ul>
                                    <li><?php echo e(getPhrase('only_image_files_are_accepted')); ?></li>
                                    <li><?php echo e(getPhrase('files_are_uploaded_as_soon_as_you_drop_them')); ?></li>
                                    <li><?php echo e(getPhrase('maximum_allowed_size_is_5MB')); ?></li>
                                    <li style="color:red;"><?php echo e(getPhrase('for_good_resolution_image_width_height_950x650')); ?></li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="scroll-height">
                            <h3 class="files-title"><?php echo e(getPhrase('total_uploaded_files')); ?> <span id="photoCounter"></span></h3>
                            <div class="dropzone-previews" id="dropzonePreview"></div>
                            </div>
                         </div>

                    </div>


                     <div class="fallback">                   
                         <input type="file" name="file" multiple />
                    </div>


                    <?php echo Form::close(); ?>


            </div>

        </div>


            <!-- Dropzone Preview Template -->
    <div id="preview-template" style="display: none;">

        <div class="dz-preview dz-file-preview">
            <div class="dz-image pdf-overlay" >  <img data-dz-thumbnail="">  </div>

            <div class="dz-details">
                <div class="dz-size"><span data-dz-size=""></span></div>
                <div class="dz-filename"><span data-dz-name=""></span></div>
            </div>
            
            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>

            <div class="dz-success-mark">
                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                    <title>Check</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                    </g>
                </svg>
            </div>

            <div class="dz-error-mark">
                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                    <title>error</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                            <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                        </g>
                    </g>
                </svg>
            </div>

        </div>
    </div>
    <!-- End Dropzone Preview Template -->

    </div>
    <!--/.Panel 2-->









    <!--Panel 3-->
    <div class="tab-pane fade" id="panel3" role="tabpanel">
        <br>
        <div class="row">

            <div class="col-md-12">

                <div class="table-responsive">

                <table class="table table-bordered table-striped datatable">

                <thead>

                    <tr>    
                        <th>#</th>
                        <th> <?php echo e(getPhrase('username')); ?> </th>
                        <th> <?php echo e(getPhrase('email')); ?> </th>
                        <th> <?php echo e(getPhrase('image')); ?> </th>
                        <th> <?php echo e(getPhrase('no_of_times')); ?> </th>
                        <th> <?php echo e(getPhrase('highest_bid')); ?> </th>

                        
                        <th>&nbsp;</th> 

                    </tr>
                </thead>
               <?php if(isset($bidders) && count($bidders)): ?>
                <tbody>
                   <?php if(count($bidders)): ?>
                       <?php $__currentLoopData = $bidders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                       <?php 
                       $highest_bid='';
                       $highestbid = $user->getHighestBid();

                       if (!empty($highestbid))
                        $highest_bid = $highestbid->bid_amount;



                       ?>
                            <tr>
                                <td>#</td>
                                <td field-key='name'>
                                <?php if(checkRole(getUserGrade(1))): ?>    
                                <a href="<?php echo e(URL_USERS_VIEW); ?>/<?php echo e($user->slug); ?>"><?php echo e($user->username); ?></a>
                                <?php else: ?>
                                <?php echo e($user->username); ?>

                                <?php endif; ?>
                                </td>

                                <td field-key='email'> <?php echo e($user->email); ?> </td>

                                <td field-key='image'> <img style="width:30px;" src="<?php echo e(getProfilePath($user->image)); ?>"  />  </td>

                                <td> <?php echo e($user->no_of_times); ?> </td>

                                <td> <?php if($highest_bid): ?> <?php echo e($currency); ?><?php echo e($highest_bid); ?> <?php endif; ?> </td>


                                <td> 
                                    <a href="#" ng-click="getBidHistory(<?php echo e($user->id); ?>)" data-toggle="modal" data-target="#bidHistoryModal" title="view total bid history of <?php echo e($user->username); ?>" class="btn btn-xs btn-primary"> <?php echo e(getPhrase('bid_history')); ?> </a>
                                   

                                    <?php if(checkRole(['admin'])): ?>
                                    
                                    <?php if($send_email): ?>
                                    <a href="#" onclick="auctionBidder(<?php echo e($user->id); ?>)" data-toggle="tooltip" data-placement="bottom" class="btn btn-xs btn-info" title="send email to <?php echo e($user->username); ?> regarding bidding payment"> <?php echo e(getPhrase('send_email')); ?> </a>
                                    <?php endif; ?> 

                                    <?php endif; ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>
                            <tr>
                                <td colspan="6"> <?php echo e(getPhrase('no_entries_in_table')); ?></td>
                            </tr>
                        <?php endif; ?>
                </tbody>
                <?php endif; ?>
            </table>


                 </div>

            </div>

        </div>


    </div>
    <!--/.Panel 3-->

</div>


        <p>&nbsp;</p>

        <a href="<?php echo e(URL_LIST_AUCTIONS); ?>" class="btn btn-default"> <?php echo e(getPhrase('back_to_list')); ?> </a>

        </div>







<!-- Bid history Modal -->
<div class="modal fade right" id="bidHistoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full-height modal-right" role="document">

                                          
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(getPhrase('bid_history')); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
       

        <ul class="list-group z-depth-0">

            <li class="list-group-item justify-content-between">
                <span><b><?php echo e(getPhrase('bid_amount')); ?></b></span>
                <span style="float:right;"><b><?php echo e(getPhrase('datetime')); ?></b></span> 
            </li>

            <li ng-repeat="bid in bid_history" class="list-group-item justify-content-between">
                <span><?php echo e($currency); ?>{{bid.bid_amount}}</span>
                <span style="float:right;">{{bid.created_at}}</span>
            </li>
        </ul>

    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(getPhrase('close')); ?></button>
        
      </div>
    </div>
  </div>
</div>
<!--Bid history modal end-->






<!--send Email modal-->  
<div class="modal fade" id="sendEmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(getPhrase('send_invoice_email_to_bidder_regarding_payment')); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>



      <div class="modal-body form-auth-style">

        <?php echo Form::open(array('url' => URL_BID_EMAIL_NOTIFICATION, 'method' => 'POST','name'=>'formValidate','novalidate'=>'')); ?>


        <input type="hidden" name="ab_id" id="ab_id" value="">
        <input type="hidden" name="auction_id" value="<?php echo e($record->id); ?>">

        <p>Send Email notification to User regarding payment of Auction</p>

         <div class="form-group">

            <?php echo e(Form::textarea('message', old('message'), $attributes = 

                array('class' => 'form-control ckeditor', 

                'placeholder' => 'Enter Email Content/Message to Bidder',

                'ng-model' => 'message',

                'required' => 'true',

                'rows'=>3,

                'ng-class'=>'{"has-error": formValidate.message.$touched && formValidate.message.$invalid}',

                ))); ?>


            <div class="validation-error" ng-messages="formValidate.message.$error" >

                <?php echo getValidationMessage(); ?>


            </div>

          </div>

           <div class="form-group">

            <?php echo Form::label('sent_at', getPhrase('start_date'), ['class' => 'control-label']); ?>


                <span class="text-red">*</span>

                <?php echo e(Form::text('sent_at', old('sent_at') , $attributes = 

                array('class' => 'form-control', 

                'id' => 'datetimepicker6',

                'placeholder'=>'Payment Start Date and Time',

                'ng-model' => 'sent_at',

                ))); ?>



            </div>


            <div class="form-group">

                <?php echo Form::label('end_date', getPhrase('end_date'), ['class' => 'control-label']); ?>


                <span class="text-red">*</span>



                <?php echo e(Form::text('ended_at', old('ended_at') , $attributes = 

                array('class' => 'form-control', 

                'id' => 'datetimepicker7',

                'placeholder'=>'Payment End Date and Time',

                'ng-model' => 'ended_at', 

               
                ))); ?>



            </div>



        <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(getPhrase('close')); ?></button>

        <button type="submit" name="send_email" class="btn btn-primary" ng-disabled="!formValidate.$valid"><?php echo e(getPhrase('send')); ?></button>

      </div>



        <?php echo Form::close(); ?>


     

      </div>




      


    </div>
  </div>
</div>
<!--send Email modal-->





    </div>
<?php $__env->stopSection(); ?>






<?php $__env->startSection('footer_scripts'); ?>
<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.auctions.scripts.auction-js-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
 
 

var photo_counter = 0;
Dropzone.options.realDropzone = {

    uploadMultiple: true,
    parallelUploads: 100,
    maxFile: 15,
    maxFilesize: 8,
    previewsContainer: '#dropzonePreview',
    previewTemplate: document.querySelector('#preview-template').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove',
    dictFileTooBig: 'File size is bigger than 8MB',
    acceptedFiles: "application/pdf,image/*",
    autoProcessQueue: true,

    // The setting up of the dropzone
    init:function() {
        var previous_uploads = <?php print_r($previous_uploads); ?>;

        photo_counter = previous_uploads.length;
        for(i=0; i<previous_uploads.length; i++){

         var mockFile = previous_uploads[i];       
         
          this.options.addedfile.call(this, mockFile);

           dataUrl = "<?php echo UPLOADS;?>auctions/"+mockFile.filename;

           if (!mockFile.type.match(/image.*/)) {
            dataUrl = "<?php echo IMAGES;?>img-example.jpg";
           }
           this.options.thumbnail.call(this, mockFile, dataUrl);

           // mockFile.previewElement.classList.add('dz-success');
           // mockFile.previewElement.classList.add('dz-complete');
           
        }
            // $('.dz-image').css('background-image', 'url(<?php echo e(AUCTION_IMAGES_PATH_URL); ?>)'+mockFile.filename);

         $("#photoCounter").text( "(" + photo_counter + ")");

        this.on("removedfile", function(file) {
            $.ajax({
                type: 'POST',
                url: '<?php echo e(URL_AUCTIONS_DELETE_IMAGES); ?>'+ file.id,
                data: {id: file.id, _token: $('[name="_token"]').val()},
                dataType: 'html',
                success: function(data){
                     photo_counter--;
                        $("#photoCounter").text( "(" + photo_counter + ")");
                   
                }
            });

        } );
    },
    error: function(file, response) {
        if($.type(response) === "string")
            var message = response; //dropzone sends it's own error messages in string
        else
            var message = response.message;
        file.previewElement.classList.add("dz-error");
        _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
        _results = [];
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i];
            _results.push(node.textContent = message);
        }
        return _results;
    },
    success: function(file,done) {
       
        file.id=done[photo_counter];
        photo_counter++;
        $("#photoCounter").text( "(" + photo_counter + ")");
    },
    accept: function(file, done) { 

    var thumbnail = $('.dropzone .dz-preview.dz-file-preview .dz-image:last ');
    
   
    switch (file.type) {
      case 'application/pdf':
      
        thumbnail.css('background-image', 'url(<?php echo e(IMAGES); ?>pdf.png)');
        break;
      case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
        thumbnail.css('background', 'url(img/doc.png)');
        break;
    }

    done();
  },
}
 </script>

<script src="<?php echo e(JS); ?>moment.min.js"></script>
<script src="<?php echo e(JS); ?>bootstrap-datetimepicker.min.js"></script>

<script>
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });


    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>


<script>
function auctionBidder(id)
{
    var id = id;
    if (id) {
        $("#ab_id").val(id);
        $("#sendEmailModal").modal('show');
    }
}
</script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('custom_div_end'); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>