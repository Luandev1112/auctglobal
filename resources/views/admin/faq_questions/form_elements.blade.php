				
			<div class="col-xs-6">


			<div class="form-group">

                    {!! Form::label('faq_category', getPhrase('faq_category'), ['class' => 'control-label']) !!}

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
                    {!! Form::label('question', getPhrase('question'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    {{ Form::textarea('question_text', old('question_text'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Question',

                    'rows'=>'3',

                    'ng-model' => 'question_text', 

                    'required' => 'true',

					'ng-class'=>'{"has-error": formValidate.question_text.$touched && formValidate.question_text.$invalid}',

                    )) }}

                    
                    <div class="validation-error" ng-messages="formValidate.question_text.$error" >

	    					{!! getValidationMessage()!!}

					</div>

                </div>



                <div class="form-group">
                    {!! Form::label('answer', getPhrase('answer'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    {{ Form::textarea('answer_text', old('answer_text'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Question',

                    'ng-model' => 'answer_text', 

                    'required' => 'true',

					'ng-class'=>'{"has-error": formValidate.answer_text.$touched && formValidate.answer_text.$invalid}',

                    )) }}

                    
                    <div class="validation-error" ng-messages="formValidate.answer_text.$error" >

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



                