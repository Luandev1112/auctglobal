<?php
//Sliders
    $slider_one_path = null;
    $slider_one = getSetting('home_slider_one','site_settings');
    if ($slider_one && file_exists('public/uploads/settings/'.$slider_one)) {
        $slider_one_path = IMAGE_PATH_SETTINGS.$slider_one;
    }


    $slider_two_path = null;
    $slider_two = getSetting('home_slider_two','site_settings');
    if ($slider_two && file_exists('public/uploads/settings/'.$slider_two)) {
        $slider_two_path = IMAGE_PATH_SETTINGS.$slider_two;
    }

    $slider_three_path = null;
    $slider_three = getSetting('home_slider_three','site_settings');
    if ($slider_three && file_exists('public/uploads/settings/'.$slider_three)) {
        $slider_three_path = IMAGE_PATH_SETTINGS.$slider_three;
    }

    $slider_four_path = null;
    $slider_four = getSetting('home_slider_four','site_settings');
    if ($slider_four && file_exists('public/uploads/settings/'.$slider_four)) {
        $slider_four_path = IMAGE_PATH_SETTINGS.$slider_four;
    }
?>
<!--HERO HEADER SECTION-->
    <section class="hero-header">
        <div class="slider">

            @if ($slider_one_path)
            <div class="image au-hero" style="background:linear-gradient( rgba(105, 105, 105, 0.59), rgba(105, 105, 105, 0.99)), url({{$slider_one_path}});position:relative;background-position:center;background-size: cover;"></div>
            @else
            <div class="image au-hero" style="background:linear-gradient( rgba(105, 105, 105, 0.59), rgba(105, 105, 105, 0.99)), url({{IMAGES_HOME}}slider-one.png);position:relative;background-position:center;background-size: cover;"></div>
            @endif


            @if ($slider_two_path)
            <div class="image au-hero" style="background:linear-gradient( rgba(105, 105, 105, 0.59), rgba(105, 105, 105, 0.99)), url({{$slider_two_path}});position:relative;background-position:center;background-size: cover;"></div>
            @else
             <div class="image au-hero" style="background:linear-gradient( rgba(105, 105, 105, 0.59), rgba(105, 105, 105, 0.99)), url({{IMAGES_HOME}}slider-two.png);position:relative;background-position:center;background-size: cover;"></div>
            @endif


            @if ($slider_three_path)
            <div class="image au-hero" style="background:linear-gradient( rgba(105, 105, 105, 0.59), rgba(105, 105, 105, 0.99)), url({{$slider_three_path}});position:relative;background-position:center;background-size: cover;"></div>
            @else
             <div class="image au-hero" style="background:linear-gradient( rgba(105, 105, 105, 0.59), rgba(105, 105, 105, 0.99)), url({{IMAGES_HOME}}slider-three.png);position:relative;background-position:center;background-size: cover;"></div>
            @endif


            @if ($slider_four_path)
            <div class="image au-hero" style="background:linear-gradient( rgba(105, 105, 105, 0.59), rgba(105, 105, 105, 0.99)), url({{$slider_four_path}});position:relative;background-position:center;background-size: cover;"></div>
            @else
            <div class="image au-hero" style="background:linear-gradient( rgba(105, 105, 105, 0.59), rgba(105, 105, 105, 0.99)), url({{IMAGES_HOME}}slider-four.png);position:relative;background-position:center;background-size: cover;"></div>
            @endif


        </div>
        <!--Search Box-->
        <section class="au-search">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1 au-headline">
                        <h1 class="text-center">{{getSetting('home_page_caption','site_settings')}}</h1>
                        <p class="text-center">{{getSetting('home_page_tagline','site_settings')}}</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Search Box-->
    </section>
    <!--HERO HEADER SECTION-->