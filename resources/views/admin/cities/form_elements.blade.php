				
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

                            'ng-change'=> 'getStates(country_id)', 

                            'ng-class'=>'{"has-error": formValidate.country_id.$touched && formValidate.country_id.$invalid}'

                         ])}}


                    
                    <div class="validation-error" ng-messages="formValidate.country_id.$error" >

                            {!! getValidationMessage()!!}


                        </div>

                </div>




                     
                <div class="form-group">

                        <label for="name"> {{ getPhrase('state') }} <span class="text-red">*</span></label>


                        <?php 

                        
                        $val=old('state_id');
                        if ($record)
                          $val = $record->state_id;

                        ?>

                        <select ng-init="state_id={id:{{$val}} }" name="state_id" ng-model="state_id" class="form-control select2" ng-options="item.id as item.state for item in states track by item.id" required="true">

                          <option value="">Select</option>  

                        </select>




                          <div class="validation-error" ng-messages="formValidate.state_id.$error">

                                {!! getValidationMessage()!!}


                            </div>

                 </div>


                 <div class="form-group">

                    {!! Form::label('city', getPhrase('city'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php 
   
                     $val=old('city');
                     if ($record)
                      $val = $record->city;

                    ?>


                    {{ Form::text('city', old('city'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'City',

                    'ng-model' => 'city', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

                    'ng-init'=>'city="'.$val.'"',

                    'ng-minlength' => '2',

                    'ng-maxlength' => '100',

                    'ng-class'=>'{"has-error": formValidate.city.$touched && formValidate.city.$invalid}',



                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.city.$error" >

                            {!! getValidationMessage()!!}

                            {!! getValidationMessage('minlength')!!}

                            {!! getValidationMessage('maxlength')!!}

                            {!! getValidationMessage('pattern')!!}

                    </div>

                </div>


                  <div class="form-group">

                    {!! Form::label('status', getPhrase('status'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php
                        $val=old('status');
                        if ($record)
                         $val = $record->status;

                        $selected = null;
                        if($record)
                        $selected = $record->status;      
                    ?>

                    

                    {{Form::select('status', activeinactive(), $selected, ['placeholder' => getPhrase('select'),'class'=>'form-control select2',

                            'ng-model'=>'status',

                            'required'=> 'true',

                            'ng-init'=>'status="'.$val.'"', 

                            'ng-class'=>'{"has-error": formValidate.status.$touched && formValidate.status.$invalid}'

                         ])}}


                    
                        <div class="validation-error" ng-messages="formValidate.status.$error" >

                            {!! getValidationMessage()!!}

                        </div>

                </div>
                


               <div class="form-group pull-right">

					<button class="btn btn-success" ng-disabled='!formValidate.$valid'>{{ getPhrase('save') }}</button>

				</div>

			</div>



                