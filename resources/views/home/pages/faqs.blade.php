@extends($layout)


@section('custom_div')
<div ng-controller="auctionsController" ng-init="initFunctions()">
@stop

@section('content')

    <!--FAQ BODY SECTION-->
    
     <section class="au-categorys">
      <div class="container">
        @if ($faqs)
         <div class="row"> 
           
           <!--ASIDE BAR SECTION-->
            <div class="col-lg-3 col-md-3 col-sm-12">
            
            <!--All Category Section-->
             <div class="au-all-category">
                <ul class="au-list-item">
                  <?php $c=0;?>
                  @foreach ($faqs as $key=>$faq)
                  <?php 
                  $class='';
                  $c=$c+1;
                  
                  if ($c==1)
                    $class='active';

                  ?>

                
                  <input id="first_fc_id" type="hidden" value="{{$faq->id}}">

                  <li id="{{$faq->id}}" class="{{$class}}"><a href="javascript:void(0);" ng-click="getCategoryFaqs({{$faq->id}})"> {{$faq->title}} </a></li>
                  @endforeach
                </ul>               
             </div>

            </div> 
            


            <!--PRODUCTS SECTION-->
             <div class="col-lg-9 col-md-9 col-sm-12  ">
             <div class=" au-wrapper-main">
                
                <div class="cs-card cart-card card-show">

                 <div class="cas-card-header">
                   
                   {{$title}}
                   
                </div>

               <div class="row">


                <div id="faqs_block" class="col-sm-12">

                  <div class="cs-card-content card-items-list" ng-show="faq_length>0">


 

                    <div class="panel panel-default faq-panel" ng-repeat="question in category_faqs">


                      <div class="panel-heading">
                        <h5 class="panel-title ">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse@{{question.id}}" class="faq-ques faq-panel-title">
                            @{{question.question_text}}
                          </a>
                        </h5>
                      </div>
                      <div id="collapse@{{question.id}}" class="panel-collapse collapse">
                        <div class="panel-body faq-panel-body">
                            
                          @{{question.answer_text}}
              
                        </div>
                      </div>


                    </div>
                 </div>

                 <h4 ng-if = "faq_length <= 0 " class="text-center"> 
                  <div class="empty-data">
                    No FAQs Available
                  </div>
                 </h4>

               </div>
               
             
            </div>  
          </div>

          </div>
          </div>

         </div>
         @else
         <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h4 class="text-center"> {{getPhrase('no_faqs_available')}} </h4>
              </div>
          </div>
         @endif
      </div>    
    </section>
    

    <!--FAQ BODY SECTION-->


    <!--RECENT WINNERS SECTION-->
    @include('home.pages.auctions.recent-winners')
    <!--RECENT WINNERS SECTION-->

    @include('home/testimonials')

    @include('home/partners')


@endsection


@section('footer_scripts')

@include('common.validations')
@include('common.alertify')
@include('home.pages.auctions.auctions-js-script')

@endsection

