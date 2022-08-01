<?php 
$logos = \App\User::getCompanyLogos();

?>
@if (count($logos)>4)
<!--Patners Section-->
    <section class="au-patner">
        <div class="container">

            <div class="row">
                <div class="screenshot-patner">

                    @foreach($logos as $logo)
                    <div>
                        <a href="{{URL_HOME_AUCTIONS}}" title="{{$logo->username}}"> 
                            <img src="{{getCompanyLogo($logo->company_logo,'logo')}}" alt="{{$logo->username}}" class="img-fluid partner-img"> 
                        </a>
                    </div>
                    @endforeach

                   
                </div>
            </div>

        </div>
    </section>
    <!--Patners Section-->
@endif    