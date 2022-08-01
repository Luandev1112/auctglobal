@extends($layout)
@section('header_scripts')

@stop
@section('content')

<h3 class="page-title">{{getPhrase('languages')}}</h3>

 <div class="panel panel-default">
        <div class="panel-heading">
            {{ isset($title) ? $title : ''}}
        </div>


        
        	<div class="row">

<div class="col-xs-12">

<?php $language_data = json_decode($record->phrases);?>	
        		<div class="panel panel-custom">
					
					<div class="panel-body packages">
					{!! Form::open(array('url' => URL_LANGUAGES_UPDATE_STRINGS.$record->slug, 'method' => 'PATCH', 
						'novalidate'=>'','name'=>'formSettings ', 'files'=>'true')) !!}
						<div class="table-responsive"> 
						<ul class="list-group">
						@if(count($language_data))
						@foreach($language_data as $key=>$value)
						 
					 <div class="col-md-6">
						<fieldset class="form-group">
						   {{ Form::label($key, $key) }}
						  
						   <input type="text" class="form-control" name="{{$key}}" 
					 		required="true" value = "{{$value}}" >
					 		 

							</fieldset>
							</div>

						  @endforeach

						  @else
							  <li class="list-group-item">{{ getPhrase('no_settings_available')}}</li>
						  @endif
						</ul>

						</div>

						@if(count($language_data))
						<div class="buttons pull-right">
							<button class="btn btn-success" ng-disabled='!formTopics.$valid'
							>{{ getPhrase('update') }}</button>
						</div>
						@endif
							{!! Form::close() !!}
					</div>
				</div>
			</div>

        	</div>

@endsection
 

@section('footer_scripts')
  


@stop
