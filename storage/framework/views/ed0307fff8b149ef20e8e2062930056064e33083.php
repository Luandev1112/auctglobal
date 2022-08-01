<?php $__env->startSection('content'); ?>

<?php echo $__env->make('bidder.leftmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!--Dashboard section -->


    <div class="col-lg-8 col-md-8 col-sm-12 au-onboard">


            <a href="<?php echo e(URL_HOME); ?>" class="au-middles justify-content-start"> <?php echo e(getPhrase('home')); ?> &nbsp;<span> / <?php echo e($title); ?> </span></a>

             <div class="row au-left-side">

                 <div class="col-md-12">
            <div class="list-group messages">
                <?php $__empty_1 = true; $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="row msg-item">
                        <div class="col-md-8">
                            <a href="<?php echo e(route('messenger.show', [$topic->id])); ?>" class="<?php echo e($topic->unread()?'unread':false); ?>">
                                <?php echo e($topic->otherPerson()->email); ?>

                            </a>

                            <p><a href="<?php echo e(route('messenger.show', [$topic->id])); ?>" class="<?php echo e($topic->unread()?'unread':false); ?>">
                                <?php echo e($topic->subject); ?>

                                </a></p>
                        </div>
                        <div class="col-md-4 text-right time"><?php echo e($topic->sent_at->diffForHumans()); ?></div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="row msg-item">
                       <h4 class="no-msg">
                        You have no messages.
                        </h4>
                    </div>
                <?php endif; ?>
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