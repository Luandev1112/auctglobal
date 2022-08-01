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

                        <th> {{getPhrase('start')}} </th>
                        <th> {{getPhrase('end')}} </th>

                        <th> {{getPhrase('reserve_price')}} </th>
                        
                        <th> {{getPhrase('bid_no_of_times')}} </th>
                   
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

                                <td> <span data-toggle="tooltip" title="{{$auction->title}}" data-placement="bottom"> {!! str_limit($auction->title,10) !!} </span> </td>

                                <td>  <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->start_date));?> </td>

                                <td>  <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?> </td>

                                <td> {{$currency}}{{$auction->reserve_price}}</td>

                                <td> {{$auction->no_of_times}} </td>

                                <td>
                                    <div>    
                                        <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->auction_slug}}" class="btn btn-primary btn-sm login-bttn" title="View Auction Details"> {{getPhrase('view')}} </a>

                                        <a href="#" ng-click="getBidHistory({{$auction->id}})" data-toggle="modal" data-target="#bidHistoryModal" title="view total bid history" class="btn btn-info btn-sm login-bttn"> {{getPhrase('bid_history')}} </a>
                                        
                                        <?php $bid_pay=bidpayment($auction->id);

                                        ?>
                                        @if ($bid_pay) 
                                         <a href="{{URL_BID_PAYMENT_CONFIRM}}/{{$auction->slug}}" class="btn btn-warning btn-sm login-bttn" data-toggle="tooltip" title="Pay Auction Bid"> {{getPhrase('pay')}} </a>
                                        @endif

                                        @if ($auction->is_bidder_won=='Yes')
                                        <span class="btn btn-success btn-sm login-bttn" data-toggle="tooltip" title="You have won this Auction">{{getPhrase('won')}}</span>
                                        @endif
                                    </div>

                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11"> {{getPhrase('no_entries_in_table')}} </td>
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







    <!-- Bid history Modal -->
<div class="modal fade right" id="bidHistoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full-height modal-right" role="document">

                                          
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{getPhrase('bid_history')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
       

        <ul class="list-group z-depth-0">

            <li class="list-group-item justify-content-between">
                <span><b>{{getPhrase('bid_amount')}}</b></span>
                <span style="float:right;"><b>{{getPhrase('datetime')}}</b></span> 
            </li>

            <li ng-repeat="bid in bid_history" class="list-group-item justify-content-between">
                <span>{{$currency}}@{{bid.bid_amount}}</span>
                <span style="float:right;">@{{bid.created_at}} </span>
            </li>
        </ul>

    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary login-bttn" data-dismiss="modal">{{getPhrase('close')}}</button>
        
      </div>
    </div>
  </div>
</div>
<!--Bid history modal end-->


@endsection



@section('footer_scripts')

@include('common.validations')

@include('common.alertify')

@include('home.pages.auctions.auctions-js-script')



@stop