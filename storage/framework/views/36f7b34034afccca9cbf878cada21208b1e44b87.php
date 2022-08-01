<!DOCTYPE html>
<html lang="en" dir="<?php echo e((App\Language::isDefaultLanuageRtl()) ? 'rtl' : 'ltr'); ?>">



<head>
    <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
</head>




<body class="hold-transition skin-blue sidebar-mini" ng-app="academia">

<?php echo $__env->yieldContent('custom_div'); ?>
 <?php 
 $class = '';
 if(!isset($right_bar))
    $class = 'no-right-sidebar';

 ?>


<div id="wrapper">


<?php echo $__env->make('partials.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    

<?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <?php if(isset($siteTitle)): ?>
                <h3 class="page-title">
                    <?php echo e($siteTitle); ?>

                </h3>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-12">

                    
    <?php if(env('DEMO_MODE')): ?>  
    <div class="alert alert-info demo-alert">
    &nbsp;&nbsp;&nbsp;<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><?php echo e(getPhrase('info')); ?>!</strong> CRUD <?php echo e(getPhrase('operations_are_disabled_in_demo_version')); ?>

    </div>
    <?php endif; ?>

                    <?php if(Session::has('message')): ?>
                        <div class="alert alert-info">
                            <p><?php echo e(Session::get('message')); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if($errors->count() > 0): ?>
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php echo $__env->yieldContent('content'); ?>

                </div>
            </div>
        </section>
    </div>
</div>

<?php echo Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']); ?>

<button type="submit">Logout</button>
<?php echo Form::close(); ?>


<?php echo $__env->make('partials.javascripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>