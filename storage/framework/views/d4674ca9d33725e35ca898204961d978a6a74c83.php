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

                        <th> <?php echo e(getPhrase('reserve_price')); ?> </th>
                        <th> <?php echo e(getPhrase('buy_now_price')); ?> </th>


                        <th> <?php echo e(getPhrase('datetime')); ?> </th>

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

                                <td> <span data-toggle="tooltip" title="<?php echo e($auction->title); ?>" data-placement="bottom"><?php echo str_limit($auction->title,20); ?> </span> </td>

                                
                                <td> <?php echo e($currency); ?><?php echo e($auction->reserve_price); ?></td>

                                <td> <?php echo e($currency); ?><?php echo e($auction->buy_now_price); ?> </td>

                                <td> <?php if($auction->created_at): ?> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->created_at));?> <?php endif; ?></td>

                                <td>
                                    <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" class="btn btn-primary btn-sm login-bttn" title="View Auction Details"> <?php echo e(getPhrase('view')); ?> </a>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7"> <?php echo e(getPhrase('no_entries_in_table')); ?> </td>
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

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home.pages.auctions.auctions-js-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>