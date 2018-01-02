var dapps = angular.module("myDateApp", []);
 dapps.controller("dateControl", function($scope, $http){

   $scope.btnInsert = true;

  $scope.insertDate = function(){
      $http({
       method: 'POST',
       url: 'include/update_date.php',
       data: {d_id: $scope.d_id, year: $scope.year, month: $scope.month, day: $scope.day}
     }).then(function onSuccess(response) {
        // Handle success
        $scope.selectDate();

         console.log(response.data,response.status,response.statusText);

       }).catch(function onError(response) {
         // Handle error
         console.log(response.data,response.status,response.statusText);
       });
    }

    $scope.selectDate = function(){
      $http({
       method: 'GET',
       url: 'include/select_date.php',
     }).then(function onSuccess(response) {
     // Handle success
      $scope.due = response.data;

        	console.log(response.data,response.status,response.statusText);

        }).catch(function onError(response) {
          // Handle error
          console.log(response.data,response.status,response.statusText);
       });
     }

     $scope.updateDate = function(d_id, year, month, day) {
         $scope.d_id = d_id;
         $scope.year = year;
         $scope.month = month;
         $scope.day = day;
     }

});
