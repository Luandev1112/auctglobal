<script src="{{JS}}ngStorage.js"></script>
<script src="{{JS}}angular-messages.js"></script>

<script >
  var app = angular.module('academia', ['ngMessages']);
</script>

@include('common.angular-factory',array('load_module'=> FALSE))


<script>

 
app.controller('prepareCitiesData', function ($scope, $http, httpPreConfig)
{

     $scope.states = []; 

     $scope.getStates = function (country_id) {

      route   = '{{URL_GET_STATES}}';
      data    = {   _method: 'post', 
                    '_token':httpPreConfig.getToken(), 
                    'id':country_id 
                };
                   
          httpPreConfig.webServiceCallPost(route, data).then(function(result){

            $scope.states =[];
            
            $scope.states = result.data.states;
            
            });
    }


    $scope.initFunctions = function() 
    {
      <?php if (isset($record->country_id) && $record->country_id!='') {?>
       
      $scope.getStates({{$record->country_id}});

      <?php } ?>
    }


});
 
  
</script>