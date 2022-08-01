@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')


@section('custom_div')
    <div ng-controller="prepareReportsData">
@stop


@section('header_scripts')
<link href="{{CSS}}bootstrap-datetimepicker.min.css" rel="stylesheet">
@endsection


@section('content')
    <h3 class="page-title"> {{$title}} </h3>
    
    <div class="panel-body">

    <div class="row">

             <div class="col-xs-6">  


                <div class="col-xs-6">  

                <div class="form-group">
                    {!! Form::label('start_date', getPhrase('start_date'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php 

                        $val=old('start_date');
                       
                    ?>



                    {{ Form::text('start_date',null, $attributes = 

                    array('class' => 'form-control datepicker', 

                     
                    'placeholder'=>'Start Date',

                    'ng-model' => 'start_date', 

                    'ng-init'=>'start_date="'.$val.'"',

                    
                    'ng-change'=> 'getSellerAuctions(start_date,end_date,user_id)',
                    )) }}


                </div>

                </div>



                <div class="col-xs-6">  

                <div class="form-group">
                    {!! Form::label('end_date', getPhrase('end_date'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php 

                        $val=old('end_date');
                       
                    ?>

                    {{ Form::text('end_date', null, $attributes = 

                    array('class' => 'form-control datepicker', 

                  
                    'placeholder'=>'End Date',

                    'ng-model' => 'end_date', 

                    'ng-init'=>'end_date="'.$val.'"',

                    'ng-change'=> 'getSellerAuctions(start_date,end_date,user_id)',

                    )) }}

                </div>

                </div>

        </div>

        <div class="col-xs-3">  

                <div class="form-group">
                    {!! Form::label('seller', getPhrase('seller'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php 

                        $selected = null;

                        $val=old('user_id');
                       
                        ?>

                    {{Form::select('user_id', $sellers, $selected, ['placeholder' => getPhrase('select_seller'),'class'=>'form-control select2', 

                        'ng-model'=>'user_id',

                        'required'=> 'true', 

                        'ng-init'=>'user_id="'.$val.'"',

                        'ng-change'=> 'getSellerAuctions(start_date,end_date,user_id)',
                     ])}}

                </div>


            </div>


        </div>

    </div>


   
    

    <div class="panel panel-default">
        <div class="panel-heading">
            {{ getPhrase('list')}}
        </div>

        <div class="panel-body table-responsive">
           
            <table class="table table-striped table-bordered all_auctions > 0 ? 'datatable' : ''" cellspacing="0" width="100%">

                <thead>
                    <tr>
                        <th></th>
                        <th> {{getPhrase('image')}} </th>
                        <th> {{getPhrase('title')}} </th>
                        <th> {{getPhrase('category')}} </th>
                        <th> {{getPhrase('start_date')}}</th>
                        <th> {{getPhrase('end_date')}}</th>
                        <th> {{getPhrase('reserve_price')}}</th>
                        <th> {{getPhrase('auction_status')}}</th>
                        <th> {{getPhrase('admin_status')}}</th>
                    </tr>
                </thead>

                
                 <tbody>

                        <tr ng-repeat="auction in auctions">
                          
                            <td></td>
                           
                            <td field-key='image'> 

                            <img ng-if="auction.image!==null && auction.image!==''" class="thumb" src="{{AUCTION_IMAGES_THUMBPATH_URL}}@{{auction.image}}" height="40"> 


                            <img ng-if="auction.image==null || auction.image==''" class="thumb" src="{{AUCTION_THUMB_IMAGE_DEFAULT_URL}}" height="40">

                            </td>

                            <td field-key='title'>@{{auction.title}}</td>

                            <td field-key='start_date'>@{{auction.category}}</td>

                            <td field-key='start_date'>@{{auction.start_date}}</td>

                            <td field-key='end_date'>@{{auction.end_date}}</td>

                            <td field-key='reserve_price'>@{{auction.reserve_price}}</td>

                            <td field-key='auction_status'>@{{auction.auction_status}}</td>
                          
                            <td field-key='admin_status'>@{{auction.admin_status}}</td>

                            <td>
                            
                                <a href="{{URL_AUCTIONS_VIEW}}@{{auction.slug}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                               
                            </td>

                        </tr>
                       
                </tbody>
               
                
            </table>
        </div>
    </div>
@stop


@section('footer_scripts')
  
  @include('common.validations');
  @include('reports.scripts.reports-js-scripts')
  @include('common.alertify')




<script src="{{JS}}moment.min.js"></script>
<script src="{{JS}}bootstrap-datepicker.min.js"></script>

<script>
    var selected_js_format = '<?php echo getSetting('date_format_js','site_settings');?>';
     $(function () {
        $('.datepicker').datepicker({
            format: selected_js_format,
        });
    });

</script>

@stop

@section('custom_div_end')
</div>
@stop