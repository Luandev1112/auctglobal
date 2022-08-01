 <script src="{{JS}}ngStorage.js"></script>
<script src="{{JS}}angular-messages.js"></script>


<script >
  var app = angular.module('academia', ['ngMessages']);
</script>

@include('common.angular-factory',array('load_module'=> FALSE))


<script>
app.controller('prepareCitiesData', function( $scope, $http, httpPreConfig) {


        
        $scope.getCities = function(selected_state) {

       
        route = '{{URL_GET_CITIES}}',
        data= {_method: 'post',
                 '_token':httpPreConfig.getToken(),
                   'state': selected_state
                 };

          $scope.cities =[];

          httpPreConfig.webServiceCallPost(route, data).then(function(result){

          $scope.cities    = result.data.cities;

          // $scope.city      = $scope.cities[0];

          

            });
      }

     
   
        $scope.initFunctions = function() 
        {
          <?php if (isset($record->state) && $record->state!='') {?>
          $scope.getCities({{$record->state}});

          // $scope.city =  {{ $record->city }};
          <?php } ?>
        }
      
});


</script>