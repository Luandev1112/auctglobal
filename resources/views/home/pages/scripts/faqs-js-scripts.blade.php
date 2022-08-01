

<script >
  var app = angular.module('academia', ['ngMessages']);
</script>

@include('common.angular-factory',array('load_module'=> TRUE))


<script>
app.controller('FaqController', function( $scope, $http, httpPreConfig) {


        
        $scope.getCategoryFaqs = function(selected_category) {

       
        route = '{{URL_GET_CATEGORY_FAQS}}',
        data= {_method: 'post',
                 '_token':httpPreConfig.getToken(),
                   'category_id': selected_category
                 };

          $scope.category_faqs =[];

          httpPreConfig.webServiceCallPost(route, data).then(function(result){

          $scope.category_faqs    = result.data.sub_categories;

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