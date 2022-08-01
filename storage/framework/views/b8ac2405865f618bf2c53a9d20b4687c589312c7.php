 <script src="<?php echo e(JS); ?>ngStorage.js"></script>
<script src="<?php echo e(JS); ?>angular-messages.js"></script>


<script>
  var app = angular.module('academia', ['ngMessages']);
</script>

<?php echo $__env->make('common.angular-factory',array('load_module'=> FALSE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<script>
app.controller('prepareAuctionData', function( $scope, $http, httpPreConfig) {


        
        $scope.getSubCategories = function(selected_category) {

       
        route = '<?php echo e(URL_GET_AUCTION_SUB_CATEGORIES); ?>',
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



     
   
      $scope.initFunctions = function() 
      {
        <?php if (isset($record->category_id) && $record->category_id!='') {?>
          
            $scope.getSubCategories(<?php echo e($record->category_id); ?>);

        <?php } ?>
      }




      $scope.getBidHistory = function(ab_id) {

       
        route = '<?php echo e(URL_BID_HISTORY); ?>',
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