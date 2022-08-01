<?php

//Auction Categories
$categories = \App\Category::getHomeCategories(6);


?>
    <nav class="navbar navbar-expand-md navbar-light nav-custom">
      <div class="container">
        <a class="navbar-brand" href="{{PREFIX}}">
          <img class="img-fluid" src="{{IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')}}" alt="Auction Logo">
        </a>
        <a href="#off-canvas" class="js-offcanvas-trigger navbar-toggle collapsed" data-toggle="collapse" data-offcanvas-trigger="off-canvas" aria-expanded="false"></a>
        <button class="navbar-toggler js-offcanvas-trigger wb-btnn" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" data-offcanvas-trigger="off-canvas"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse d-none justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav nav-inner au-nav-inner">

                   @if (Auth::check())
                   @include('bidder.common.notifications')
                   @endif

                   <li class="nav-item au-items"><a class="au-custom nav-link nav-press scroll" href="{{URL_CONTACT_US}}" title="Contact Us"> {{getPhrase('contact_us')}} </a></li>

                   @if (Auth::check())
                   <li><a href="{{URL_DASHBOARD}}" title="Dashboard" class="nav-link nav-press scroll"> {{getPhrase('dashboard')}} </a></li>
                   @endif


                   @if (!Auth::check())
                   <li><a href="javascript:void(0);" onclick="showModal('loginModal')" title="Login" class="nav-link nav-press scroll" >{{getPhrase('login')}}</a></li>
                   @endif


                </ul>
            </div>
        </div>
    </nav>
     <aside class="js-offcanvas" data-offcanvas-options='{ "modifiers": "left,overlay" }' id="off-canvas"></aside>
    <!-- /Navbar -->
    <section class="au-navbar">
        <div class="container">
            <div class="row">
                <div class="sf-contener clearfix col-lg-12" id="block_top_menu">
                    <div class="cat-title"> Menu <i class="fa fa-bars au-icon"></i></div>
                    <ul class="sf-menu clearfix menu-content">

                        <li><a href="{{URL_HOME}}"> {{getPhrase('home')}} </a></li>

                        <li><a href="{{URL_HOME_AUCTIONS}}"> {{getPhrase('auctions')}} </a></li>

                        @if ($categories)
                        @foreach ($categories as $category)

                        <?php $sub_categories = $category->get_sub_catgories()->get();?>

                        @if (count($sub_categories))
                        <li class="single-dropdown"><span class="menu-mobile-grover au-listts"><i class="fa fa-chevron-circle-down au-icon"></i></span>


                            <a href="javascript:void(0)"> {{$category->category}} </a>

                            <ul class="submenu-container clearfix first-in-line-xs menu-mobile">
                                <li>
                                    <ul>
                            @foreach ($sub_categories as $sub)

                            <?php $auctions_count = $sub->getMenuSubCategoryAuctions()->count();?>

                                <li>
                                    <a href="javascript:void(0)" onclick="window.location.href='{{URL_HOME_AUCTIONS}}?category={{$category->slug}}&subcategory={{$sub->slug}}';"> {{$sub->sub_category}} ({{$auctions_count}}) </a>
                                </li>
                            @endforeach
                                    </ul>
                                </li>
                                <li id="category-thumbnails"></li>
                            </ul>
                        </li>
                        @else


                        <li><a href="javascript:void(0)" onclick="window.location.href='{{URL_HOME_AUCTIONS}}?category={{$category->slug}}';"> {{$category->category}} </a></li>
                        @endif


                        @endforeach
                        @endif

                        <li><a href="{{URL_LIVE_AUCTIONS}}"> {{getPhrase('live_auctions')}} </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /Navbar-->

    @if (isset($breadcrumb))
     <!--BREADCRUMBS SECTION-->
    <section class="au-bread-crumbs">
      <div class="container">
         <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6 au-crumbs">
                <h5>{{isset($title) ? $title : ''}}</h5>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 au-bread">
                <a href="javascript:void(0);" class="justify-content-end">{{getPhrase('home')}} &nbsp; <span> / {{isset($title) ? $title : ''}} </span></a>
            </div>
         </div>
      </div>
    </section>
    <!--BREADCRUMBS SECTION-->
    @endif
