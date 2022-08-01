
<script>
  var app = angular.module('academia', ['ngMessages']);
</script>
@include('common.angular-factory',array('load_module'=> TRUE))


<script>

app.controller('addSubscriber', function ($scope, $http, httpPreConfig)
{

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
          <?php if (isset($faqs) && count($faqs)) {?>
             
           $scope.getCategoryFaqs({{$faqs[0]->id}});
              
          <?php } ?>
      }

});
 
</script>