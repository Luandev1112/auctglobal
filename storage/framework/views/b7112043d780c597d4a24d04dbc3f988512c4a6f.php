<?php $__env->startSection('content'); ?>

<?php echo $__env->make('home/home-slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home/home-notification', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home/home-latest-auctions', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home/home-premium-auctions', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home/ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->make('home/live-auctions', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home/testimonials', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home/partners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>