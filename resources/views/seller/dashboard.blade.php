@extends($layout)

@section('content')

    <div class="row">
        <div class="col-md-12">
             <div class="px-2">

                <div class="panel-heading"> {{ getPhrase('dashboard') }} </div>

                <div class="">

                   <div class="row">


                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="{{URL_LIST_AUCTIONS}}"><div class="state-icn bg-icon-info"><i class="fa fa-users"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title">{{ App\Auction::where('user_id',Auth::user()->id)->get()->count()}}</h4>
                            <a href="{{URL_LIST_AUCTIONS}}">{{ getPhrase('auctions')}}</a>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="{{URL_USER_NOTIFICATIONS}}"><div class="state-icn bg-icon-orange"><i class="fa fa-users"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title">{{ Auth::user()->notifications()->count()}}</h4>
                            <a href="{{URL_USER_NOTIFICATIONS}}">{{ getPhrase('notifications')}}</a>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="media state-media box-ws">
                            <div class="media-left">
                            <a href="{{URL_MESSENGER}}"><div class="state-icn bg-icon-pink"><i class="fa fa-users"></i></div></a>
                            </div>
                            <div class="media-body">
                            <h4 class="card-title">{{ Auth::user()->topics()->with('receiver', 'sender')->orderBy('sent_at', 'desc')->count() }}</h4>
                            <a href="{{URL_MESSENGER}}">{{ getPhrase('messages')}}</a>
                            </div>
                        </div>
                    </div>


                    
                   </div>




                    <div class="row">


                        <div class="col-md-6">
                          <div class="panel panel-primary dsPanel">
                            <div class="panel-heading"><i class="fa fa-bar-chart-o"></i> {{getPhrase('auctions_statistics')}}</div>
                            <div class="panel-body" >
                                <canvas id="payments_chart" width="100" height="60"></canvas>
                            </div>
                          </div>
                        </div>

                    </div>







                </div>
            </div>
        </div>
    </div>
@endsection



@section('footer_scripts')

 
 
 @include('common.chart', array('chart_data'=>$auctions_auction_status_data,'ids' =>array('payments_chart'), 'scale'=>TRUE))

@stop