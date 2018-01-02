var eveapps = angular.module("myEventApp", []);
  eveapps.controller("eventControl", function($scope, $http){

    $http.get('include/select_event.php').then(function(response){
      $scope.events = response.data;
    });

    $scope.insertEvent = function(){
      $http({
        method: 'POST',
        url: 'include/insert_event.php',
        data: {event_name: $scope.event_name, datepicker: $scope.datepicker}
      }).then(function onSuccess(response) {
        // Handle success
        $scope.event_name = "";
        $scope.datepicker = "";
        $scope.selectEvent();

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(response.data,response.status,response.statusText);
      });
    }

    $scope.selectEvent = function(){
      $http({
        method: 'GET',
        url: 'include/select_event.php',
      }).then(function onSuccess(response) {
        // Handle success
        $scope.events = response.data;

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(respSocial2onse.data,response.status,response.statusText);
      });
    }

    $scope.deleteEvent = function(e_id){
      $http({
        method: 'POST',
        url: 'include/delete_event.php',
        data: {e_id: e_id}
      }).then(function onSuccess(response) {
        // Handle success
        $scope.selectEvent();

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(response.data,response.status,response.statusText);
      });
    }

});
