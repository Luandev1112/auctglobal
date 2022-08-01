<?php $__env->startSection('content'); ?>

<?php echo $__env->make('bidder.leftmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <!--Dashboard section -->


    <div class="col-lg-8 col-md-8 col-sm-12 au-onboard">


            <a href="<?php echo e(URL_HOME); ?>" class="au-middles justify-content-start"> <?php echo e(getPhrase('home')); ?> &nbsp;<span> / <?php echo e($title); ?> </span></a>
             <div class="row au-left-side">
               <div class="col-lg-4 col-md-4 col-sm-4 au-primary">
                 <div class="au-card-franky">
                   <h4 class="text-center"><?php echo e(\Auth::User()->getBidderParicipatedAuctions()->count()); ?></h4> 
                   <p class="text-center"><?php echo e(getPhrase('auctions')); ?></p>  
                   <a href="<?php echo e(URL_BIDDER_AUCTIONS); ?>" title="My Auctions"><?php echo e(getPhrase('view')); ?></a> 
                 </div>     
                </div> 
                
                 <div class="col-lg-4 col-md-4 col-sm-4 au-primary au-secondary">
                 <div class="au-card-franky">
                   <h4 class="text-center"><?php echo e(\Auth::User()->getBidderFavAuctions()->count()); ?></h4> 
                   <p class="text-center"><?php echo e(getPhrase('fav_auctions')); ?></p>  
                   <a href="<?php echo e(URL_USERS_FAV_AUCTIONS); ?>" title="Favourite Auctions"><?php echo e(getPhrase('view')); ?></a> 
                 </div>     
                </div>  
                

                 <div class="col-lg-4 col-md-4 col-sm-4 au-primary au-quinary">
                 <div class="au-card-franky">
                   <h4 class="text-center"><?php echo e(\Auth::User()->getBidderWonAuctions()->count()); ?></h4> 
                   <p class="text-center"><?php echo e(getPhrase('won_auctions')); ?></p>  
                   <a href="<?php echo e(URL_BIDDER_AUCTIONS); ?>" title="View Auctions"><?php echo e(getPhrase('view')); ?></a> 
                 </div>     
                </div>  


                 <div class="col-lg-4 col-md-4 col-sm-4 au-primary au-senary">
                 <div class="au-card-franky">
                   <h4 class="text-center"><?php echo e(\Auth::User()->getBidderPayments()->count()); ?></h4> 
                   <p class="text-center"><?php echo e(getPhrase('payments')); ?></p>  
                   <a href="<?php echo e(URL_BIDDER_PAYMENTS); ?>" title="payments"><?php echo e(getPhrase('view')); ?></a> 
                 </div>     
                </div> 


                 <div class="col-lg-4 col-md-4 col-sm-4 au-primary au-ternary">
                 <div class="au-card-franky">
                   <h4 class="text-center"><?php echo e(\Auth::User()->unreadNotifications()->count()); ?></h4> 
                   <p class="text-center"><?php echo e(getPhrase('notifications')); ?></p>  
                   <a href="<?php echo e(URL_USER_NOTIFICATIONS); ?>" title="Notifications"><?php echo e(getPhrase('view')); ?></a> 
                 </div>     
                </div>  
                
                 <div class="col-lg-4 col-md-4 col-sm-4 au-primary au-quaternary">
                 <div class="au-card-franky">
                  <?php ($unread = App\MessengerTopic::countUnread()); ?>
                   <h4 class="text-center"><?php echo e($unread); ?></h4> 
                   <p class="text-center"><?php echo e(getPhrase('messages')); ?></p>  
                   <a href="<?php echo e(URL_MESSENGER); ?>" title="Messages"><?php echo e(getPhrase('view')); ?></a> 
                 </div>     
                </div>  
                
                
                
                

              </div>   
            </div> 

              </div>
      </div>   
    </section>
    <!--Dashboard section-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>