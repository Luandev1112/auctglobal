<?php

//Auction Categories
$categories = \App\Category::getHomeCategories(6);


?>
    <nav class="navbar navbar-expand-md navbar-light nav-custom">
      <div class="container">
        <a class="navbar-brand" href="<?php echo e(PREFIX); ?>">
          <img class="img-fluid" src="<?php echo e(IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')); ?>" alt="Auction Logo">
        </a>
        <a href="#off-canvas" class="js-offcanvas-trigger navbar-toggle collapsed" data-toggle="collapse" data-offcanvas-trigger="off-canvas" aria-expanded="false"></a>
        <button class="navbar-toggler js-offcanvas-trigger wb-btnn" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" data-offcanvas-trigger="off-canvas"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse d-none justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav nav-inner au-nav-inner">

                   <?php if(Auth::check()): ?>
                   <?php echo $__env->make('bidder.common.notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                   <?php endif; ?>

                   <li class="nav-item au-items"><a class="au-custom nav-link nav-press scroll" href="<?php echo e(URL_CONTACT_US); ?>" title="Contact Us"> <?php echo e(getPhrase('contact_us')); ?> </a></li>

                   <?php if(Auth::check()): ?>
                   <li><a href="<?php echo e(URL_DASHBOARD); ?>" title="Dashboard" class="nav-link nav-press scroll"> <?php echo e(getPhrase('dashboard')); ?> </a></li>
                   <?php endif; ?>


                   <?php if(!Auth::check()): ?>
                   <li><a href="javascript:void(0);" onclick="showModal('loginModal')" title="Login" class="nav-link nav-press scroll" ><?php echo e(getPhrase('login')); ?></a></li>
                   <?php endif; ?>


                </ul>
            </div>
        </div>
    </nav>
     <aside class="js-offcanvas" data-offcanvas-options='{ "modifiers": "left,overlay" }' id="off-canvas"></aside>
    <!-- /Navbar -->
    <section class="au-navbar">
        <div class="container">
            <div class="row">
                <div class="sf-contener clearfix col-lg-12" id="block_top_menu">
                    <div class="cat-title"> Menu <i class="fa fa-bars au-icon"></i></div>
                    <ul class="sf-menu clearfix menu-content">

                        <li><a href="<?php echo e(URL_HOME); ?>"> <?php echo e(getPhrase('home')); ?> </a></li>

                        <li><a href="<?php echo e(URL_HOME_AUCTIONS); ?>"> <?php echo e(getPhrase('auctions')); ?> </a></li>

                        <?php if($categories): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php $sub_categories = $category->get_sub_catgories()->get();?>

                        <?php if(count($sub_categories)): ?>
                        <li class="single-dropdown"><span class="menu-mobile-grover au-listts"><i class="fa fa-chevron-circle-down au-icon"></i></span>


                            <a href="javascript:void(0)"> <?php echo e($category->category); ?> </a>

                            <ul class="submenu-container clearfix first-in-line-xs menu-mobile">
                                <li>
                                    <ul>
                            <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php $auctions_count = $sub->getMenuSubCategoryAuctions()->count();?>

                                <li>
                                    <a href="javascript:void(0)" onclick="window.location.href='<?php echo e(URL_HOME_AUCTIONS); ?>?category=<?php echo e($category->slug); ?>&subcategory=<?php echo e($sub->slug); ?>';"> <?php echo e($sub->sub_category); ?> (<?php echo e($auctions_count); ?>) </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <li id="category-thumbnails"></li>
                            </ul>
                        </li>
                        <?php else: ?>


                        <li><a href="javascript:void(0)" onclick="window.location.href='<?php echo e(URL_HOME_AUCTIONS); ?>?category=<?php echo e($category->slug); ?>';"> <?php echo e($category->category); ?> </a></li>
                        <?php endif; ?>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <li><a href="<?php echo e(URL_LIVE_AUCTIONS); ?>"> <?php echo e(getPhrase('live_auctions')); ?> </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /Navbar-->

    <?php if(isset($breadcrumb)): ?>
     <!--BREADCRUMBS SECTION-->
    <section class="au-bread-crumbs">
      <div class="container">
         <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6 au-crumbs">
                <h5><?php echo e(isset($title) ? $title : ''); ?></h5>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 au-bread">
                <a href="javascript:void(0);" class="justify-content-end"><?php echo e(getPhrase('home')); ?> &nbsp; <span> / <?php echo e(isset($title) ? $title : ''); ?> </span></a>
            </div>
         </div>
      </div>
    </section>
    <!--BREADCRUMBS SECTION-->
    <?php endif; ?>
