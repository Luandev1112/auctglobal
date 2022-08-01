@inject('request', 'Illuminate\Http\Request')
@extends($layout)

@section('content')
    <h3 class="page-title"> {{getPhrase('notifications')}} </h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('list')}}
        </div>

        <div class="panel-body table-responsive">
            
            <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">

                <thead>
                    <tr>
                        <th> {{getPhrase('title')}} </th>
                        <th> {{getPhrase('description')}} </th>
                        <th> {{getPhrase('created_at')}} </th>
                        <th> {{getPhrase('action')}} </th>
                    </tr>
                </thead>


                 <tbody>
                    
                                @foreach($notifications as $notification)
                                <?php 
                                    $title = $notification->data['title'];
                                    $url = $notification->data['url'];
                                    $description='';
                                    if (isset($notification->data['description']))
                                    $description = $notification->data['description'];

                                    $notification->markAsRead();
                                ?>
                                <tr>
                                    <td>{{$title}}</td>
                                    <td>{{$description}}</td>
                                    <td>  @if ($notification->updated_at) <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($notification->updated_at));?> @endif </td>
                                    <td><a class="btn btn-info btn-xs" href="{{URL_USER_NOTIFICATIONS_VIEW.$notification->id}}">View more</a></td>
                                </tr>
                                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop
