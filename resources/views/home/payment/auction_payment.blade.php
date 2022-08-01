@extends($layout)


@section('header_scripts')
<link href="{{CSS}}checkbox.css" rel="stylesheet" type="text/css">
@endsection


@section('content')
<?php 
$currency_code = getSetting('currency_code','site_settings');

$payu   = getSetting('payu','module');
$paypal = getSetting('paypal','module');
$stripe = getSetting('stripe','module');


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
                      <th width="120"> {{getPhrase('title')}} </th>
                      <td>{{ $record->title }}</td>
                  </tr>

                   <tr>
                      <th> {{getPhrase('image')}} </th>
                      <td> <img src="{{getAuctionImage($record->image)}}" alt="{{$record->title}}" width="50">  </td>
                  </tr>


                  <tr>
                      <th> {{getPhrase('category')}}  </th>
                      <td> @if ($record->category) {{ $record->category->category }} @endif</td>
                  </tr>


                  <tr>
                      <th> {{getPhrase('sub_category')}}  </th>
                      <td> @if ($record->sub_category) {{ $record->sub_category->sub_category }} @endif </td>
                  </tr>


                   <tr>
                        <th> {{getPhrase('seller')}}  </th>
                        <td> {{ $user->getUserTitle() }} </td>
                    </tr>


                    <tr>
                        <th> {{getPhrase('start_date')}}  </th>
                        <td> {{ $record->start_date }} </td>
                    </tr>

                    <tr>
                        <th> {{getPhrase('end_date')}}  </th>
                        <td> {{ $record->end_date }} </td>
                    </tr>


                    <tr>
                        <th> {{getPhrase('reserve_price')}}  </th>
                        <td> {{$currency_code}}{{$record->reserve_price}} </td>
                    </tr>


                     <tr>
                          <th> {{getPhrase('amount')}} </th>
                          <td> {{$currency_code}}{{$record->buy_now_price}}</td>
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
                 $bcountry=$user->getBillingCountry();
                 if (($bcountry))
                  $billing_country = $bcountry->title;

                 $billing_state=null; 
                 $bstate=$user->getBillingState();
                 if (($bstate))
                  $billing_state = $bstate->state;


                 $billing_city=null; 
                 $bcity=$user->getBillingCity();
                 if (($bcity))
                  $billing_city = $bcity->city;


                 $shipping_country=null; 
                 $scountry=$user->getShippingCountry();
                 if (($scountry))
                  $shipping_country = $scountry->title;


                 $shipping_state=null; 
                 $sstate=$user->getShippingState();
                 if (($sstate))
                  $shipping_state = $sstate->state;


                 $shipping_city=null; 
                 $scity=$user->getShippingCity();
                 if (($scity))
                  $shipping_city = $scity->city;

                 ?>

                 <div class="card payment-page">
                  
                  <div class="card-body">
                    <h5 class="box-head">{{getPhrase('billing_details')}}</h5>

                    <p class="card-text">{{$user->billing_name}}</p>
                    <p class="card-text">{{$user->billing_email}}</p>
                    <p class="card-text">{{$user->billing_phone}}</p>
                    <p class="card-text">{{$user->billing_address}}</p>
                    <p class="card-text"> {{$billing_city}},{{$billing_state}},{{$billing_country}}</p>
                    
                  </div>
                </div>


                 <div class="card payment-page">
                  
                  <div class="card-body">
                    <h5 class="box-head">{{getPhrase('shipping_details')}}</h5>

                    <p class="card-text">{{$user->shipping_name}}</p>
                    <p class="card-text">{{$user->shipping_email}}</p>
                    <p class="card-text">{{$user->shipping_phone}}</p>
                    <p class="card-text">{{$user->shipping_address}}</p>
                    <p class="card-text"> {{$shipping_city}},{{$shipping_state}},{{$shipping_country}}</p>
                    
                  </div>
                </div>

                  </div>
                </div>



                <div class="box-card">
                <h4 class="box-head">{{getPhrase('choose_payment')}}</h4>

                 <div class="row">

                      @if ($paypal && count($paypal_record))
                       <div class="col-lg-3">  

                       {!! Form::open(array('url' => URL_PAYNOW, 'method' => 'POST','name'=>'paypalFormValidate','novalidate'=>'','class'=>'form-inline')) !!}

                       
                       <input type="hidden" name="auction_id" value="{{$record->id}}">
                       <input type="hidden" name="payment_for" value="{{PAYMENT_FOR_BUY_AUCTION}}">
                       <input type="hidden" name="auction_price" value="{{$record->buy_now_price}}">
                       <input type="hidden" name="payment_gateway" value="paypal">


                        <button class="btn btn-info btn-paypal login-bttn" ng-disabled='!paypalFormValidate.$valid'>{{ getPhrase('paypal') }}</button>
                      
                        {!! Form::close() !!}

                        </div>
                      @endif



                       @if ($payu && count($payu_record))
                       <div class="col-lg-3">  

                    
                        {!! Form::open(array('url' => URL_PAYNOW, 'method' => 'POST','name'=>'payuFormValidate','novalidate'=>'','class'=>'form-inline')) !!}
                          
                        <input type="hidden" name="auction_id" value="{{$record->id}}">
                        <input type="hidden" name="payment_for" value="{{PAYMENT_FOR_BUY_AUCTION}}">
                        <input type="hidden" name="auction_price" value="{{$record->buy_now_price}}">
                        <input type="hidden" name="payment_gateway" value="payu">

                        <button class="btn btn-info btn-payu login-bttn" ng-disabled='!payuFormValidate.$valid'>{{ getPhrase('payu') }}</button>
                      
                        {!! Form::close() !!}

                        </div>
                      @endif


                      @if ($stripe && count($stripe_record))
                      <div class="col-lg-4">

                      <form action="{{URL_STRIPE_PAYMENT}}" method="POST">
                        {{csrf_field()}}

                        <input type="hidden" name="auction_id" value="{{$record->id}}">
                        <input type="hidden" name="payment_for" value="{{PAYMENT_FOR_BUY_AUCTION}}">
                        <input type="hidden" name="auction_price" value="{{$record->buy_now_price}}">
                        <input type="hidden" name="payment_gateway" value="stripe">

                        <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="{{ env('STRIPE_KEY') }}"
                                data-amount="{{$record->buy_now_price*100}}"
                                data-name="{{getSetting('site_title','site_settings')}}"
                                data-description="Buy Auction"
                                data-locale="auto"
                                data-currency="USD"
                                data-label="Stripe">
                        </script>
                       </form>

                      </div>

                      <!-- <div class="col-lg-3"> 
                        {!! Form::open(array('url' => URL_STRIPE_PAYMENT, 'method' => 'POST','name'=>'stripeFormValidate','novalidate'=>'','class'=>'form-inline')) !!}

                        <input type="hidden" name="auction_id" value="{{$record->id}}">
                        <input type="hidden" name="payment_for" value="{{PAYMENT_FOR_BUY_AUCTION}}">
                        <input type="hidden" name="auction_price" value="{{$record->buy_now_price}}">
                        <input type="hidden" name="payment_gateway" value="stripe">
                       

                       <input type="hidden" name="stripeToken" value="pk_test_Z8QCoRT9K8x0F1IrgFg7rh4b"> 

                        <button class="btn btn-info btn-stripe" ng-disabled='!stripeFormValidate.$valid'>{{ getPhrase('stripe') }}</button>
                      
                        {!! Form::close() !!}
                      </div> -->

                      @endif



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