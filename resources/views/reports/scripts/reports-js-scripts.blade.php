 <script src="{{JS}}ngStorage.js"></script>
<script src="{{JS}}angular-messages.js"></script>


<script >
  var app = angular.module('academia', ['ngMessages']);
</script>

@include('common.angular-factory',array('load_module'=> FALSE))


<script>
app.controller('prepareReportsData', function( $scope, $http, httpPreConfig) {


        $scope.auctions = null;

        $scope.all_auctions = [];
        
       

       $scope.getSellerAuctions = function(start_date,end_date,selected_seller) {

        
          route = '{{URL_GET_SELLER_AUCTIONS}}',

          data= {_method: 'post',
                 '_token':httpPreConfig.getToken(),
                   'user_id': selected_seller,
                   'start_date': start_date,
                   'end_date': end_date
               
                 };

          httpPreConfig.webServiceCallPost(route, data).then(function(result){

            // console.log("RESULTS "+JSON.stringify(result.data.auctions));

            $scope.auctions    = result.data.auctions;


            all_auctions = [];
   
             angular.forEach(result.data.auctions, function(value, key) {
              all_auctions.push(value);
            })

            $scope.all_auctions = all_auctions;

          });
      }


     
   
      
});


</script>