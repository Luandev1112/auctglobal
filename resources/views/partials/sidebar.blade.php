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
                    <i class="fa fa-cloud"></i>
                    <span class="title"> {{getPhrase('dashboard')}} </span>
                </a>
            </li>


            @can('user_access')
            <li class="{{ isActive($active_class,'user_management')}}">
                <a href="{{ route('users.index') }}">
                    <i class="fa fa-users"></i>
                    <span class="title"> {{getPhrase('user_management')}} </span>
                </a>
            </li>
            @endcan


            @can('faq_management_access')
            <li class="treeview {{ isActive($active_class,'faqs')}}">
                <a href="#">
                    <i class="fa fa-question"></i>
                    <span class="title"> {{getPhrase('faq_management')}} </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('faq_category_access')
                <li class="{{ $request->segment(2) == 'faq_categories' ? 'active active-sub' : '' }}">
                        <a href="{{ URL_FAQ_CATEGORIES }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                {{getPhrase('categories')}}
                            </span>
                        </a>
                    </li>
                @endcan
                @can('faq_question_access')
                <li class="{{ $request->segment(2) == 'faq_questions' ? 'active active-sub' : '' }}">
                        <a href="{{ URL_FAQ_QUESTIONS }}">
                            <i class="fa fa-question"></i>
                            <span class="title">
                                {{getPhrase('questions')}}
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan

            @can('category_access')
            <li class="treeview {{ isActive($active_class,'categories')}}">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span class="title"> {{getPhrase('categories')}} </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('category_access')
                <li class="{{ $request->segment(2) == 'categories' ? 'active active-sub' : '' }}">
                        <a href="{{ URL_CATEGORIES }}">
                            <i class="fa fa-tags"></i>
                            <span class="title">
                                {{getPhrase('category')}} 
                            </span>
                        </a>
                    </li>
                @endcan
                @can('sub_catogory_access')
                <li class="{{ $request->segment(2) == 'sub_catogories' ? 'active active-sub' : '' }}">
                        <a href="{{ URL_SUB_CATEGORIES }}">
                            <i class="fa fa-list-alt"></i>
                            <span class="title">
                                {{getPhrase('sub_categories')}} 
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan

            @can('location_master_access')
            <li class="treeview {{ isActive($active_class,'locations')}}">
                <a href="#">
                    <i class="fa fa-map-marker"></i>
                    <span class="title"> {{getPhrase('location_master')}} </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('country_access')
                <li class="{{ $request->segment(2) == 'countries' ? 'active active-sub' : '' }}">
                        <a href="{{ URL_COUNTRIES }}">
                            <i class="fa fa-flag"></i>
                            <span class="title">
                                {{getPhrase('countries')}}
                            </span>
                        </a>
                    </li>
                @endcan
                @can('state_access')
                <li class="{{ $request->segment(2) == 'states' ? 'active active-sub' : '' }}">
                        <a href="{{ URL_STATES }}">
                            <i class="fa fa-map-marker"></i>
                            <span class="title">
                                {{getPhrase('states')}}
                            </span>
                        </a>
                    </li>
                @endcan
                @can('city_access')
                <li class="{{ $request->segment(2) == 'cities' ? 'active active-sub' : '' }}">
                        <a href="{{ URL_CITIES }}">
                            <i class="fa fa-building"></i>
                            <span class="title">
                                {{getPhrase('cities')}}
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan



            @if (checkRole(['admin']))
            <li class="{{ isActive($active_class,'languages')}}">
                <a href="{{ URL_LANGUAGES_LIST }}">
                    <i class="fa fa-language"></i>
                    <span>{{getPhrase('languages')}}</span>
                </a>
            </li>
            @endif



            @can('content_page_access')
            <li class="{{ isActive($active_class,'content_management')}}">
                    <a href="{{ URL_PAGES }}">
                        <i class="fa fa-file-o"></i>
                        <span class="title">
                            {{getPhrase('content_management')}}
                           
                        </span>
                    </a>
                </li>
            @endcan

            @can('setting_access')
            <li class="{{ isActive($active_class,'master_settings')}}">
                <a href="{{ URL_SETTINGS_LIST }}">
                    <i class="fa fa-gears"></i>
                    <span>{{getPhrase('master_settings')}}</span>
                </a>
            </li>
            @endcan

            @can('testmony_access')
            <li class="{{ isActive($active_class,'testimonials')}}">
                <a href="{{ URL_TETSIMONIALS }}">
                    <i class="fa fa-quote-left"></i>
                    <span>{{getPhrase('testimonials')}}</span>
                </a>
            </li>
            @endcan



            @can('template_access')
                <li class="{{ isActive($active_class,'email_templates')}}">
                    <a href="{{ URL_EMAIL_TEMPLATES }}">
                        <i class="fa fa-book"></i>
                        <span class="title">
                           {{getPhrase('email_templates')}}
                        </span>
                    </a>
                </li>
            @endcan




            <li class="{{ isActive($active_class,'auctions')}}">
                <a href="{{ URL_LIST_AUCTIONS }}">
                    <i class="fa fa-gavel"></i>
                    <span class="title">
                       {{getPhrase('auctions')}} 
                    </span>
                </a>
            </li>
       



            @if (checkRole(['admin']))
            <li class="{{ isActive($active_class,'news_letter')}}">
                <a href="{{ URL_LIST_NEWS_LETTER }}">
                    <i class="fa fa-newspaper-o"></i>
                    <span class="title">
                       {{getPhrase('news_letter')}} 
                    </span>
                </a>
            </li>
            @endif
            

            @if (checkRole(['admin']))
            <li class="treeview {{ $request->segment(2) == 'reports' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span class="title">{{getPhrase('reports')}}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <!--  <li class="{{ $request->is('/reports/auction-report') }}">
                        <a href="{{ url('/admin/reports/auction-report') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">Auction Report</span>
                        </a>
                    </li> -->

                    <li class="{{ $request->is('/reports/seller-wise-report') }} {{ $request->segment(3) == 'seller-wise-report' ? 'active active-sub' : '' }}">
                        <a href="{{ url('/admin/reports/seller-wise-report') }}">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">{{getPhrase('seller_wise_reports')}}</span>
                        </a>
                    </li>

                    <li class="{{ $request->is('/reports/time-wise-report') }} {{ $request->segment(3) == 'time-wise-report' ? 'active active-sub' : '' }}">
                        <a href="{{ url('/admin/reports/time-wise-report') }}">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">{{getPhrase('year_month_wise_reports')}}</span>
                        </a>
                    </li>


                    <li class="{{ $request->is('/reports/seller-auctions') }} {{ $request->segment(3) == 'seller-auctions' ? 'active active-sub' : '' }}">
                        <a href="{{ url('/admin/reports/seller-auctions') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">{{getPhrase('seller_auctions')}}</span>
                        </a>
                    </li>

                </ul>
            </li>
            @endif


       

             <li class="{{ isActive($active_class,'notifications')}}">
                <a href="{{ URL_USER_NOTIFICATIONS }}">
                    <i class="fa fa-briefcase"></i>
                    <span class="title"> {{ getPhrase('notifications') }} </span>
                </a>
            </li>

            @if (checkRole(['admin']))
            <li class="{{ isActive($active_class,'sms')}}">
                <a href="{{ URL_SEND_SMS }}">
                    <i class="fa fa-mobile"></i><span class="title"> {{ getPhrase('sms') }} </span>
                </a>
            </li>
            @endif
            
            @php ($unread = App\MessengerTopic::countUnread())
            <li class="{{ $request->segment(1) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}">
                <a href="{{ URL_MESSENGER }}">
                    <i class="fa fa-envelope"></i>

                    <span>{{getPhrase('messages')}}</span>
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


            @if (checkRole(['admin']))
            <li class="{{ isActive($active_class,'payments')}}">
                <a href="{{ URL_PAYMENT_HISTORY }}">
                    <i class="fa fa-money"></i>
                    <span>{{getPhrase('payments')}}</span>
                </a>
            </li>
            @endif

           

            <li>
                <a href="{{URL_LOGOUT}}" title="Logout">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"> {{getPhrase('logout')}} </span>
                </a>
            </li>
        </ul>
    </section>
</aside>

