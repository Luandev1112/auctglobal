@extends($layout)

@section('header_scripts')
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel='stylesheet' type='text/css'>
<link href="{{CSS}}test/style.css" rel='stylesheet' type='text/css'>

 <style>
    body { background-color:#fafafa;}
    #wrapper { margin:150px auto;}
    </style>
@endsection

@section('content')

<!--CONTACT SECTION-->
    <section class="au-who">
       
        <div class="container">

          <div class="panel-body form-auth-style">

         
             <div class="au-who-main">
                <h2 class="text-left">{{$title}}</h2>
              </div>

          
                <div class="row">


                  <div class="col-lg-6">


                     <div id="zoom"></div>
<div id="wrapper">

        <div id="content">
            <div id="view">
             <img src="{{IMAGES}}blog-4.png" alt="">
            </div>
          <div id="thumbs">
                <div id="nav-left-thumbs"><</div>
                <div id="pics-thumbs">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">
                      <img src="{{IMAGES}}a2.jpg" alt="">


                </div>
                <div id="nav-right-thumbs">></div>
            </div>
        </div>

    </div>


                  </div>





                 


                   
                </div>



            </div>

        </div>
        
    </section>
    <!--CONTACT SECTION-->



  
    <!--RECENT WINNERS SECTION-->
    @include('home.pages.auctions.recent-winners')
    <!--RECENT WINNERS SECTION-->

    
    <!--RECENT BUYERS SECTION-->
    @include('home.pages.auctions.recent-buyers')
    <!--RECENT BUYERS SECTION-->


    @include('home/testimonials')

   
@endsection

@section('footer_scripts')


<script type="text/javascript" src="{{JS_HOME}}prefixfree.min.js"></script>
<script type="text/javascript" src="{{JS_HOME}}zoom-slideshow.js"></script>

<script>
$(document).ready(function() {
    // Initialisation du plugin jQuery
    $('#view').setZoomPicture({
    thumbsContainer: '#pics-thumbs',
    prevContainer: '#nav-left-thumbs',
    nextContainer: '#nav-right-thumbs',
    zoomContainer: '#zoom',
    zoomLevel: 2,
    });
});
</script>

@include('common.validations')
@include('common.alertify')
@include('home.pages.auctions.auctions-js-script')


@stop