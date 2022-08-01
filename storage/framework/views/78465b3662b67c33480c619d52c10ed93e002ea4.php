<?php $__env->startSection('content'); ?>

<?php echo $__env->make('bidder.leftmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--Dashboard section -->


    <div class="col-lg-9 col-md-8 col-sm-12 au-onboard">
            <a href="<?php echo e(URL_HOME); ?>" class="au-middles justify-content-start"> <?php echo e(getPhrase('home')); ?> &nbsp;<span> / <?php echo e($title); ?> </span></a>

            <div class="au-left-side form-auth-style">

                <div class="row">
                    <?php  
                    $currency = getSetting('currency_code','site_settings');
                    $today = date('Y-m-d');
                    ?>

                    <div class="table-responsive">

                    <div class="panel-body">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th>#</th>
                       
                        <th> <?php echo e(getPhrase('image')); ?> </th>
                        <th> <?php echo e(getPhrase('title')); ?> </th>

                        <th> <?php echo e(getPhrase('start')); ?> </th>
                        <th> <?php echo e(getPhrase('end')); ?> </th>

                        <th> <?php echo e(getPhrase('reserve_price')); ?> </th>
                        
                        <th> <?php echo e(getPhrase('bid_no_of_times')); ?> </th>
                   
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                <?php if(count($auctions) > 0): ?>
                <tbody>
                    <?php if(count($auctions) > 0): ?>
                    <?php $i=0;
                   
                     ?>
                        <?php $__currentLoopData = $auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++;?>
                            <tr>
                            
                                <td><?php echo e($i); ?></td>
                               
                                <td> <img src="<?php echo e(getAuctionImage($auction->image)); ?>" alt="<?php echo e($auction->title); ?>" width="50" /> </td>

                                <td> <span data-toggle="tooltip" title="<?php echo e($auction->title); ?>" data-placement="bottom"> <?php echo str_limit($auction->title,10); ?> </span> </td>

                                <td>  <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->start_date));?> </td>

                                <td>  <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?> </td>

                                <td> <?php echo e($currency); ?><?php echo e($auction->reserve_price); ?></td>

                                <td> <?php echo e($auction->no_of_times); ?> </td>

                                <td>
                                    <div>    
                                        <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->auction_slug); ?>" class="btn btn-primary btn-sm login-bttn" title="View Auction Details"> <?php echo e(getPhrase('view')); ?> </a>

                                        <a href="#" ng-click="getBidHistory(<?php echo e($auction->id); ?>)" data-toggle="modal" data-target="#bidHistoryModal" title="view total bid history" class="btn btn-info btn-sm login-bttn"> <?php echo e(getPhrase('bid_history')); ?> </a>
                                        
                                        <?php $bid_pay=bidpayment($auction->id);

                                        ?>
                                        <?php if($bid_pay): ?> 
                                         <a href="<?php echo e(URL_BID_PAYMENT_CONFIRM); ?>/<?php echo e($auction->slug); ?>" class="btn btn-warning btn-sm login-bttn" data-toggle="tooltip" title="Pay Auction Bid"> <?php echo e(getPhrase('pay')); ?> </a>
                                        <?php endif; ?>

                                        <?php if($auction->is_bidder_won=='Yes'): ?>
                                        <span class="btn btn-success btn-sm login-bttn" data-toggle="tooltip" title="You have won this Auction"><?php echo e(getPhrase('won')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="11"> <?php echo e(getPhrase('no_entries_in_table')); ?> </td>
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
      </div>   
    </section>
    <!--Dashboard section-->







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
                <span style="float:right;">{{bid.created_at}} </span>
            </li>
        </ul>

    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary login-bttn" data-dismiss="modal"><?php echo e(getPhrase('close')); ?></button>
        
      </div>
    </div>
  </div>
</div>
<!--Bid history modal end-->


<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home.pages.auctions.auctions-js-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>