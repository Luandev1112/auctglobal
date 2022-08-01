
<script>
  var app = angular.module('academia', ['ngMessages']);
</script>

@include('common.angular-factory',array('load_module'=> FALSE))


<script>
app.controller('auctionsController', function( $scope, $http, httpPreConfig) {

     $scope.response = [];

     $scope.category_faqs =[]; 

     $scope.saveSubscriber = function (subscriber_email) {

      if (!subscriber_email) {
        alertify.error('Please enter valid email');
        return false;

      } else {
      
        route   = '{{URL_ADD_SUBSCRIBER}}';
        data    = {   _method: 'post', 
                      '_token':httpPreConfig.getToken(), 
                      'email':subscriber_email 
                  };
                     
        httpPreConfig.webServiceCallPost(route, data).then(function(result){

          $scope.response = result.data;

          if ($scope.response.status==1)
            alertify.success($scope.response.message);
          else 
            alertify.error($scope.response.message);
        });
      }
    }


     
     $scope.getCategoryFaqs = function(selected_category) {

        $('li').removeClass();
        $('#'+selected_category+'').addClass('active');

        route = '{{URL_GET_CATEGORY_FAQS}}',
        data= {_method: 'post',
                 '_token':httpPreConfig.getToken(),
                   'category_id': selected_category
                 };

          category_faqs = [];

          httpPreConfig.webServiceCallPost(route, data).then(function(result){

          result = result.data.category_faqs;
        
          category_faqs = [];
   
          angular.forEach(result, function(value, key) {
              category_faqs.push(value);
          })

          $scope.category_faqs = category_faqs;
          $scope.faq_length = $scope.category_faqs.length;
          });
      }


   
      $scope.initFunctions = function() 
      {
      
        <?php 
        if (isset($route) && $route=='faqs') {
          if ($faqs) { ?>
            $scope.getCategoryFaqs({{$faqs[0]->id}});
          <?php }
        }
        ?>
          
         


           <?php 
          
           if (isset($route) && $route=='billing-address') { 

            if (isset($record->billing_country) && $record->billing_country>0) {?>

                $scope.getStates({{$record->billing_country}});

           <?php } } elseif (isset($route) && $route=='shipping-address') {

            if (isset($record->shipping_country) && $record->shipping_country>0) {?> 

              $scope.getStates({{$record->shipping_country}});


           <?php } } elseif (isset($record->country_id) && $record->country_id!='') {?>

                $scope.getStates({{$record->country_id}});

           <?php } ?>



           <?php 
           if (isset($route) && $route=='billing-address') {

            if (isset($record->billing_state) && $record->billing_state>0) { ?>

                  $scope.getCities({{$record->billing_state}});

            <?php } } elseif (isset($route) && $route=='shipping-address') {

              if (isset($record->shipping_state) && $record->shipping_state>0) { ?>

                  $scope.getCities({{$record->shipping_state}});

            <?php  } } elseif (isset($record->state_id) && $record->state_id!='') {?>

                  $scope.getCities({{$record->state_id}});

           <?php } ?>
      }





        
      $scope.getSubCategories = function(selected_category) {

       
        route = '{{URL_GET_AUCTION_SUB_CATEGORIES}}',
        data= {_method: 'post',
                 '_token':httpPreConfig.getToken(),
                   'category_id': selected_category
                 };

          $scope.sub_categories =[];

          httpPreConfig.webServiceCallPost(route, data).then(function(result){

          $scope.sub_categories    = result.data.sub_categories;

          // $scope.branch_id      = $scope.branches[0];

          

            });
      }


      
      $scope.getStates = function(selected_country) {


        route = '{{URL_GET_STATES}}',
        data= {_method: 'post',
                 '_token':httpPreConfig.getToken(),
                   'id': selected_country
                 };

          $scope.states =[];

          httpPreConfig.webServiceCallPost(route, data).then(function(result){

          $scope.states    = result.data.states;
     
          });
      }


       $scope.getCities = function(selected_state) {

        route = '{{URL_GET_CITIES}}',
        data= {_method: 'post',
                 '_token':httpPreConfig.getToken(),
                   'id': selected_state
                 };

          $scope.cities =[];

          httpPreConfig.webServiceCallPost(route, data).then(function(result){

          $scope.cities    = result.data.cities;
          });
      }






    $scope.addtoFavourites = function (auction_id) {

      if (!auction_id) {
        return false;

      } else {
      
        route   = '{{URL_ADD_FAVAUCTION}}';
        data    = {   _method: 'post', 
                      '_token':httpPreConfig.getToken(), 
                      'auction_id':auction_id 
                  };
                     
        httpPreConfig.webServiceCallPost(route, data).then(function(result){

          $scope.response = result.data;

          if ($scope.response.status==1)
            alertify.success($scope.response.message);
          else 
            alertify.error($scope.response.message);
        });
      }
  }




      $scope.getBidHistory = function(ab_id) {

        route = '{{URL_BID_HISTORY}}',
        data= {_method: 'post',
                 '_token':httpPreConfig.getToken(),
                   'id': ab_id
                 };

          $scope.bid_history =[];

          httpPreConfig.webServiceCallPost(route, data).then(function(result){

          $scope.bid_history    = result.data.records;

          // $scope.branch_id      = $scope.branches[0];

          

            });
      }


     



      
});


</script>