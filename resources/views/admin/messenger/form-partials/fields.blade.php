<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">

            <div class="col-xs-12 form-group">
                {!! Form::label('receiver', 'Recipient', ['class' => 'control-label']) !!}

                <span class="text-red">*</span>

                @if(isset($users))

                    {{-- {!! Form::select('receiver', $users, old('receiver'), ['class' => 'form-control select2']) !!} --}}

                     {{Form::select('receiver', $users,  old('receiver') , ['placeholder' => getPhrase('select_user'),'class'=>'form-control select2',

                        'ng-model'=>'receiver',

                        'required'=> 'true',

                        'ng-class'=>'{"has-error": formValidate.receiver.$touched && formValidate.receiver.$invalid}'

                    ])}}

                    <div class="validation-error" ng-messages="formValidate.receiver.$error" >

                        {!! getValidationMessage()!!}

                    </div>


                @elseif(isset($user))
                    {!! Form::text('receiver', old('receiver', $user ? $user : ''), ['class' => 'form-control', 'disabled']) !!}
                @endif

            </div>

            <div class="col-xs-12 form-group">
                {!! Form::label('subject', 'Subject', ['class' => 'control-label']) !!}

                <span class="text-red">*</span>

                @if(isset($users))

                    {{-- {!! Form::text('subject', old('subject', isset($topic) ? $topic->subject : ''), ['class' => 'form-control']) !!} --}}


                    {{ Form::text('subject', old('subject'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Subject',

                    'ng-model' => 'subject', 

                    'required' => 'true',

                    'ng-minlength' => '2',

                    'ng-maxlength' => '200',

                    'ng-class'=>'{"has-error": formValidate.subject.$touched && formValidate.subject.$invalid}',

                    )) }}

                    <div class="validation-error" ng-messages="formValidate.subject.$error" >

                            {!! getValidationMessage()!!}

                            {!! getValidationMessage('minlength')!!}

                            {!! getValidationMessage('maxlength')!!}

                    </div>

                @else
                    {!! Form::text('subject', old('subject', isset($topic) ? $topic->subject : ''), ['class' => 'form-control', 'disabled']) !!}
                @endif
                {{--
                @if ($errors->has('subject'))
                    <span class="help-block">
                        <strong>{{ $errors->first('subject') }}</strong>
                    </span>
                @endif
                --}}
            </div>

            <div class="col-xs-12 form-group">

                {!! Form::label('content', 'Message', ['class' => 'control-label']) !!}
                <span class="text-red">*</span>


                {{-- {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}

                 {{ Form::textarea('content', old('content'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Message',

                    'ng-model' => 'content',

                    'required'=>'true', 

                    'ng-class'=>'{"has-error": formValidate.content.$touched && formValidate.content.$invalid}',

                    )) }}

                 <div class="validation-error" ng-messages="formValidate.content.$error" >
 
                        {!! getValidationMessage()!!}

                 </div>
                        

                {{--
                <p class="help-block"></p>
                @if($errors->has('content'))
                    <p class="help-block">
                        {{ $errors->first('content') }}
                    </p>
                @endif
                --}}
            </div>

            <div class="col-xs-12">
            <div class="form-group pull-right">

                    <button class="btn btn-success" ng-disabled='!formValidate.$valid'>{{ getPhrase('send') }}</button>

            </div>
            </div>



        </div>
    </div>
</div>
@section('javascript')
    @parent

@stop