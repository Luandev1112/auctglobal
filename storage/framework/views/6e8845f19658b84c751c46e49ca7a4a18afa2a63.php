 
<?php if(Session::has('flash_message')): ?>
    <script type="text/javascript">
        swal({
            title: "<?php echo e(Session::get('flash_message.title')); ?>",
            text: "<?php echo e(Session::get('flash_message.text')); ?>",
            type: "<?php echo e(Session::get('flash_message.type')); ?>",
            timer: 1700,
            showConfirmButton: false
        });
    </script>
<?php endif; ?>

<?php if(Session::has('flash_overlay')): ?>
    <script type="text/javascript">
        swal({
            title: "<?php echo e(Session::get('flash_overlay.title')); ?>",
            text: "<?php echo e(Session::get('flash_overlay.text')); ?>",
            type: "<?php echo e(Session::get('flash_overlay.type')); ?>",
            confirmButtonText: "Ok"
        });
    </script>
<?php endif; ?>