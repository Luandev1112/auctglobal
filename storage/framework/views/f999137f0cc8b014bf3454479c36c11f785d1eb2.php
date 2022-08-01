<?php 
//Testimonies
$testimonies = \App\Testmony::getTestimonies();
?>

<?php if(count($testimonies)): ?>
<!--Clients Section-->
    <section class="au-clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 au-deals">
                  
                    <h2 class="text-center"><?php echo e(getPhrase('words_from_our_clients')); ?></h2> </div>
                <div class="screenshot-method">

                    <?php $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="au-transform animated fadeInUp wow animated" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="au-texts">
                            <p class="au-text-style"> <?php echo e($testimony->testmony); ?></p>
                        </div>
                        <div class="triangle-down"></div>
                        <div class="media mr-2 mt-5">
                            <div class="media-body mr-4">
                                <h5 class="mt-3 text-right"> <?php echo e($testimony->username); ?> </h5>
                               
                            </div> 
                            <img src="<?php echo e(getProfilePath($testimony->image)); ?>" alt="<?php echo e($testimony->username); ?>" class="mr-3 rounded-circle testimony-user"> 
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   

                   

                </div>
            </div>
        </div>
    </section>
    <!--Clients Section-->
<?php endif; ?>