@extends($layout)



@section('content')

@include('bidder.leftmenu')

<!--Dashboard section -->


    <div class="col-lg-9 col-md-8 col-sm-12 au-onboard">
            <a href="{{URL_HOME}}" class="au-middles justify-content-start"> {{getPhrase('home')}} &nbsp;<span> / {{$title}} </span></a>

            <div class="au-left-side form-auth-style">


              

                <div class="row">

                    <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th>#</th>
                       
                        <th>{{ getPhrase('title')}}</th>
                        <!-- <th>{{ getPhrase('description')}}</th> -->
                        <th>{{ getPhrase('created_at')}}</th>
                        <th>{{ getPhrase('action')}}</th>

                    </tr>
                </thead>
                @if (count($notifications) > 0)
                <tbody>
                    @if (count($notifications) > 0)
                    <?php $i=0; ?>
                        @foreach ($notifications as $notification)

                       <?php 
                       $i++;
                                    $title = $notification->data['title'];
                                    $url = $notification->data['url'];
                                    $description='';
                                    if (isset($notification->data['description']))
                                    $description = $notification->data['description'];

                                    $notification->markAsRead();
                                ?>

                            <tr>
                              
                                <td>{{$i}}</td>
                               
                                <td>{{$title}}</td>

                                <!-- <td>{{$description}}</td> -->

                                <td>  @if ($notification->updated_at) <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($notification->updated_at));?> @endif </td>
                                <td><a href="{{URL_USER_NOTIFICATIONS_VIEW.$notification->id}}" title="View Details" class="btn btn-primary btn-sm login-bttn">{{getPhrase('view')}}</a></td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5"> {{ getPhrase('no_entries_in_table') }}</td>
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
    <!--Dashboard section-->

@endsection



@section('footer_scripts')

@include('common.validations')

@include('common.alertify')

@include('home.pages.auctions.auctions-js-script')



@stop