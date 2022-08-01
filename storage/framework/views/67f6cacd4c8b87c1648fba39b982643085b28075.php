<?php 
$logos = \App\User::getCompanyLogos();

?>
<?php if(count($logos)>4): ?>
<!--Patners Section-->
    <section class="au-patner">
        <div class="container">

            <div class="row">
                <div class="screenshot-patner">

                    <?php $__currentLoopData = $logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <a href="<?php echo e(URL_HOME_AUCTIONS); ?>" title="<?php echo e($logo->username); ?>"> 
                            <img src="<?php echo e(getCompanyLogo($logo->company_logo,'logo')); ?>" alt="<?php echo e($logo->username); ?>" class="img-fluid partner-img"> 
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                   
                </div>
            </div>

        </div>
    </section>
    <!--Patners Section-->
<?php endif; ?>    