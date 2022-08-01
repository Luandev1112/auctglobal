@extends($layout)

@section('content')
	<h3 class="page-title"> {{ getPhrase('change_password') }}</h3>

	
		@include('errors.errors')

		{{ Form::model($record, 
						array('url' => ['users/change-password', $record->slug], 
						'method'=>'patch', 'novalidate'=>'', 'name'=>"changePassword")) }}

		<div class="panel panel-default">
			<div class="panel-heading">
				{{$title}}
			</div>

			<div class="panel-body form-auth-style">

				<div class="row">

					<div class="col-xs-6">

						<div class="form-group">
							{!! Form::label('current_password', getPhrase('current_password'), ['class' => 'control-label']) !!}

							<span style="color:red;">*</span>

							{{ Form::password('old_password', $attributes = array('class'=>'form-control', 'placeholder' => getphrase('old_password'),

									'ng-model'=>'old_password',

									'required'=> 'true', 

									'ng-class'=>'{"has-error": changePassword.old_password.$touched && changePassword.old_password.$invalid}',

									'ng-minlength' => 5

							)) }}


							<div class="validation-error" ng-messages="changePassword.old_password.$error" >

								{!! getValidationMessage()!!}

								{!! getValidationMessage('password')!!}

							</div>

						</div>


						<div class="form-group">

						{!! Form::label('new_password', getPhrase('new_password'), ['class' => 'control-label']) !!}

						<span style="color:red;">*</span>

						{{ Form::password('password', $attributes = array('class'=>'form-control', 'placeholder' => getphrase('new_password'),

							'ng-model'=>'password',

							'required'=> 'true', 

							'ng-class'=>'{"has-error": changePassword.password.$touched && changePassword.password.$invalid}',

							'ng-minlength' => 5

						)) }}


						<div class="validation-error" ng-messages="changePassword.password.$error" >

							{!! getValidationMessage()!!}

							{!! getValidationMessage('password')!!}

						</div>

						</div>



						<div class="form-group">

							{!! Form::label('new_password_confirmation', getPhrase('password_confirm'), ['class' => 'control-label']) !!}

							<span style="color:red;">*</span>

							{{ Form::password('password_confirmation', $attributes = array('class'=>'form-control', 'placeholder' => getphrase('retype_password'),

								'ng-model'=>'password_confirmation',

								'required'=> 'true', 

							'ng-class'=>'{"has-error": changePassword.password_confirmation.$touched && changePassword.password_confirmation.$invalid}',

								'compare-to' =>"password",

								'ng-minlength' => 5

							)) }}


								
								<div class="validation-error" ng-messages="changePassword.password_confirmation.$error" >

								{!! getValidationMessage()!!}

								{!! getValidationMessage('password')!!}

								{!! getValidationMessage('confirmPassword')!!}


								</div>

						</div>


						<div class="form-group pull-right">

							<button class="btn btn-success"

							ng-disabled='!changePassword.$valid' >{{ getPhrase('change') }}</button>

						</div>

				</div>

				

				
			</div>

		</div>


		{!! Form::close() !!}
	
@stop


@section('footer_scripts')
	@include('common.validations');
@stop
