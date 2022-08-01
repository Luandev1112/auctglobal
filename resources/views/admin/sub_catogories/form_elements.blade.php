				
			<div class="col-xs-6"> 	

                <div class="form-group">

                    {!! Form::label('category', getPhrase('category'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php
                        $val=old('category_id');
                        if ($record)
                         $val = $record->category_id;

                        $selected = null;
                        if($record)
                        $selected = $record->category_id;      
                    ?>

                    

                    {{Form::select('category_id', $categories, $selected, ['placeholder' => getPhrase('select_category'),'class'=>'form-control select2',

                            'ng-model'=>'category_id',

                            'required'=> 'true',

                            'ng-init'=>'category_id="'.$val.'"', 

                            'ng-class'=>'{"has-error": formValidate.category_id.$touched && formValidate.category_id.$invalid}'

                         ])}}


                    
                        <div class="validation-error" ng-messages="formValidate.category_id.$error" >

                            {!! getValidationMessage()!!}

                        </div>

                </div>


				<div class="form-group">
                    {!! Form::label('sub_category', getPhrase('sub_category'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    {{ Form::text('sub_category', old('category'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Sub Category',

                    'ng-model' => 'sub_category', 

                    'required' => 'true',

					'ng-minlength' => '2',

					'ng-maxlength' => '100',

					'ng-class'=>'{"has-error": formValidate.sub_category.$touched && formValidate.sub_category.$invalid}',



                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.sub_category.$error" >

	    					{!! getValidationMessage()!!}

	    					{!! getValidationMessage('minlength')!!}

	    					{!! getValidationMessage('maxlength')!!}


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


               <div class="form-group">

					<button class="btn btn-primary" ng-disabled='!formValidate.$valid'>{{ getPhrase('save') }}</button>

				</div>

			</div>



                