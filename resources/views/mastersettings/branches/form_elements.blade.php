 				

 			<div class="row">

 					<div class="col-md-6">


 						<fieldset class="form-group">


						{{ Form::label('bank', getphrase('bank')) }}

						<span class="text-red">*</span>

						<?php 

						$selected = null;
						/*if ($record)
							$selected = $record->bank_id;*/

						$val=old('bank_id');
			            if ($record)
			              $val = $record->bank_id;


						?>

						{{Form::select('bank_id', $banks, $selected, ['placeholder' => getPhrase('select_bank'),'class'=>'form-control', 

							'ng-model'=>'bank_id',

							'required'=> 'true', 

							'ng-init'=>'bank_id="'.$val.'"',

							'ng-class'=>'{"has-error": formBranches.bank_id.$touched && formBranches.bank_id.$invalid}'

						 ])}}

						  <div class="validation-error" ng-messages="formBranches.bank_id.$error" >

	    					{!! getValidationMessage()!!}

						</div>

					</fieldset>



					<fieldset class="form-group">



						{{ Form::label('state', getphrase('state')) }}

						<span class="text-red">*</span>

						<?php 

						$selected = null;

						$val=old('state');
			            if ($record)
			              $val = $record->state;

						?>

						{{Form::select('state', $state_options, $selected, ['placeholder' => getPhrase('select_state'),'class'=>'form-control', 

							'ng-model'=>'state',

							'required'=> 'true', 

							'ng-init'=>'state="'.$val.'"',

							'ng-change'=> 'getCities(state)',



							'ng-class'=>'{"has-error": formBranches.state.$touched && formBranches.state.$invalid}'

						 ])}}

						  <div class="validation-error" ng-messages="formBranches.state.$error" >

	    					{!! getValidationMessage()!!}

						</div>

					</fieldset>



					 <fieldset class="form-group">  

				        <label for="name"> {{ getPhrase('city') }} <span class="text-red">*</span></label>


				        <?php 

						
						$val=old('city');
			            if ($record)
			              $val = $record->city;

						?>

				        <select ng-init="city={id:{{$val}} }" name="city" ng-model="city" class="form-control" ng-options="item.id as item.title for item in cities track by item.id" required="true">

				          <option value="">Select</option>  

				        </select>




				          <div class="validation-error" ng-messages="formBranches.city.$error">

				                {!! getValidationMessage()!!}


				            </div>

				   </fieldset>



				    <fieldset class="form-group">
						{{ Form::label('branch_name', getphrase('branch_name')) }}
						<span class="text-red">*</span>

						<?php 
						$val=old('branch_name');
			            if ($record)
			              $val = $record->branch_name;
			          ?>

						{{ Form::text('branch_name', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Branch Name',
							'ng-model'=>'branch_name', 
							
							'required'=> 'true', 
							'ng-init'=>'branch_name="'.$val.'"',
							'ng-class'=>'{"has-error": formBranches.branch_name.$touched && formBranches.branch_name.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '100',
						)) }}
						<div class="validation-error" ng-messages="formBranches.branch_name.$error" >
	    					{!! getValidationMessage()!!}
	    					
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>



					 <fieldset class="form-group">
						{{ Form::label('branch_name', getphrase('branch_code')) }}
						<span class="text-red">*</span>

						<?php 
						$val=old('branch_code');
			            if ($record)
			              $val = $record->branch_code;
			          	?>

						{{ Form::text('branch_code', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Branch Code',
							'ng-model'=>'branch_code', 
							'ng-pattern' => getRegexPattern('name'),
							'required'=> 'true',
							'ng-init'=>'branch_code="'.$val.'"', 
							'ng-class'=>'{"has-error": formBranches.branch_code.$touched && formBranches.branch_code.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '100',
						)) }}
						<div class="validation-error" ng-messages="formBranches.branch_code.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>



					

				</div>



				<div class="col-md-6">


					 <fieldset class="form-group">
						{{ Form::label('ifsc_code', getphrase('ifsc_code')) }}
						<span class="text-red">*</span>


						<?php 
						$val=old('ifsc_code');
			            if ($record)
			              $val = $record->ifsc_code;
			          	?>


						{{ Form::text('ifsc_code', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'IFSC Code',
							'ng-model'=>'ifsc_code', 
							
							'required'=> 'true',
							'ng-init'=>'ifsc_code="'.$val.'"',  
							'ng-class'=>'{"has-error": formBranches.ifsc_code.$touched && formBranches.ifsc_code.$invalid}',
							
							'ng-maxlength' => '40',
						)) }}
						<div class="validation-error" ng-messages="formBranches.ifsc_code.$error" >
	    					{!! getValidationMessage()!!}
	    					
	    					
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>
					


					 <fieldset class="form-group">
						{{ Form::label('micr_code', getphrase('micr_code')) }}

						<?php 
						$val=old('micr_code');
			            if ($record)
			              $val = $record->micr_code;
			          	?>
						
						{{ Form::text('micr_code', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'IFSC Code',
							'ng-model'=>'micr_code', 
							'ng-init'=>'micr_code="'.$val.'"',
							'ng-maxlength' => '40',
						)) }}
						<div class="validation-error" ng-messages="formBranches.micr_code.$error" >
	    					
	    				
	    					
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>


					 <fieldset class="form-group">
						{{ Form::label('contact_no', getphrase('contact_number')) }}
						<span class="text-red">*</span>

						<?php 
						$val=old('contact_no');
			            if ($record)
			              $val = $record->contact_no;
			          	?>

						{{ Form::text('contact_no', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Contact Number',
							'ng-model'=>'contact_no', 
							
							'required'=> 'true', 
							'ng-init'=>'contact_no="'.$val.'"',
							'ng-class'=>'{"has-error": formBranches.contact_no.$touched && formBranches.contact_no.$invalid}',
							'ng-minlength' => '6',
							'ng-maxlength' => '100',
						)) }}
						<div class="validation-error" ng-messages="formBranches.contact_no.$error" >
	    					{!! getValidationMessage()!!}

	    				
	    					{!! getValidationMessage('maxlength')!!}

						</div>
					</fieldset>



					<fieldset class="form-group">

							{{ Form::label('address', getphrase('address')) }}

							<span class="text-red">*</span>

							<?php 
								$val=old('address');
					            if ($record)
					              $val = $record->address;
					          ?>

							{{ Form::textarea('address', $value = null , $attributes = array('class'=>'form-control','rows'=>3, 'cols'=>'15', 'placeholder' => getPhrase('please_enter_address'),

							'ng-model'=>'address',

							'required'=> 'true',
							'ng-init'=>'address="'.$val.'"', 
							'ng-class'=>'{"has-error": formBranches.address.$touched && formBranches.address.$invalid}',
							'ng-maxlength' => '300',

							)) }}


						<div class="validation-error" ng-messages="formBranches.address.$error" >

	    					{!! getValidationMessage()!!}

	    					{!! getValidationMessage('maxlength')!!}

						</div>

					</fieldset>





					
					 </div>


					 <div class="buttons text-right">
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formBranches.$valid'>{{ $button_name }}</button>
						</div>
  	

		  </div>