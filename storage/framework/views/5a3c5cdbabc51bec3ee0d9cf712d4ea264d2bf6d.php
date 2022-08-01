<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(PREFIX); ?>" class="logo"
       style="font-size: 16px;">




        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
           <img src="<?php echo e(IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')); ?>" alt="Logo" class="img-fluid">
       </span>

        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
         <img src="<?php echo e(IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')); ?>" alt="Logo" class="img-fluid">
       </span>

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>



        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!--notifications-->
                <?php echo $__env->make('common.notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <!---new users-->
                <?php $newUsers = (new App\User())->getLatestUsers(); ?>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-topbar-event"></i> <?php echo e(getPhrase('latest_users')); ?>  </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
                    <div class="dropdown-menu-notif-list" id="latestUsers">
                    <?php $__currentLoopData = $newUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="dropdown-menu-notif-item">
                                <div class="photo">
                                    <img src="<?php echo e(getProfilePath($user->image)); ?>" alt="">
                                </div>
                                 <a href="<?php echo e(URL_USERS_VIEW.'/'.$user->slug); ?>"><?php echo e(ucfirst($user->name)); ?></a>  <?php echo e(getPhrase('was_joined_as').' '. getRoleData($user->role_id)); ?>

                                <div class="color-blue-grey-lighter"><?php echo e($user->updated_at->diffForHumans()); ?></div>
                            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="dropdown-menu-notif-more">
                            <a href="<?php echo e(URL_USERS); ?>"><?php echo e(getPhrase('see_more')); ?></a>
                        </div>
                    </div>
                </li>
                <!---new users-->



                <!--navbar dropdown-->
                <li class="dropdown profile-menu">
                    <div class="dropdown-toggle top-profile-menu" data-toggle="dropdown">
                        <?php if(Auth::check()): ?>
                        <div class="username">
                            <h4><?php echo e(Auth::user()->name); ?></h4>
                        </div>
                        <?php endif; ?>

                        <div class="profile-img"> <img src="<?php echo e(getProfilePath(Auth::user()->image, 'thumb')); ?>" alt=""> </div>
                        <div class="mdi mdi-menu-down"></div>
                    </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo e(URL_USERS_EDIT); ?>/<?php echo e(Auth::user()->slug); ?>">
                                <span><?php echo e(getPhrase('my_profile')); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(URL_USERS_CHANGE_PASSWORD); ?><?php echo e(Auth::user()->slug); ?>">
                                <span><?php echo e(getPhrase('change_password')); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(URL_LOGOUT); ?>">
                                <span><?php echo e(getPhrase('logout')); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
        </div>

    </nav>



</header>





<style>
    .slimScrollDiv {
        width: auto !important;
        height:auto !important;
    }

    .notification-menu {
        width: auto !important;
        list-style-type: none;
        padding: 5px;
        max-width: 300px;
        height:auto !important;
    }

    .notification-link {
        width: auto;
    }

    .notification-link a {
        white-space: normal !important;
    }

    .unread a {
        font-weight: bold !important;
    }

    .is-link {
        color: #5b9bd1 !important;
    }
</style><style>
    .slimScrollDiv {
        width: auto !important;
        height:auto !important;
    }

    .language-menu {
        width: auto !important;
        list-style-type: none;
        padding: 0;
        margin: 0;
        max-width: 300px;
        height:auto !important;
        max-height: 500px !important;
    }

    .language-link {
        width: auto;
    }

    .language-link a {
        display: block;
        width: 100%;
        white-space: normal !important;
        padding: 5px;
    }
    .language-link a:hover {
        color: #389ad2;
        background: #f9f9f9;
    }
</style>

