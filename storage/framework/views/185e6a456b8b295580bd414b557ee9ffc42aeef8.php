<div class="col-md-6">
 <fieldset class="form-group">
	<?php echo e(Form::label($key, getPhrase($key))); ?>

	<textarea rows="5" name="<?php echo e($key); ?>[value]" class="form-control"><?php echo e($value->value); ?></textarea>
						  
	<input type="hidden" name="<?php echo e($key); ?>[type]" value = "<?php echo e($value->type); ?>" >
<input type="hidden" name="<?php echo e($key); ?>[tool_tip]" value = "<?php echo e($value->tool_tip); ?>" >
</fieldset>
</div>