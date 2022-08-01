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
                    $today = date('Y-m-d');
                    ?>

                    <div class="table-responsive">

                    <div class="panel-body">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th>#</th>
                       
                        <th> {{getPhrase('image')}} </th>
                        <th> {{getPhrase('title')}} </th>

                        <th> {{getPhrase('reserve_price')}} </th>
                        <th> {{getPhrase('buy_now_price')}} </th>


                        <th> {{getPhrase('datetime')}} </th>

                        <th>&nbsp;</th>

                    </tr>
                </thead>
                @if (count($auctions) > 0)
                <tbody>
                    @if (count($auctions) > 0)
                    <?php $i=0;
                   
                     ?>
                        @foreach ($auctions as $auction)
                        <?php $i++;?>
                            <tr>
                            
                                <td>{{$i}}</td>
                               
                                <td> <img src="{{getAuctionImage($auction->image)}}" alt="{{$auction->title}}" width="50" /> </td>

                                <td> <span data-toggle="tooltip" title="{{$auction->title}}" data-placement="bottom">{!! str_limit($auction->title,20) !!} </span> </td>

                                
                                <td> {{$currency}}{{$auction->reserve_price}}</td>

                                <td> {{$currency}}{{$auction->buy_now_price}} </td>

                                <td> @if ($auction->created_at) <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->created_at));?> @endif</td>

                                <td>
                                    <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" class="btn btn-primary btn-sm login-bttn" title="View Auction Details"> {{getPhrase('view')}} </a>
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