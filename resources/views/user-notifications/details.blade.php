@extends($layout)

@section('content')
    <h3 class="page-title"> {{getPhrase('notifications')}} </h3>

    <div class="panel panel-default">
        <div class="panel-heading">
           {{getPhrase('view')}}
        </div>

        <?php 
                $title = $notification->data['title'];
                $url = $notification->data['url'];
                $description='';
                if (isset($notification->data['description']))
                $description = $notification->data['description'];
                
         ?>


        <div class="panel-body">
            <div class="row">

                <div class="col-md-6">

                   <div class="panel panel-custom">
                    <div class="panel-heading">
                        <h4><span class="text-left" >{{$title}}</span> 
                            <span class="pull-right">@ <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($notification->updated_at));?></span>
                        </h4> 
                    </div>
                    <div class="panel-body">
                        <div class="notification-details">
                            
                            <div class="notification-content text-center">
                                {!!$description!!}
                            </div>
                            <br>
                            @if($url)
                            <div class="notification-footer text-center">
                                <a type="button" href="{{$url}}" class="btn btn-info button">{{getPhrase('read_more')}}</a>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>

                </div>


            </div>



            <p>&nbsp;</p>

            <a href="{{ URL_USER_NOTIFICATIONS }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
