@extends($layout)

@section('content')

@include('bidder.leftmenu')

    <!--Dashboard section -->


    <div class="col-lg-8 col-md-8 col-sm-12 au-onboard">

       <?php
                $title = $notification->data['title'];
                $url = $notification->data['url'];
                $description='';
                if (isset($notification->data['description']))
                $description = $notification->data['description'];

         ?>

            <a href="{{URL_HOME}}" class="au-middles justify-content-start"> {{getPhrase('home')}} &nbsp;<span> / {{$title}} </span></a>

             <div class="row au-left-side">

                 <div class="col-md-12">

                   <div class="panel panel-custom">
                    <div class="panel-heading">
                        <h4><span class="text-left" >{{$title}}</span>
                            <span class="pull-right time">@  <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($notification->updated_at));?>  </span>
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
                                <a href="{{$url}}" class="btn btn-primary login-bttn">{{getPhrase('read_more')}}</a>
                            </div>
                            @endif

                        </div>
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
