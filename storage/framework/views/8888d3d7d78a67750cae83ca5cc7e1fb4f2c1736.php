<?php $__env->startSection('content'); ?>
<!--Upcoming Auction-->
    <section class="au-upcoming-auction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 au-deals">

                    <h2 class="text-center"> <?php echo e(getPhrase('live_auctions')); ?> </h2> </div>
            </div>


            <?php if(count($live_auctions)): ?>

            <?php $__currentLoopData = $live_auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php 
            $live_auction_start_time = strtotime($auction->live_auction_start_time);
            $live_auction_end_time   = strtotime($auction->live_auction_end_time);

            if ($live_auction_start_time <= time() && $live_auction_end_time >= time()) {
            ?>
            <!--if current_time>=start_time && current_time<=end_time - currently happening-->

            <!--if current_time>=start_time && current_time<=end_time - will happen today-->

           

            <div class="row au-line-bottom bar-line">
                <div class="col-lg-9 col-md-9 col-sm-12 au-no-margin">
                    <div class="media au-auction-media"> <img src="<?php echo e(getAuctionImage($auction->image)); ?>" alt="<?php echo e($auction->title); ?>">
                        <div class="media-body au-upcoming-body">
                             <h4 class="au-card-title pt-3"> <?php echo str_limit($auction->title,80,'..'); ?> </h4>
                            <label><?php echo e(getPhrase('by')); ?> <?php echo e($auction->username); ?></label>
                            <p class="au-card-text"> 

                                <i class="fa fa-clock-o"></i><?php echo e($auction->live_auction_start_time); ?> - <?php echo e($auction->live_auction_end_time); ?> | <?php echo e($auction->city); ?>, <?php echo e($auction->state); ?></p>
                                
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="au-bidding live">
                        <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" title="Auction Details" class="btn btn-default au-space au-btn-modren login-bttn"> <?php echo e(getPhrase('happening_now')); ?></a>
                        <label><?php echo e(getPhrase('live_auction')); ?></label>
                    </div>
                </div>
            </div>

            <?php } else if ($live_auction_start_time > time() && $live_auction_end_time > time()) {?>

            <div class="row au-line-bottom bar-line">
                <div class="col-lg-9 col-md-9 col-sm-12 au-no-margin">
                    <div class="media au-auction-media"> <img src="<?php echo e(getAuctionImage($auction->image)); ?>" alt="<?php echo e($auction->title); ?>">
                        <div class="media-body au-upcoming-body">
                            <h4 class="au-card-title pt-3"><?php echo str_limit($auction->title,80,'..'); ?></h4>
                            <label><?php echo e(getPhrase('by')); ?> <?php echo e($auction->username); ?></label>
                            <p class="au-card-text"><i class="fa fa-clock-o"></i><?php echo e($auction->live_auction_start_time); ?> - <?php echo e($auction->live_auction_end_time); ?> | <?php echo e($auction->city); ?>, <?php echo e($auction->state); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="au-bidding">

                    <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" title="Auction Details" class="btn btn-default au-space au-btn-gray login-bttn"><?php echo e(getPhrase('view_details')); ?></a>
                    <label><?php echo e(getPhrase('upcoming_auction')); ?></label>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php else: ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="text-center">
                    <h4> <?php echo e(getPhrase('no_live_auctions_available')); ?> </h4>
                    </div>
                </div>
            </div>
            <?php endif; ?>



        </div>
    </section>
    <!--Upcoming Auction-->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>