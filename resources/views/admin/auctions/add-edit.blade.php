@extends($layout)


@section('header_scripts')
<link href="{{CSS}}bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="{{CSS}}checkbox.css" rel="stylesheet" type="text/css">
@endsection


@section('custom_div')

@if (isset($record) && count($record))
    <div ng-controller="prepareAuctionData" ng-init="initFunctions()">
@else
     <div ng-controller="prepareAuctionData">
@endif

@stop

@section('content')
    <h3 class="page-title">{{getPhrase('auctions')}}</h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            {{ isset($title) ? $title : ''}}
        </div>

        {{--@include('errors.errors')--}}

        <div class="panel-body form-auth-style" id="app">

        	<div class="row">
        		@if ($record)
				{{ Form::model($record, 
				array('url' => URL_AUCTIONS_EDIT.'/'.$record->slug, 
				'method'=>'PATCH', 'name'=>'formValidate','files'=>'true','novalidate'=>'')) }}
				@else
				{!! Form::open(array('url' => URL_AUCTIONS_ADD, 'method' => 'POST','name'=>'formValidate','files'=>'true','novalidate'=>'')) !!}
				@endif

				@include('admin.auctions.form_elements', array('record' => $record))

				{!! Form::close() !!}
			</div>

    	</div>

@endsection


@section('footer_scripts')
@include('common.validations')

@include('common.alertify')



<script>
var file = document.getElementById('image_input');

file.onchange = function(e){
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch(ext)
    {
        case 'jpg':
        case 'jpeg':
        case 'png':

            break;
        default:
               alertify.error("{{getPhrase('file_type_not_allowed')}}");
            this.value='';
    }
};
</script>


@include('admin.auctions.scripts.auction-js-scripts')


<script src="{{PREFIX1}}ckeditor/ckeditor.js"></script>
<script src="{{PREFIX1}}ckeditor/adapters/jquery.js"></script>


<script>

    CKEDITOR.replace( 'description' );
    $("form").submit( function(e) {
        var messageLength = CKEDITOR.instances['description'].getData().replace(/<[^>]*>/gi, '').length;
        if( !messageLength ) {
            alert( 'Please enter description' );
            e.preventDefault();
        }
    });

    
</script>

<script>
    CKEDITOR.replace( 'shipping');
    CKEDITOR.replace( 'terms');  
</script>

<script src="{{JS}}moment.min.js"></script>
<script src="{{JS}}bootstrap-datetimepicker.min.js"></script>
<script>

    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });



    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>

<script src="{{JS}}bootstrap-datepicker.min.js"></script>
<script>
     $(function () {
        $('#datepicker').datepicker({
            autoclose:true
        });
    });
</script>


<script src="{{PREFIX1}}adminlte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script>
     $(function () {
        $('#timepicker1').datetimepicker({
            format: 'HH:mm:ss'
        });

        $('#timepicker2').datetimepicker({
            format: 'HH:mm:ss'
        });

    });
</script>
@stop    