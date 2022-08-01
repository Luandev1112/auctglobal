@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{getPhrase('payments')}}</h3>
<?php $currency = getSetting('currency_code','site_settings');

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
    <div class="panel panel-default">
        <div class="panel-heading">
            {{$title}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">

                        <tr>
                            <th>{{getPhrase('user')}}</th>
                            <td> @if ($record->username) <a href="{{URL_USERS_VIEW}}/{{$record->user_slug}}">{{$record->username}}</a> @endif </td>
                        </tr>
                       

                        <tr>
                            <th>{{getPhrase('auction')}}</th>
                            <td> @if ($auction->title) <a href="{{URL_AUCTIONS_VIEW}}{{$auction->slug}}">{{$auction->title}}</a> @endif </td>
                        </tr>

                        <tr>
                          <th> {{getPhrase('image')}} </th>
                          <td> @if ($auction) <img src="{{getAuctionImage($auction->image)}}" alt="{{$auction->title}}" width="50"> @endif </td>
                        </tr>


                        <tr>
                            <th>{{getPhrase('paid_through')}}</th>
                            <td> {{get_text($record->payment_gateway)}} </td>
                        </tr>

                        <tr>
                            <th>{{getPhrase('payment_for')}}</th>
                            <td> {{get_text($record->payment_for)}} </td>
                        </tr>


                        <tr>
                            <th>{{getPhrase('paid_amount')}}</th>
                            <td> @if ($record->paid_amount) {{$currency}}{{$record->paid_amount}} @endif </td>
                        </tr>


                        <tr>
                            <th>{{getPhrase('payment_status')}}</th>
                            <td> {{get_text($record->payment_status)}} </td>
                        </tr>

                         <tr>
                            <th>{{getPhrase('transaction_id')}}</th>
                            <td> {{$record->transaction_id}} </td>
                        </tr>

                         <tr>
                            <th>{{getPhrase('billing_name')}}</th>
                            <td> {{$record->billing_name}} </td>
                        </tr>

                        <tr>
                            <th>{{getPhrase('billing_email')}}</th>
                            <td> {{$record->billing_email}} </td>
                        </tr>

                       
                        
                    </table>
                </div>

                 <div class="col-md-6">
                    <table class="table table-bordered table-striped">

                         <tr>
                            <th>{{getPhrase('billing_phone')}}</th>
                            <td> {{$record->billing_phone}} </td>
                        </tr>
                       

                        <tr>
                            <th>{{getPhrase('billing_country')}}</th>
                            <td> {{$billing_country}} </td>
                        </tr>

                        <tr>
                            <th>{{getPhrase('billing_state')}}</th>
                            <td> {{$billing_state}} </td>
                        </tr>

                        <tr>
                            <th>{{getPhrase('billing_city')}}</th>
                            <td> {{$billing_city}} </td>
                        </tr>


                         <tr>
                            <th>{{getPhrase('shipping_name')}}</th>
                            <td> {{$record->shipping_name}} </td>
                        </tr>

                        <tr>
                            <th>{{getPhrase('shipping_email')}}</th>
                            <td> {{$record->shipping_email}} </td>
                        </tr>

                        <tr>
                            <th>{{getPhrase('shipping_phone')}}</th>
                            <td> {{$record->shipping_phone}} </td>
                        </tr>

                        <tr>
                            <th>{{getPhrase('shipping_country')}}</th>
                            <td> {{$shipping_country}} </td>
                        </tr>

                        <tr>
                            <th>{{getPhrase('shipping_state')}}</th>
                            <td> {{$shipping_state}} </td>
                        </tr>

                        <tr>
                            <th>{{getPhrase('shipping_city')}}</th>
                            <td> {{$shipping_city}} </td>
                        </tr>

                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ URL_COUNTRIES }}" class="btn btn-default">{{getPhrase('back_to_list')}}</a>
        </div>
    </div>
@stop
