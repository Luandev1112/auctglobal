 				
<?php 
		$parent_locations = App\Location::where('parent_id','=',0)
										->get()
										->pluck('title','id')
										->toArray();
		$parent_locations[0]  = 'State';
?>
 <div class="row">

 					 <fieldset class="form-group col-md-12">
						{{ Form::label('parent_id', 'Is State') }}

						<span class="text-red">*</span>
						
						{{ Form::select('parent_id', $parent_locations, null, ['class'=>'form-control select2','placeholder'=>'select',
						    
						    'ng-model'=>'parent_id', 

							'required'=> 'true', 

							'ng-class'=>'{"has-error": formLocations.parent_id.$touched && formLocations.parent_id.$invalid}',

							 ])}}

						<div class="validation-error" ng-messages="formLocations.parent_id.$error" >

	    					{!! getValidationMessage()!!}

	    				</div>
					</fieldset>

				 

				    <fieldset class="form-group col-md-12">
						{{ Form::label('title', getPhrase('location')) }}
						<span class="text-red">*</span>
						{{ Form::text('title', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Location',
							'ng-model'=>'title', 
							'ng-pattern' => getRegexPattern('name'),
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formLocations.title.$touched && formLocations.title.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '40',
						)) }}
						<div class="validation-error" ng-messages="formLocations.title.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>


					</div>
					 
  
				 
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formLocations.$valid'>{{ $button_name }}</button>
						</div>
		 