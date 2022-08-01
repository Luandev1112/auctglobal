@inject('request', 'Illuminate\Http\Request')

<?php 

if (isset($active_class))
$active_class = $active_class;
else 
$active_class='';
?>

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ isActive($active_class,'dashboard')}}">
                <a href="{{ PREFIX }}index">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>



            <li class="{{ isActive($active_class,'auctions')}}">
                <a href="{{ URL_LIST_AUCTIONS }}">
                    <i class="fa fa-gavel"></i>
                    <span class="title">
                       Auctions
                    </span>
                </a>
            </li>
       


            
             <li class="{{ isActive($active_class,'notifications')}}">
                <a href="{{ URL_USER_NOTIFICATIONS }}">
                    <i class="fa fa-briefcase"></i>
                    <span class="title"> {{ getPhrase('notifications') }} </span>
                </a>
            </li>

            
            @php ($unread = App\MessengerTopic::countUnread())
            <li class="{{ $request->segment(1) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}">
                <a href="{{ URL_MESSENGER }}">
                    <i class="fa fa-envelope"></i>

                    <span>Messages</span>
                    @if($unread > 0)
                        {{ ($unread > 0 ? '('.$unread.')' : '') }}
                    @endif
                </a>
            </li>
            <style>
                .page-sidebar-menu .unread * {
                    font-weight:bold !important;
                }
            </style>



           

            <li>
                <a href="{{URL_LOGOUT}}">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"> {{getPhrase('logout')}} </span>
                </a>
            </li>
        </ul>
    </section>
</aside>

