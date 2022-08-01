 				

 			<div class="row">

				    <fieldset class="form-group col-md-12">
						{{ Form::label('question', getphrase('question')) }}
						<span class="text-red">*</span>

						{{ Form::textarea('question', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Question', 'rows'=>'5','cols'=>'3',
							'ng-model'=>'question', 
							
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formBanks.question.$touched && formBanks.question.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '100',
						)) }}

						<div class="validation-error" ng-messages="formBanks.question.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>


					<fieldset class="form-group col-md-12">
						{{ Form::label('answer', getphrase('answer')) }}
						<span class="text-red">*</span>

						{{ Form::textarea('answer', $value = null , $attributes = array('class'=>'form-control ckeditor', 'placeholder' => 'Answer',
							'ng-model'=>'answer', 
							
							{{--'required'=> 'true',--}}

							'ng-class'=>'{"has-error": formBanks.answer.$touched && formBanks.answer.$invalid}',
							
						)) }}

						<div class="validation-error" ng-messages="formBanks.answer.$error" >
	    					{!! getValidationMessage()!!}
	    					
						</div>
					</fieldset>




						<fieldset class="form-group col-md-12">


						{{ Form::label('status', getphrase('status')) }}

						<span class="text-red">*</span>

						<?php $selected=null;?>
						{{Form::select('status', activeinactive(), $selected , ['placeholder' => getPhrase('select'),'class'=>'form-control',

							'ng-model'=>'status',

							'required'=> 'true',

							'ng-class'=>'{"has-error": formBanks.status.$touched && formBanks.status.$invalid}'

						 ])}}

						  <div class="validation-error" ng-messages="formBanks.status.$error" >

	    					{!! getValidationMessage()!!}


						</div>

					</fieldset>



					</div>
					 
  
				 
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formBanks.$valid'>{{ $button_name }}</button>
						</div>
		 