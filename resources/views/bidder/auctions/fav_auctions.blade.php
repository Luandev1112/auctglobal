@extends($layout)



@section('content')

@include('bidder.leftmenu')

<!--Dashboard section -->
<?php $currency = getSetting('currency_code','site_settings');?>

    <div class="col-lg-9 col-md-8 col-sm-12 au-onboard">
            <a href="{{URL_HOME}}" class="au-middles justify-content-start"> {{getPhrase('home')}} &nbsp;<span> / {{$title}} </span></a>

            <div class="au-left-side form-auth-style">


              

                <div class="row">

                    <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th>#</th>
                       
                        <th> {{getPhrase('image')}} </th>
                        <th> {{getPhrase('title')}} </th>

                        <th> {{getPhrase('start_date')}} </th>
                        <th> {{getPhrase('end_date')}} </th>

                        <th> {{getPhrase('reserve_price')}} </th>
                        
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                @if (count($auctions) > 0)
                <tbody>
                    @if (count($auctions) > 0)
                    <?php $i=0; ?>
                        @foreach ($auctions as $auction)
                        <?php $i++;?>

                            <tr>
                              
                                <td>{{$i}}</td>
                               
                     
                                <td> <img src="{{getAuctionImage($auction->image)}}" alt="{{$auction->title}}" width="50" /> </td>

                                <td> <span data-toggle="tooltip" title="{{$auction->title}}" data-placement="bottom">{!! str_limit($auction->title,10) !!} </span></td>

                                <td>  <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->start_date));?> </td>

                                <td>  <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?> </td>

                                <td> {{$currency}}{{$auction->reserve_price}}</td>

                                <td>
                                    
                                    <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" class="btn btn-primary btn-sm login-bttn"> {{getPhrase('view')}} </a>

                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#removeFavModal" onclick="removeFavAuction({{$auction->fav_id}})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                   
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11"> {{ getPhrase('no_entries_in_table') }}</td>
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
    </section>



<!--REMOVE FAV AUCTION MODAL-->

<div id="removeFavModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    {!! Form::open(array('url' => URL_USERS_REMOVE_FAV_AUCTION, 'method' => 'POST', 'name'=>'favAuctionForm', 'novalidate'=>'', 'class'=>"loginform")) !!}

    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">{{getPhrase('remove_auction')}}</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body form-auth-style">

        <div class="form-group">

            <p>Are you sure to Remove Auction from your favourites ?</p>
            <input type="hidden" name="remove_fav_id" id="remove_fav_id">
        </div>


      <div class="text-center">

            <button type="button" class="btn btn-default login-bttn" data-dismiss="modal">{{getPhrase('no')}}</button>

            <button type="submit" class="btn btn-primary login-bttn">{{getPhrase('yes')}}</button>

        </div>

      </div>
      </div>

    </div>

    {!! Form::close() !!}

  </div>

</div>
<!--REMOVE FAV AUCTION MODAL-->



    <!--Dashboard section-->

@endsection



@section('footer_scripts')

@include('common.validations')

@include('common.alertify')

@include('home.pages.auctions.auctions-js-script')

<script>
function removeFavAuction(id) {
    $("#remove_fav_id").val(id);
}
</script>

@stop