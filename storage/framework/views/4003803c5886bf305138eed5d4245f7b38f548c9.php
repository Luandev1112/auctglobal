<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="<?php echo e(CSS); ?>checkbox.css" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('custom_div'); ?>

<?php if(isset($record) && count($record)): ?>
    <div ng-controller="prepareAuctionData" ng-init="initFunctions()">
<?php else: ?>
     <div ng-controller="prepareAuctionData">
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo e(getPhrase('auctions')); ?></h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(isset($title) ? $title : ''); ?>

        </div>

        

        <div class="panel-body form-auth-style" id="app">

        	<div class="row">
        		<?php if($record): ?>
				<?php echo e(Form::model($record, 
				array('url' => URL_AUCTIONS_EDIT.'/'.$record->slug, 
				'method'=>'PATCH', 'name'=>'formValidate','files'=>'true','novalidate'=>''))); ?>

				<?php else: ?>
				<?php echo Form::open(array('url' => URL_AUCTIONS_ADD, 'method' => 'POST','name'=>'formValidate','files'=>'true','novalidate'=>'')); ?>

				<?php endif; ?>

				<?php echo $__env->make('admin.auctions.form_elements', array('record' => $record), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<?php echo Form::close(); ?>

			</div>

    	</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<script>
var file = document.getElementById('image_input');

file.onchange = function(e){
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch(ext)
    {
        case 'jpg':
        case 'jpeg':
        case 'png':

            break;
        default:
               alertify.error("<?php echo e(getPhrase('file_type_not_allowed')); ?>");
            this.value='';
    }
};
</script>


<?php echo $__env->make('admin.auctions.scripts.auction-js-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<script src="<?php echo e(PREFIX1); ?>ckeditor/ckeditor.js"></script>
<script src="<?php echo e(PREFIX1); ?>ckeditor/adapters/jquery.js"></script>


<script>

    CKEDITOR.replace( 'description' );
    $("form").submit( function(e) {
        var messageLength = CKEDITOR.instances['description'].getData().replace(/<[^>]*>/gi, '').length;
        if( !messageLength ) {
            alert( 'Please enter description' );
            e.preventDefault();
        }
    });

    
</script>

<script>
    CKEDITOR.replace( 'shipping');
    CKEDITOR.replace( 'terms');  
</script>

<script src="<?php echo e(JS); ?>moment.min.js"></script>
<script src="<?php echo e(JS); ?>bootstrap-datetimepicker.min.js"></script>
<script>

    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });



    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>

<script src="<?php echo e(JS); ?>bootstrap-datepicker.min.js"></script>
<script>
     $(function () {
        $('#datepicker').datepicker({
            autoclose:true
        });
    });
</script>


<script src="<?php echo e(PREFIX1); ?>adminlte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script>
     $(function () {
        $('#timepicker1').datetimepicker({
            format: 'HH:mm:ss'
        });

        $('#timepicker2').datetimepicker({
            format: 'HH:mm:ss'
        });

    });
</script>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>