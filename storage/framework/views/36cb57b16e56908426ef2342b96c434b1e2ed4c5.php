<?php $tool_tip = '';
				if(isset($value->tool_tip))
						$tool_tip = $value->tool_tip;
 ?>
<div class="col-md-6">
	<?php echo e(Form::label($key,  getPhrase($key))); ?>

	<select name="<?php echo e($key); ?>[value]" class="form-control" data-toggle="tooltip"
							title ="<?php echo e($tool_tip); ?>"
							data-placement="bottom">
	
	
		<?php $__currentLoopData = $value->extra->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val=>$text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php 
			$selected = '';
			if($value->value == $val)
				$selected = 'selected';
		 ?>
		<option value="<?php echo e($val); ?>" <?php echo e($selected); ?>><?php echo e($text); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</select>

	
	<input type="hidden" name="<?php echo e($key); ?>[type]" value = "<?php echo e($value->type); ?>" >
	<input type="hidden" name="<?php echo e($key); ?>[tool_tip]" value = "<?php echo e($value->tool_tip); ?>" >
						    
</div>