<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">
             <div class="px-2">

                <div class="panel-heading"> <?php echo e(getPhrase('dashboard')); ?> </div>

                <div class="">

                   <div class="row">


                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="<?php echo e(URL_LIST_AUCTIONS); ?>"><div class="state-icn bg-icon-info"><i class="fa fa-users"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(App\Auction::where('user_id',Auth::user()->id)->get()->count()); ?></h4>
                            <a href="<?php echo e(URL_LIST_AUCTIONS); ?>"><?php echo e(getPhrase('auctions')); ?></a>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="<?php echo e(URL_USER_NOTIFICATIONS); ?>"><div class="state-icn bg-icon-orange"><i class="fa fa-users"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(Auth::user()->notifications()->count()); ?></h4>
                            <a href="<?php echo e(URL_USER_NOTIFICATIONS); ?>"><?php echo e(getPhrase('notifications')); ?></a>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="<?php echo e(URL_MESSENGER); ?>"><div class="state-icn bg-icon-pink"><i class="fa fa-users"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(Auth::user()->topics()->with('receiver', 'sender')->orderBy('sent_at', 'desc')->count()); ?></h4>
                            <a href="<?php echo e(URL_MESSENGER); ?>"><?php echo e(getPhrase('messages')); ?></a>
                            </div>
                        </div>
                    </div>


                    
                   </div>




                    <div class="row">


                        <div class="col-md-6">
                          <div class="panel panel-primary dsPanel">
                            <div class="panel-heading"><i class="fa fa-bar-chart-o"></i> <?php echo e(getPhrase('auctions_statistics')); ?></div>
                            <div class="panel-body" >
                                <canvas id="payments_chart" width="100" height="60"></canvas>
                            </div>
                          </div>
                        </div>

                    </div>







                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

 
 
 <?php echo $__env->make('common.chart', array('chart_data'=>$auctions_auction_status_data,'ids' =>array('payments_chart'), 'scale'=>TRUE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>