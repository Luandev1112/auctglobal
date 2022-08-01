<header class="main-header">
    <!-- Logo -->
    <a href="{{ PREFIX }}" class="logo"
       style="font-size: 16px;">


       <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
           <img src="{{IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')}}" alt="Logo" class="img-fluid">
       </span>

        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
         <img src="{{IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')}}" alt="Logo" class="img-fluid">
       </span>

           
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!--notifications-->
                <!--li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell-o"></i>
                        @php($notificationCount = \Auth::user()->internalNotifications()->where('read_at', null)->count())
                        @if($notificationCount > 0)
                            <span class="label label-warning">
                            {{ $notificationCount }}
                        </span>
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="slimScrollDiv"
                                 style="position: relative;">
                                <ul class="menu notification-menu">
                                    @if (count($notifications = \Auth::user()->internalNotifications()->get()) > 0)
                                        @foreach($notifications as $notification)
                                            <li class="notification-link {{ $notification->pivot->read_at === null ? "unread" : false }}">
                                                <a href="{{ $notification->link ? $notification->link : "#" }}"
                                                   class="{{ $notification->link ? 'is-link' : false }}">
                                                    {{ $notification->text }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="notification-link" style="text-align:center;">
                                            No notifications
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li-->

                @include('common.notifications')


                <!--navbar dropdown-->
                <li class="dropdown profile-menu">
                    <div class="dropdown-toggle top-profile-menu" data-toggle="dropdown">
                        @if(Auth::check())
                        <div class="username">
                            <h4>{{Auth::user()->name}}</h4>
                        </div>
                        @endif
                        
                        <div class="profile-img"> <img src="{{ getProfilePath(Auth::user()->image, 'thumb') }}" alt=""> </div>
                        <div class="mdi mdi-menu-down"></div>
                    </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{URL_USERS_EDIT}}/{{Auth::user()->slug}}">
                                <span>{{ getPhrase('my_profile') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL_USERS_CHANGE_PASSWORD}}{{Auth::user()->slug}}">
                                <span>{{ getPhrase('change_password') }}</span>
                            </a>
                        </li>
                     
                        <li>
                            <a href="{{URL_LOGOUT}}">
                                <span>{{ getPhrase('logout') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                

                
            </ul>
        </div>


<!-- 
            <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown languages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(\App::getLocale()) }}
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header"></li>
                        <ul class="menu language-menu">
                            @foreach(config('app.languages') as $short => $title)
                                <li class="language-link">
                                    <a href="{{ route('admin.language', $short) }}">
                                        {{ $title }} ({{ strtoupper($short) }})
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <li class="footer"></li>
                    </ul>
                </li>
            </ul>
        </div> -->



    </nav>
</header>


    </nav>
</header>


<style>
    .slimScrollDiv {
        width: auto !important;
        height:auto !important;
    }

    .notification-menu {
        width: auto !important;
        list-style-type: none;
        padding: 5px;
        max-width: 300px;
        height:auto !important;
    }

    .notification-link {
        width: auto;
    }

    .notification-link a {
        white-space: normal !important;
    }

    .unread a {
        font-weight: bold !important;
    }

    .is-link {
        color: #5b9bd1 !important;
    }
</style><style>
    .slimScrollDiv {
        width: auto !important;
        height:auto !important;
    }

    .language-menu {
        width: auto !important;
        list-style-type: none;
        padding: 0;
        margin: 0;
        max-width: 300px;
        height:auto !important;
        max-height: 500px !important;
    }

    .language-link {
        width: auto;
    }

    .language-link a {
        display: block;
        width: 100%;
        white-space: normal !important;
        padding: 5px;
    }
    .language-link a:hover {
        color: #389ad2;
        background: #f9f9f9;
    }



 /*   .main-header .navbar {
    height: 69px;
}*/
</style>

