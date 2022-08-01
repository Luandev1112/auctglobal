@inject('request', 'Illuminate\Http\Request')


<?php

if (isset($active_class))
$active_class = $active_class;
else
$active_class='';

$user = Auth::user();

?>

 <section class="au-dashboard">
      <div class="container">
         <div class="row">

            <div class="col-lg-3 col-md-4 col-sm-12 au-aside-dashboard">



                <div class="media au-media-profile">
                  <img class="mr-3" src="{{getProfilePath($user->image)}}" alt="Profile Image" class="img-fluid">
                 <div class="media-body">
                   <h5 class="mt-0">{{$user->name}}</h5>
                   <!-- <p>User Login: 28/02/2018 16:50:55</p> -->
                  </div>
                 </div>





              <ul id="accordion" class="accordion">

                <!--Dashboard-->
                  <li class="{{ isActive($active_class,'dashboard')}}">
                    <a href="{{URL_DASHBOARD}}" title="Dashboard">
                     <div class="link"><i class="fa fa-tachometer"></i>{{getPhrase('dashboard')}}</div>
                    </a>
                  </li>



                  <!--Account-->
                  <li class="{{ bidderActive($active_class,'user_management')}}">

                    <div class="link"><i class="fa fa-globe"></i>{{getPhrase('account')}}<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">

                      <li class="{{ $request->segment(2) == 'edit' ? 'active active-sub' : '' }}"><a href="{{URL_USERS_EDIT}}/{{$user->slug}}" title="Profile">{{getPhrase('profile')}}</a></li>


                      <li class="{{ $request->segment(1) == 'billing-address' ? 'active active-sub' : '' }}"><a href="{{URL_USER_BILLING_ADDRESS}}" title="Billing Address">{{getPhrase('billing_address')}}</a></li>

                      <li class="{{ $request->segment(1) == 'shipping-address' ? 'active active-sub' : '' }}"><a href="{{URL_USER_SHIPPING_ADDRESS}}" title="Shipping Address">{{getPhrase('shipping_address')}}</a></li>

                      <li class="{{ $request->segment(2) == 'change-password' ? 'active active-sub' : '' }}"><a href="{{URL_USERS_CHANGE_PASSWORD}}{{$user->slug}}" title="Change Password">{{getPhrase('change_password')}}</a></li>
                    </ul>
                  </li>




                  <!--Auctions-->
                  <li class="{{ bidderActive($active_class,'auctions')}}">

                    <div class="link"><i class="fa fa-database"></i>{{getPhrase('auctions')}}<i class="fa fa-chevron-down"></i></div>

                    <ul class="submenu">

                      <li class="{{ $request->segment(2) == 'fav-auctions' ? 'active active-sub' : '' }}"><a href="{{URL_USERS_FAV_AUCTIONS}}" title="Favourite Auctions">{{getPhrase('favourite_auctions')}}</a></li>

                      <li class="{{ $request->segment(2) == 'my-auctions' ? 'active active-sub' : '' }}"><a href="{{URL_BIDDER_AUCTIONS}}" title="My Auctions">{{getPhrase('my_auctions')}}</a></li>

                      <li class="{{ $request->segment(2) == 'bought-auctions' ? 'active active-sub' : '' }}"><a href="{{URL_BIDDER_BOUGHT_AUCTIONS}}" title="Bought Auctions">{{getPhrase('bought_auctions')}} </a></li>

                    </ul>
                  </li>




                  <li class="{{ isActive($active_class,'payments')}}">
                   <a href="{{URL_BIDDER_PAYMENTS}}" title="Payments"><div class="link"><i class="fa fa-money"></i>{{getPhrase('payments')}}</div></a>
                  </li>


                  <li class="{{ isActive($active_class,'notifications')}}">
                   <a href="{{URL_USER_NOTIFICATIONS}}" title="Notifications"><div class="link"><i class="fa fa-briefcase"></i>{{getPhrase('notifications')}}</div></a>
                  </li>




                  <li class="{{ $request->segment(1) == 'messenger' ? 'active isactive' : '' }}">
                     @php ($unread = App\MessengerTopic::countUnread())
                   <!--  <div class="link"><i class="fa fa-database"></i>{{getPhrase('messages')}}<i class="fa fa-chevron-down"></i> 
                      @if($unread > 0)
                          {{ ($unread > 0 ? '('.$unread.')' : '') }}
                        @endif  <i class="fa fa-envelope"></i>
                    </div> -->


                     <div class="link"><i class="fa fa-envelope"></i>{{getPhrase('messages')}}<i class="fa fa-chevron-down"></i>
                      @if($unread > 0)
                          {{ ($unread > 0 ? '('.$unread.')' : '') }}
                        @endif
                     </div>


                    <ul class="submenu">

                      <li class="{{ isActive($active_class,'all_messages')}}"><a href="{{URL_MESSENGER}}" title="Messages">{{getPhrase('all_messages')}}</a></li>

                      @php($unread_inbox = App\MessengerTopic::unreadInboxCount())
                      <li class="{{ isActive($active_class,'inbox')}}"><a href="{{ URL_MESSENGER_INBOX }}" title="Inbox">{{getPhrase('inbox')}} {{ ($unread > 0 ? '('.$unread.')' : '') }} </a></li>

                      <li class="{{ isActive($active_class,'outbox')}}"><a href="{{ URL_MESSENGER_OUTBOX }}" title="Outbox">{{getPhrase('outbox')}}</a></li>

                      <li class="{{ isActive($active_class,'create_message')}}"><a href="{{ URL_MESSENGER_ADD }}" title="Send Message">{{getPhrase('create')}}</a></li>

                    </ul>
                  </li>



                  <li>
                    <a href="{{URL_LOGOUT}}" title="Logout">
                      <div class="link"><i class="fa fa-sign-out"></i>{{getPhrase('logout')}}</div>
                    </a>
                  </li>

                </ul>
            </div>





