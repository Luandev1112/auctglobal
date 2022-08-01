<?php $tool_tip = '';
				if(isset($value->tool_tip))
					$tool_tip = $value->tool_tip;
$checked = '';
if($value->value)
$checked = 'checked';
				?>
<div class="col-md-6">
						   <fieldset class="form-group si setting-checkbox">
						   

						  <label data-toggle="tooltip" data-placement="top" title="<?php echo e($tool_tip); ?>">
						  	<?php echo e(getPhrase($key)); ?> </label>

						   <input 
					 		type="checkbox" 
							data-toggle="toggle" 
							data-onstyle="success" 
							data-offstyle="default"

					 		name="<?php echo e($key); ?>[value]" 
					 		required="true" 
					 		value = "1" 
							
							title ="<?php echo e($tool_tip); ?>"
							data-placement="bottom"
							<?php echo e($checked); ?>

							class="form-control"
					 		>

					 		

					 		<input
					 		type="hidden"
					 		name="<?php echo e($key); ?>[type]"
							value = "<?php echo e($value->type); ?>" >
				
							<input
					 		type="hidden"
					 		name="<?php echo e($key); ?>[tool_tip]"
							value = "<?php echo e($tool_tip); ?>" >

							</fieldset>
							</div>