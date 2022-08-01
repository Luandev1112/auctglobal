<?php 
//Testimonies
$testimonies = \App\Testmony::getTestimonies();
?>

@if (count($testimonies))
<!--Clients Section-->
    <section class="au-clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 au-deals">
                  
                    <h2 class="text-center">{{getPhrase('words_from_our_clients')}}</h2> </div>
                <div class="screenshot-method">

                    @foreach ($testimonies as $testimony)
                    <div class="au-transform animated fadeInUp wow animated" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="au-texts">
                            <p class="au-text-style"> {{$testimony->testmony}}</p>
                        </div>
                        <div class="triangle-down"></div>
                        <div class="media mr-2 mt-5">
                            <div class="media-body mr-4">
                                <h5 class="mt-3 text-right"> {{$testimony->username}} </h5>
                               
                            </div> 
                            <img src="{{getProfilePath($testimony->image)}}" alt="{{$testimony->username}}" class="mr-3 rounded-circle testimony-user"> 
                        </div>
                    </div>
                    @endforeach
                   

                   

                </div>
            </div>
        </div>
    </section>
    <!--Clients Section-->
@endif