 @include('common.angular-factory')
<script>

 
 app.controller('AuctionController', function ($scope, $http, httpPreConfig)
  {

      $scope.bidders = []; 

      $scope.selected_bidder  = null;
      $scope.form_show = false;

      $scope.auction_slug=null;
    

      $scope.toggleForm = function(){
        if($scope.form_show)
          $scope.form_show = false;
        else
          $scope.form_show = true;
      }


 $scope.getBidders = function (auction_id) {

  route = '{{URL_GET_AUCTION_BIDDERS}}';
  data    = {   _method: 'post', 
                  '_token':httpPreConfig.getToken(), 
                 'id':auction_id 
               };
               
      httpPreConfig.webServiceCallPost(route, data).then(function(result){

        result = result.data.bidders;
        

        bidders = [];
 
        angular.forEach(result, function(value, key) {
            bidders.push(value);
          })

        $scope.bidders = bidders;

        $scope.auction_slug = '{{$record->slug}}';

        // console.log({{$record->slug}});
        $scope.bidders_length  = $scope.bidders.length;

      

        // console.log(result);
     
        });

}

    $scope.initFunctions = function() 
    {
      <?php if (isset($record->id) && $record->id!='') {?>
       
      $scope.getBidders({{$record->id}});

      <?php } ?>
    }


$scope.getBidderDetails = function (bidder) {
   route = '';
   data    = {   _method: 'post', 
                  '_token':httpPreConfig.getToken(), 
                  'bidder_id': bidder.id
               };
        $scope.selected_bidder = bidder;        
        $scope.form_show = false;
        httpPreConfig.
        httpPreConfig.webServiceCallPost(route, data).then(function(result){
        result = result.data


     
        });
}

});
 
  
</script>