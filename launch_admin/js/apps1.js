var eapps = angular.module("myEmailApp", []);
 eapps.controller("emailcontrol", function($scope, $http){

    $scope.displayEmail = function(){
      $http({
       method: 'GET',
       url: 'include/select_email.php'
      }).then(function onSuccess(response) {
        // Handle success
         $scope.emails = response.data;

         console.log($scope.emails);

       }).catch(function onError(response) {
         // Handle error
         console.log(response.data,response.status,response.statusText);
      });
    }

    $scope.deleteEmail = function(id){
      $http({
       method: 'POST',
       url: 'include/delete_email.php',
       data: {id: id}
     }).then(function onSuccess(response) {
        // Handle success
         $scope.displayEmail();

       }).catch(function onError(response) {
         // Handle error
         console.log(response.data,response.status,response.statusText);
      });
     }
});
