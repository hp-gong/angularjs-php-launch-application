var happs = angular.module("myHeaderApp", ['textAngular']);
 happs.controller("headerControl", function($scope, $http){

   $scope.btnInsert = true;

  $scope.insertHeader = function(){
      $http({
       method: 'POST',
       url: 'include/update_header.php',
       data: {h_id: $scope.h_id, title: $scope.title, info1: $scope.info1, info2: $scope.info2, info3: $scope.info3, footer1: $scope.footer1, footer2: $scope.footer2}
     }).then(function onSuccess(response) {
        // Handle success
        $scope.selectHeader();

         console.log(response.data,response.status,response.statusText);

       }).catch(function onError(response) {
         // Handle error
         console.log(response.data,response.status,response.statusText);
       });
    }

    $scope.selectHeader = function(){
      $http({
       method: 'GET',
       url: 'include/select_header.php',
     }).then(function onSuccess(response) {
     // Handle success
      $scope.headers = response.data;

        	console.log(response.data,response.status,response.statusText);

        }).catch(function onError(response) {
          // Handle error
          console.log(response.data,response.status,response.statusText);
       });
     }

     $scope.updateHeader = function(h_id, title, info1, info2, info3, footer1, footer2) {
         $scope.h_id = h_id;
         $scope.title = title;
         $scope.info1 = info1;
         $scope.info2 = info2;
         $scope.info3 = info3;
         $scope.footer1 = footer1;
         $scope.footer2 = footer2;
     }

});
