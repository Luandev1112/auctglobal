<?php $__env->startSection('content'); ?>

<?php echo $__env->make('bidder.leftmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--Dashboard section -->
<?php $currency = getSetting('currency_code','site_settings');?>

    <div class="col-lg-9 col-md-8 col-sm-12 au-onboard">
            <a href="<?php echo e(URL_HOME); ?>" class="au-middles justify-content-start"> <?php echo e(getPhrase('home')); ?> &nbsp;<span> / <?php echo e($title); ?> </span></a>

            <div class="au-left-side form-auth-style">


              

                <div class="row">

                    <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th>#</th>
                       
                        <th> <?php echo e(getPhrase('image')); ?> </th>
                        <th> <?php echo e(getPhrase('title')); ?> </th>

                        <th> <?php echo e(getPhrase('start_date')); ?> </th>
                        <th> <?php echo e(getPhrase('end_date')); ?> </th>

                        <th> <?php echo e(getPhrase('reserve_price')); ?> </th>
                        
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                <?php if(count($auctions) > 0): ?>
                <tbody>
                    <?php if(count($auctions) > 0): ?>
                    <?php $i=0; ?>
                        <?php $__currentLoopData = $auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++;?>

                            <tr>
                              
                                <td><?php echo e($i); ?></td>
                               
                     
                                <td> <img src="<?php echo e(getAuctionImage($auction->image)); ?>" alt="<?php echo e($auction->title); ?>" width="50" /> </td>

                                <td> <span data-toggle="tooltip" title="<?php echo e($auction->title); ?>" data-placement="bottom"><?php echo str_limit($auction->title,10); ?> </span></td>

                                <td>  <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->start_date));?> </td>

                                <td>  <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?> </td>

                                <td> <?php echo e($currency); ?><?php echo e($auction->reserve_price); ?></td>

                                <td>
                                    
                                    <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" class="btn btn-primary btn-sm login-bttn"> <?php echo e(getPhrase('view')); ?> </a>

                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#removeFavModal" onclick="removeFavAuction(<?php echo e($auction->fav_id); ?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                   
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="11"> <?php echo e(getPhrase('no_entries_in_table')); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                <?php endif; ?>
            </table>
        </div>

                </div> 


            </div> 
    </div> 




        </div>
      </div>   
    </section>



<!--REMOVE FAV AUCTION MODAL-->

<div id="removeFavModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <?php echo Form::open(array('url' => URL_USERS_REMOVE_FAV_AUCTION, 'method' => 'POST', 'name'=>'favAuctionForm', 'novalidate'=>'', 'class'=>"loginform")); ?>


    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title"><?php echo e(getPhrase('remove_auction')); ?></h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body form-auth-style">

        <div class="form-group">

            <p>Are you sure to Remove Auction from your favourites ?</p>
            <input type="hidden" name="remove_fav_id" id="remove_fav_id">
        </div>


      <div class="text-center">

            <button type="button" class="btn btn-default login-bttn" data-dismiss="modal"><?php echo e(getPhrase('no')); ?></button>

            <button type="submit" class="btn btn-primary login-bttn"><?php echo e(getPhrase('yes')); ?></button>

        </div>

      </div>
      </div>

    </div>

    <?php echo Form::close(); ?>


  </div>

</div>
<!--REMOVE FAV AUCTION MODAL-->



    <!--Dashboard section-->

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home.pages.auctions.auctions-js-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script>
function removeFavAuction(id) {
    $("#remove_fav_id").val(id);
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>