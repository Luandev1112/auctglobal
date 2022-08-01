@extends($layout)



@section('content')

@include('bidder.leftmenu')

<!--Dashboard section -->


    <div class="col-lg-9 col-md-8 col-sm-12 au-onboard">
            <a href="{{URL_HOME}}" class="au-middles justify-content-start"> {{getPhrase('home')}} &nbsp;<span> / {{$title}} </span></a>

            <div class="au-left-side form-auth-style">

                <div class="row">
                    <?php  
                    $currency = getSetting('currency_code','site_settings');
                    //dateformat
                    ?>

                    <div class="table-responsive">

                    <div class="panel-body">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th>#</th>
                       
                        <th> {{getPhrase('transaction_id')}} </th>
                        <th> {{getPhrase('paid_amount')}} </th>

                        <th> {{getPhrase('payment_for')}} </th>
                        <th> {{getPhrase('pay_through')}} </th>

                        <th> {{getPhrase('datetime')}} </th>

                        <th>&nbsp;</th>

                    </tr>
                </thead>
                @if (count($records) > 0)
                <tbody>
                    @if (count($records) > 0)
                    <?php $i=0;
                   
                     ?>
                        @foreach ($records as $record)
                        <?php $i++;?>
                            <tr>
                            
                                <td>{{$i}}</td>
                               
                               
                                <td> {{$record->transaction_id}} </td>

                                
                                <td> @if ($record->paid_amount) {{$currency}}{{$record->paid_amount}} @endif</td>

                                <td> {{get_text($record->payment_for)}} </td>

                                <td> {{ucfirst($record->payment_gateway)}} </td>

                                 <td> @if ($record->created_at) <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($record->created_at));?> @endif </td>

                                <td>
                                    <a href="{{URL_BIDDER_PAYMENT_DETAILS}}/{{$record->slug}}" class="btn btn-primary btn-sm login-bttn" title="View Payment Details"> {{getPhrase('view')}} </a>
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7"> {{getPhrase('no_entries_in_table')}} </td>
                        </tr>
                    @endif
                </tbody>
                @endif
            </table>
        </div>
    </div>

                </div> 


            </div> 
    </div> 




        </div>
      </div>   
    </section>
    <!--Dashboard section-->



@endsection



@section('footer_scripts')

@include('common.validations')

@include('common.alertify')

@include('home.pages.auctions.auctions-js-script')



@stop