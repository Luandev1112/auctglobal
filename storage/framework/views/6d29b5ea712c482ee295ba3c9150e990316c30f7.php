<?php
//Upcoming Auctions
$upcoming_auctions = \App\Auction::getHomeUpcomingAuctions();


?>
<!--Upcoming Auction-->
    <section class="au-upcoming-auction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 au-deals">

                    <h2 class="text-center"> <?php echo e(getPhrase('upcoming_auctions')); ?> </h2> </div>
            </div>


            <?php if(count($upcoming_auctions)): ?>

            <?php $__currentLoopData = $upcoming_auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($auction->auction_status==='open'): ?>

            <div class="row au-line-bottom bar-line">
                <div class="col-lg-9 col-md-9 col-sm-12 au-no-margin">
                    <div class="media au-auction-media"> <img src="<?php echo e(getAuctionImage($auction->image)); ?>" alt="<?php echo e($auction->title); ?>">
                        <div class="media-body au-upcoming-body">
                             <h4 class="au-card-title pt-3"> <?php echo str_limit($auction->title,80,'..'); ?> </h4>
                            <label><?php echo e(getPhrase('by')); ?> <?php echo e($auction->username); ?></label>
                            <p class="au-card-text"> <?php echo e(date('jS M, Y h:i A',strtotime($auction->created_at))); ?> | <?php echo e($auction->city); ?>, <?php echo e($auction->state); ?></p>
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

            <?php elseif($auction->auction_status==='new'): ?>

            <div class="row au-line-bottom bar-line">
                <div class="col-lg-9 col-md-9 col-sm-12 au-no-margin">
                    <div class="media au-auction-media"> <img src="<?php echo e(getAuctionImage($auction->image)); ?>" alt="<?php echo e($auction->title); ?>">
                        <div class="media-body au-upcoming-body">
                            <h4 class="au-card-title pt-3"><?php echo str_limit($auction->title,80,'..'); ?></h4>
                            <label><?php echo e(getPhrase('by')); ?> <?php echo e($auction->username); ?></label>
                            <p class="au-card-text"><?php echo e(date('jS M, Y h:i A',strtotime($auction->created_at))); ?> | <?php echo e($auction->city); ?>, <?php echo e($auction->state); ?></p>
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
            <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-sm-12 au-all-upcoming">
                   <div class="text-center">
                    <a href="<?php echo e(URL_HOME_AUCTIONS); ?>" class="btn btn-primary au-space au-btn-gray login-bttn"><?php echo e(getPhrase('view_all_upcoming_auctions')); ?></a>
                       </div>
                </div>
            </div>

            <?php else: ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="text-center">
                    <h4> <?php echo e(getPhrase('no_auctions_available')); ?> </h4>
                    </div>
                </div>
            </div>
            <?php endif; ?>



        </div>
    </section>
    <!--Upcoming Auction-->

