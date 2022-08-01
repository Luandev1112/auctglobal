@inject('request', 'Illuminate\Http\Request')
@extends($layout)

@section('content')
    <h3 class="page-title"> {{getPhrase('auctions')}} </h3>
    
    
       
   
    
<?php 
$date_format = getSetting('date_format','site_settings');

?>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('list')}}

             <a href="{{ URL_AUCTIONS_ADD }}" class="btn btn-success btn-add pull-right">{{getPhrase('add_new')}}</a>

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th style="text-align:center;">S.no.</th>
                        <th> {{getPhrase('image')}} </th>
                        <th> {{getPhrase('title')}} </th>
                        <th> {{getPhrase('start_date')}} </th>
                        <th> {{getPhrase('end_date')}} </th>

                        <th> {{getPhrase('reserve_price')}} ({{getSetting('currency_code','site_settings')}}) </th>
                        @if (checkRole(['admin']))
                        <th> {{getPhrase('seller')}} </th>
                        @endif
                        <th> {{getPhrase('created_by')}} </th>
                        <th> {{getPhrase('auction_status')}} </th>
                        <th> {{getPhrase('admin_status')}} </th>

                        <th> {{getPhrase('live_auction')}} </th>
                       
                        <th>&nbsp;</th>
                        

                    </tr>
                </thead>
                @if (count($auctions) > 0)
                <tbody>
                    @if (count($auctions) > 0)
                     <?php $i=0;?>
                        @foreach ($auctions as $auction)
                         <?php $i++;?>
                            <tr data-entry-id="{{ $auction->id }}">
                              
                                <td style="text-align:center;">{{$i}}</td>
                     
                                <td field-key='image'> <a href="{{getAuctionImage($auction->image,'auction')}}" target="_blank"><img src="{{getAuctionImage($auction->image)}}" alt="{{$auction->title}}" width="50" /> </a> </td>

                                <td> {{$auction->title}} </td>

                                <td> @if ($auction->start_date) <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->start_date));?> @endif </td>

                                <td>  @if ($auction->end_date) <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?> @endif </td>

                                <td >{{ $auction->reserve_price }}</td>
                                @if (checkRole(['admin']))
                                <td> <a href="{{URL_USERS_VIEW}}/{{$auction->seller_slug}}" target="_blank" title="Seller Details"> {{ $auction->username }}</td>
                                @endif
                                <td>{{ $auction->created_by }}</td>

                                <td>{{ $auction->auction_status }}</td>

                                <td>{{ $auction->admin_status }}</td>

                                <td> @if ($auction->live_auction_date) 

                                    <?php echo date(getSetting('date_format','site_settings'), strtotime($auction->live_auction_date));?> 
                                    (
                                    @if ($auction->live_auction_start_time)
                                        {{ $auction->live_auction_start_time }}
                                    @endif

                                    -

                                    @if ($auction->live_auction_end_time)
                                        {{ $auction->live_auction_end_time }}
                                    @endif
                                    )
                                    @endif </td>

                                <td>
                                    
                                    <a href="{{URL_AUCTIONS_VIEW}}{{$auction->slug}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                   
                                    <a href="{{ URL_AUCTIONS_EDIT }}/{{$auction->slug}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                                    
                                </td>


                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12"> {{ getPhrase('no_entries_in_table') }}</td>
                        </tr>
                    @endif
                </tbody>
                @endif
            </table>
        </div>
    </div>
@stop


@section('footer_scripts') 


    @can('content_page_delete') 
    @include('common.deletescript', array('route'=>URL_AUCTIONS_DELETE))
    @endcan





@endsection        