@extends($layout)


@section('content')
<?php 
$currency_code = getSetting('currency_code','site_settings');
?>



 <!--CATEGORY BODY SECTION-->
    
     <section class="au-categorys">

      <div class="container">


          <div class="row"> 


            <div class="col-lg-6">

              <div class="box-card">

              <div class="table-responsive">

                <table class="table table-striped">

                  <tr>
                      <th width="120">{{getPhrase('auction')}}</th>
                      <td>@if ($auction) {{$auction->title}} @endif</td>
                  </tr>

                   <tr>
                      <th> {{getPhrase('image')}} </th>
                      <td> @if ($auction) <img src="{{getAuctionImage($auction->image)}}" alt="{{$auction->title}}" width="50"> @endif </td>
                  </tr>


                  <tr>
                      <th> {{getPhrase('category')}}  </th>
                      <td> @if ($auction->category) {{ $auction->category->category }} @endif </td>
                  </tr>


                  <tr>
                      <th> {{getPhrase('sub_category')}}  </th>
                      <td> @if ($auction->sub_category) {{ $auction->sub_category->sub_category }} @endif </td>
                  </tr>

                  <tr>
                      <th>{{getPhrase('paid_through')}}</th>
                      <td>{{get_text($record->payment_gateway)}}</td>
                  </tr>

                  <tr>
                      <th>{{getPhrase('payment_for')}}</th>
                      <td>{{get_text($record->payment_for)}}</td>
                  </tr>


                  <tr>
                      <th> {{getPhrase('paid_amount')}} </th>
                      <td> @if ($record->paid_amount) {{$currency_code}}{{$record->paid_amount}} @endif</td>
                  </tr>


                  <tr>
                      <th>{{getPhrase('payment_status')}}</th>
                      <td>{{get_text($record->payment_status)}}</td>
                  </tr>


                  <tr>
                      <th>{{getPhrase('transaction_id')}}</th>
                      <td>{{$record->transaction_id}}</td>
                  </tr>

                </table>

              </div>
            </div>
             </div>



            <div class="col-lg-6">

             
                <div class="row">
                  <div class="col-sm-12">

                 <?php
                 $billing_country=null; 
                 $bcountry=$record->getBillingCountry();
                 if (count($bcountry))
                  $billing_country = $bcountry->title;

                 $billing_state=null; 
                 $bstate=$record->getBillingState();
                 if (count($bstate))
                  $billing_state = $bstate->state;


                 $billing_city=null; 
                 $bcity=$record->getBillingCity();
                 if (count($bcity))
                  $billing_city = $bcity->city;


                 $shipping_country=null; 
                 $scountry=$record->getShippingCountry();
                 if (count($scountry))
                  $shipping_country = $scountry->title;


                 $shipping_state=null; 
                 $sstate=$record->getShippingState();
                 if (count($sstate))
                  $shipping_state = $sstate->state;


                 $shipping_city=null; 
                 $scity=$record->getShippingCity();
                 if (count($scity))
                  $shipping_city = $scity->city;

                 ?>

                 <div class="card payment-page">
                  
                  <div class="card-body">
                     <h5 class="box-head">{{getPhrase('billing_details')}}</h5>

                    <p class="card-text">{{$record->billing_name}}</p>
                    <p class="card-text">{{$record->billing_email}}</p>
                    <p class="card-text">{{$record->billing_phone}}</p>
                    <p class="card-text">{{$record->billing_address}}</p>
                    <p class="card-text"> {{$billing_city}} {{$billing_state}} {{$billing_country}}</p>
                    
                  </div>
                </div>

              

                 <div class="card payment-page">
                  
                  <div class="card-body">
                    <h5 class="box-head">{{getPhrase('shipping_details')}}</h5>

                    <p class="card-text">{{$record->shipping_name}}</p>
                    <p class="card-text">{{$record->shipping_email}}</p>
                    <p class="card-text">{{$record->shipping_phone}}</p>
                    <p class="card-text">{{$record->shipping_address}}</p>
                    <p class="card-text"> {{$shipping_city}} {{$shipping_state}} {{$shipping_country}}</p>
                    
                  </div>
                </div>


            </div>

          </div>

        </div>

        </div>

      </div>

    <!--SAME CATEGORY AUCTIONS SECTION-->
    @include('home.pages.auctions.category-auctions')
    
    <!--SAME CATEGORY AUCTIONS SECTION-->


    <!--SELLER AUCTIONS SECTION-->
    @include('home.pages.auctions.seller-auctions')
    
    <!--SELLER AUCTIONS SECTION-->



@endsection

@section('footer_scripts')

@include('common.validations')
@include('common.alertify')
@include('home.pages.auctions.auctions-js-script')


@endsection