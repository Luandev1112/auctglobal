<?php $request = app('Illuminate\Http\Request'); ?>

<?php 

if (isset($active_class))
$active_class = $active_class;
else 
$active_class='';
?>

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="<?php echo e(isActive($active_class,'dashboard')); ?>">
                <a href="<?php echo e(PREFIX); ?>index">
                    <i class="fa fa-cloud"></i>
                    <span class="title"> <?php echo e(getPhrase('dashboard')); ?> </span>
                </a>
            </li>


            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
            <li class="<?php echo e(isActive($active_class,'user_management')); ?>">
                <a href="<?php echo e(route('users.index')); ?>">
                    <i class="fa fa-users"></i>
                    <span class="title"> <?php echo e(getPhrase('user_management')); ?> </span>
                </a>
            </li>
            <?php endif; ?>


            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_management_access')): ?>
            <li class="treeview <?php echo e(isActive($active_class,'faqs')); ?>">
                <a href="#">
                    <i class="fa fa-question"></i>
                    <span class="title"> <?php echo e(getPhrase('faq_management')); ?> </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_category_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'faq_categories' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(URL_FAQ_CATEGORIES); ?>">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                <?php echo e(getPhrase('categories')); ?>

                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_question_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'faq_questions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(URL_FAQ_QUESTIONS); ?>">
                            <i class="fa fa-question"></i>
                            <span class="title">
                                <?php echo e(getPhrase('questions')); ?>

                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_access')): ?>
            <li class="treeview <?php echo e(isActive($active_class,'categories')); ?>">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span class="title"> <?php echo e(getPhrase('categories')); ?> </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'categories' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(URL_CATEGORIES); ?>">
                            <i class="fa fa-tags"></i>
                            <span class="title">
                                <?php echo e(getPhrase('category')); ?> 
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sub_catogory_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'sub_catogories' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(URL_SUB_CATEGORIES); ?>">
                            <i class="fa fa-list-alt"></i>
                            <span class="title">
                                <?php echo e(getPhrase('sub_categories')); ?> 
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('location_master_access')): ?>
            <li class="treeview <?php echo e(isActive($active_class,'locations')); ?>">
                <a href="#">
                    <i class="fa fa-map-marker"></i>
                    <span class="title"> <?php echo e(getPhrase('location_master')); ?> </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'countries' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(URL_COUNTRIES); ?>">
                            <i class="fa fa-flag"></i>
                            <span class="title">
                                <?php echo e(getPhrase('countries')); ?>

                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('state_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'states' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(URL_STATES); ?>">
                            <i class="fa fa-map-marker"></i>
                            <span class="title">
                                <?php echo e(getPhrase('states')); ?>

                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('city_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'cities' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(URL_CITIES); ?>">
                            <i class="fa fa-building"></i>
                            <span class="title">
                                <?php echo e(getPhrase('cities')); ?>

                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>



            <?php if(checkRole(['admin'])): ?>
            <li class="<?php echo e(isActive($active_class,'languages')); ?>">
                <a href="<?php echo e(URL_LANGUAGES_LIST); ?>">
                    <i class="fa fa-language"></i>
                    <span><?php echo e(getPhrase('languages')); ?></span>
                </a>
            </li>
            <?php endif; ?>



            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_access')): ?>
            <li class="<?php echo e(isActive($active_class,'content_management')); ?>">
                    <a href="<?php echo e(URL_PAGES); ?>">
                        <i class="fa fa-file-o"></i>
                        <span class="title">
                            <?php echo e(getPhrase('content_management')); ?>

                           
                        </span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('setting_access')): ?>
            <li class="<?php echo e(isActive($active_class,'master_settings')); ?>">
                <a href="<?php echo e(URL_SETTINGS_LIST); ?>">
                    <i class="fa fa-gears"></i>
                    <span><?php echo e(getPhrase('master_settings')); ?></span>
                </a>
            </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testmony_access')): ?>
            <li class="<?php echo e(isActive($active_class,'testimonials')); ?>">
                <a href="<?php echo e(URL_TETSIMONIALS); ?>">
                    <i class="fa fa-quote-left"></i>
                    <span><?php echo e(getPhrase('testimonials')); ?></span>
                </a>
            </li>
            <?php endif; ?>



            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('template_access')): ?>
                <li class="<?php echo e(isActive($active_class,'email_templates')); ?>">
                    <a href="<?php echo e(URL_EMAIL_TEMPLATES); ?>">
                        <i class="fa fa-book"></i>
                        <span class="title">
                           <?php echo e(getPhrase('email_templates')); ?>

                        </span>
                    </a>
                </li>
            <?php endif; ?>




            <li class="<?php echo e(isActive($active_class,'auctions')); ?>">
                <a href="<?php echo e(URL_LIST_AUCTIONS); ?>">
                    <i class="fa fa-gavel"></i>
                    <span class="title">
                       <?php echo e(getPhrase('auctions')); ?> 
                    </span>
                </a>
            </li>
       



            <?php if(checkRole(['admin'])): ?>
            <li class="<?php echo e(isActive($active_class,'news_letter')); ?>">
                <a href="<?php echo e(URL_LIST_NEWS_LETTER); ?>">
                    <i class="fa fa-newspaper-o"></i>
                    <span class="title">
                       <?php echo e(getPhrase('news_letter')); ?> 
                    </span>
                </a>
            </li>
            <?php endif; ?>
            

            <?php if(checkRole(['admin'])): ?>
            <li class="treeview <?php echo e($request->segment(2) == 'reports' ? 'active' : ''); ?>">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span class="title"><?php echo e(getPhrase('reports')); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <!--  <li class="<?php echo e($request->is('/reports/auction-report')); ?>">
                        <a href="<?php echo e(url('/admin/reports/auction-report')); ?>">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">Auction Report</span>
                        </a>
                    </li> -->

                    <li class="<?php echo e($request->is('/reports/seller-wise-report')); ?> <?php echo e($request->segment(3) == 'seller-wise-report' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(url('/admin/reports/seller-wise-report')); ?>">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title"><?php echo e(getPhrase('seller_wise_reports')); ?></span>
                        </a>
                    </li>

                    <li class="<?php echo e($request->is('/reports/time-wise-report')); ?> <?php echo e($request->segment(3) == 'time-wise-report' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(url('/admin/reports/time-wise-report')); ?>">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title"><?php echo e(getPhrase('year_month_wise_reports')); ?></span>
                        </a>
                    </li>


                    <li class="<?php echo e($request->is('/reports/seller-auctions')); ?> <?php echo e($request->segment(3) == 'seller-auctions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(url('/admin/reports/seller-auctions')); ?>">
                            <i class="fa fa-user"></i>
                            <span class="title"><?php echo e(getPhrase('seller_auctions')); ?></span>
                        </a>
                    </li>

                </ul>
            </li>
            <?php endif; ?>


       

             <li class="<?php echo e(isActive($active_class,'notifications')); ?>">
                <a href="<?php echo e(URL_USER_NOTIFICATIONS); ?>">
                    <i class="fa fa-briefcase"></i>
                    <span class="title"> <?php echo e(getPhrase('notifications')); ?> </span>
                </a>
            </li>

            <?php if(checkRole(['admin'])): ?>
            <li class="<?php echo e(isActive($active_class,'sms')); ?>">
                <a href="<?php echo e(URL_SEND_SMS); ?>">
                    <i class="fa fa-mobile"></i><span class="title"> <?php echo e(getPhrase('sms')); ?> </span>
                </a>
            </li>
            <?php endif; ?>
            
            <?php ($unread = App\MessengerTopic::countUnread()); ?>
            <li class="<?php echo e($request->segment(1) == 'messenger' ? 'active' : ''); ?> <?php echo e(($unread > 0 ? 'unread' : '')); ?>">
                <a href="<?php echo e(URL_MESSENGER); ?>">
                    <i class="fa fa-envelope"></i>

                    <span><?php echo e(getPhrase('messages')); ?></span>
                    <?php if($unread > 0): ?>
                        <?php echo e(($unread > 0 ? '('.$unread.')' : '')); ?>

                    <?php endif; ?>
                </a>
            </li>
            <style>
                .page-sidebar-menu .unread * {
                    font-weight:bold !important;
                }
            </style>


            <?php if(checkRole(['admin'])): ?>
            <li class="<?php echo e(isActive($active_class,'payments')); ?>">
                <a href="<?php echo e(URL_PAYMENT_HISTORY); ?>">
                    <i class="fa fa-money"></i>
                    <span><?php echo e(getPhrase('payments')); ?></span>
                </a>
            </li>
            <?php endif; ?>

           

            <li>
                <a href="<?php echo e(URL_LOGOUT); ?>" title="Logout">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"> <?php echo e(getPhrase('logout')); ?> </span>
                </a>
            </li>
        </ul>
    </section>
</aside>

