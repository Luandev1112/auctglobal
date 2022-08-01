				
			<div class="col-xs-6"> 	


                <div class="form-group">

                    {!! Form::label('user', getPhrase('user'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php
                        $val=old('user_id');
                        if ($record)
                         $val = $record->user_id;

                        $selected = null;
                        if($record)
                        $selected = $record->user_id;      
                    ?>

                    

                    {{Form::select('user_id', $users, $selected, ['placeholder' => getPhrase('select_user'),'class'=>'form-control select2',

                            'ng-model'=>'user_id',

                            'required'=> 'true',

                            'ng-init'=>'user_id="'.$val.'"', 

                            'ng-class'=>'{"has-error": formValidate.user_id.$touched && formValidate.user_id.$invalid}'

                         ])}}


                    
                        <div class="validation-error" ng-messages="formValidate.user_id.$error" >

                            {!! getValidationMessage()!!}

                        </div>

                </div>


                <div class="form-group">

                    {!! Form::label('testimony', getPhrase('testimony'), ['class' => 'control-label']) !!}

                     <span class="text-red">*</span>
                   
                    {{ Form::textarea('testmony', old('testmony'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Testimony',

                    'ng-model' => 'testmony',

                    'required' => 'true',

                    'ng-class'=>'{"has-error": formValidate.testmony.$touched && formValidate.testmony.$invalid}',

                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.testmony.$error" >

	    				{!! getValidationMessage()!!}

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



                