 
<?php 
  $recent_buyers=[];

  $recent_buyers = App\Auction::getRecentBuyers();
  $currency_code = getSetting('currency_code','site_settings');
  ?>

 <!--RECENT BUYERS SECTION-->
    @if (count($recent_buyers))
    <section class="au-similar-products">
        <div class="container-fluid">
            <div class="row">
              
              <div class="col-lg-12 col-md-12 col-sm-12 au-deals">
                <h2 class="text-center"> {{getPhrase('recent_buyers')}}</h2> 
              </div>
                    
               <div class="screenshot-similar-product">

                @foreach ($recent_buyers as $auction)


                <div class="card au-similar-card">

    
                   <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" data-toggle="tooltip" title="{{$auction->title}}" data-placement="bottom">
                  <img class="img-fluid similar-img" src="{{getAuctionImage($auction->image,'auction')}}" alt="{{$auction->title}}"></a>


                  <ul class="action-card-details">
                      <li><p><strong>{{$auction->username}}</strong>
                        <span class="pull-right"><b>{{$currency_code}}{{$auction->paid_amount}}</b></span></p>
                      </li>
                      
                  </ul>
                  
                </div>
                @endforeach
                                                                                                       
            </div>
          </div>    
        </div>
    </section>
    @endif
    
    <!--RECENT BUYERS SECTION-->

   