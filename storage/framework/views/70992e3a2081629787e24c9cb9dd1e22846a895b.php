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
                            <a href="<?php echo e(URL_USERS); ?>"><div class="state-icn bg-icon-info"><i class="fa fa-users"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(App\User::get()->count()); ?></h4>
                            <a href="<?php echo e(URL_USERS); ?>"><?php echo e(getPhrase('users')); ?></a>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="<?php echo e(URL_LIST_AUCTIONS); ?>"><div class="state-icn bg-icon-pink"><i class="fa fa-gavel"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(App\Auction::get()->count()); ?></h4>
                            <a href="<?php echo e(URL_LIST_AUCTIONS); ?>"><?php echo e(getPhrase('auctions')); ?></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="<?php echo e(URL_CATEGORIES); ?>"><div class="state-icn bg-icon-purple"><i class="fa fa-list-alt"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(App\Category::get()->count()); ?></h4>
                            <a href="<?php echo e(URL_CATEGORIES); ?>"><?php echo e(getPhrase('categories')); ?></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="<?php echo e(URL_FAQ_QUESTIONS); ?>"><div class="state-icn bg-icon-success"><i class="fa fa-question"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(App\FaqQuestion::get()->count()); ?></h4>
                            <a href="<?php echo e(URL_FAQ_QUESTIONS); ?>"><?php echo e(getPhrase('faqs')); ?></a>
                            </div>
                        </div>
                    </div>
                   

                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="<?php echo e(URL_CITIES); ?>"><div class="state-icn bg-icon-blue"><i class="fa fa-map-marker"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(App\City::get()->count()); ?></h4>
                            <a href="<?php echo e(URL_CITIES); ?>"><?php echo e(getPhrase('cities')); ?></a>
                            </div>
                        </div>
                    </div>
                   

                     <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="<?php echo e(URL_LANGUAGES_LIST); ?>"><div class="state-icn bg-icon-orange"><i class="fa fa-language"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(App\Language::get()->count()); ?></h4>
                            <a href="<?php echo e(URL_LANGUAGES_LIST); ?>"><?php echo e(getPhrase('languages')); ?></a>
                            </div>
                        </div>
                    </div>

                    
                     <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="<?php echo e(URL_PAGES); ?>"><div class="state-icn bg-icon-lawn-green"><i class="fa fa-fw fa-th-large"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(App\ContentPage::get()->count()); ?></h4>
                            <a href="<?php echo e(URL_PAGES); ?>"><?php echo e(getPhrase('pages')); ?></a>
                            </div>
                        </div>
                    </div>

                  
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="<?php echo e(URL_SETTINGS_LIST); ?>"><div class="state-icn bg-icon-teal"><i class="fa fa-fw fa-cog"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title"><?php echo e(App\Settings::get()->count()); ?></h4>
                            <a href="<?php echo e(URL_SETTINGS_LIST); ?>"><?php echo e(getPhrase('settings')); ?></a>
                            </div>
                        </div>
                    </div>


                   

                 

                    </div>


                     <!--document-->
    <a href="<?php echo e(PREFIX); ?>Documentation" target="_blank" class="documentation-btn"><?php echo getPhrase('documentation');?></a>
         <style type="text/css">
            .documentation-btn{
                position: fixed;
    display: inline-block;
    top: 45%;
    right: -62px;
    z-index: 9999;
    background: rgb(0, 214, 100);
    text-shadow: 1px 1px #07964a;
    color: #fff;
    padding: 8px 20px;
    font-size: 14px;
    font-weight: 700;
    border-radius: 0 0 2px 2px;
    box-shadow: 0 17px 17px 0 rgba(0,0,0,.06);
    -ms-transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    letter-spacing: 1.5px;
            }.documentation-btn:hover{color: #fff}
         </style>
         <!--document-->


                    <!-- /.container-fluid -->
            <div class="row">


                <div class="col-md-6">
                  <div class="panel panel-primary dsPanel">
                    <div class="panel-heading"><i class="fa fa-bar-chart-o"></i> <?php echo e(getPhrase('auctions_statistics')); ?></div>
                    <div class="panel-body" >
                        <canvas id="payments_chart" width="100" height="60"></canvas>
                    </div>
                  </div>
                </div>


                
                <div class="col-md-6">
                  <div class="panel panel-primary dsPanel">
                    <div class="panel-heading"><i class="fa fa-pie-chart"></i> <?php echo e(getPhrase('seller_auctions')); ?></div>
                    <div class="panel-body" >
                        <canvas id="demanding_paid_quizzes" width="100" height="60"></canvas>
                    </div>
                  </div>
                </div>
              
                
            </div>


            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info" role="alert"><p>
                        <p><strong> add one cron job on server using the crontab -e command</strong> <a href="https://laravel.com/docs/5.6/scheduling" target="_blank" title="Cron Job">Reference</a></p>
                        <pre> * * * * * php /<?php echo e(PREFIX); ?> artisan auction:run >> /dev/null 2>&1</pre>

                       </p>

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

 <?php echo $__env->make('common.chart', array('chart_data'=>$seller_auctions,'ids' =>array('demanding_paid_quizzes')), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>