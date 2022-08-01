				
			<div class="col-xs-6"> 	


                <div class="form-group">

                    {!! Form::label('country', getPhrase('country'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>



                    <?php
                        $val=old('country_id');
                        if ($record)
                         $val = $record->country_id;


                        $selected = null;
                        if($record)
                        $selected = $record->country_id;
                                 
                        ?>

                    

                    {{Form::select('country_id', $countries, $selected, ['placeholder' => getPhrase('select_country'),'class'=>'form-control select2',

                            'ng-model'=>'country_id',

                            'required'=> 'true',

                            'ng-init'=>'country_id="'.$val.'"', 

                            'ng-class'=>'{"has-error": formValidate.country_id.$touched && formValidate.country_id.$invalid}'

                         ])}}


                    
                        <div class="validation-error" ng-messages="formValidate.country_id.$error" >

                            {!! getValidationMessage()!!}

                        </div>

                </div>

				<div class="form-group">
                    {!! Form::label('state', getPhrase('state'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    {{ Form::text('state', old('state'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'State',

                    'ng-model' => 'state', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

					'ng-minlength' => '2',

					'ng-maxlength' => '100',

					'ng-class'=>'{"has-error": formValidate.state.$touched && formValidate.state.$invalid}',

                    )) }}

                    <div class="validation-error" ng-messages="formValidate.state.$error" >

	    					{!! getValidationMessage()!!}

	    					{!! getValidationMessage('minlength')!!}

	    					{!! getValidationMessage('maxlength')!!}

	    					{!! getValidationMessage('pattern')!!}

					</div>

                </div>


               <div class="form-group pull-right">

					<button class="btn btn-success" ng-disabled='!formValidate.$valid'>{{ getPhrase('save') }}</button>

				</div>

			</div>



                