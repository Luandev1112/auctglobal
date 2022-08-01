@inject('request', 'Illuminate\Http\Request')
@extends($layout)

@section('content')
    <h3 class="page-title"> {{$title}} </h3>
    <?php $currency = getSetting('currency_code','site_settings');?>

    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('list')}}
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th>S.No.</th>
                        
                        <th> {{getPhrase('username')}} </th>
                        <th> {{getPhrase('transaction_id')}} </th>
                        <th> {{getPhrase('paid_amount')}} </th>
                        
                        <th> {{getPhrase('payment_for')}} </th>
                        <th> {{getPhrase('pay_through')}} </th>
                        <th> {{getPhrase('payment_status')}} </th>
                        <th> {{getPhrase('datetime')}} </th>

                        <th>&nbsp;</th>

                    </tr>
                </thead>
                @if (count($records) > 0)
                <tbody>
                    @if (count($records) > 0)
                     <?php $i=0;?>
                        @foreach ($records as $record)
                         <?php $i++;?>
                            <tr>
                              
                                <td> {{$i}} </td>
                              
                                <td> <a href="{{URL_USERS_VIEW}}/{{$record->user_slug}}">{{$record->username}} </a></td>

                                <td> {{$record->transaction_id}} </td>

                                <td> @if ($record->paid_amount) {{$currency}}{{$record->paid_amount}} @endif </td>

                                <td> {{get_text($record->payment_for)}} </td>

                                <td> {{get_text($record->payment_gateway)}} </td>

                                <td> {{get_text($record->payment_status)}} </td>

                                <td> @if ($record->created_at) <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($record->created_at));?> @endif </td>

                                <td>
                                    <a href="{{URL_PAYMENT_DETAILS}}/{{$record->slug}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                   
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
@stop


@section('footer_scripts') 


    @can('content_page_delete') 
    @include('common.deletescript', array('route'=>URL_AUCTIONS_DELETE))
    @endcan





@endsection        