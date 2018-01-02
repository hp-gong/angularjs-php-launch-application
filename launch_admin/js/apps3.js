var s1apps = angular.module("mySocial1App", []);
  s1apps.controller("social1Control", function($scope, $http){

    $http.get('include/select_social1.php').then(function(response){
      $scope.social1 = response.data;
    });

    $scope.insertSocial1 = function(){
      $http({
        method: 'POST',
        url: 'include/insert_social1.php',
        data: {s1_link: $scope.s1_link, s1_icons: $scope.s1_icons}
      }).then(function onSuccess(response) {
        // Handle success
        $scope.s1_link = "";
        $scope.s1_icons = "";
        $scope.selectSocial1();

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(response.data,response.status,response.statusText);
      });
    }

    $scope.selectSocial1 = function(){
      $http({
        method: 'GET',
        url: 'include/select_social1.php',
      }).then(function onSuccess(response) {
        // Handle success
        $scope.social1 = response.data;

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(response.data,response.status,response.statusText);
      });
    }

    $scope.btnInsert = true;

    $scope.updateSocial1 = function(s1_id){
      $scope.btnUpdate = false;
      $scope.btnInsert = true;
      $http({
        method: 'POST',
        url: 'include/update_social1.php',
        data: {s1_id: $scope.s1_id, s1_link: $scope.s1_link, s1_icons: $scope.s1_icons}
      }).then(function onSuccess(response) {
        // Handle success
        $scope.s1_link = "";
        $scope.s1_icons = "";
        $scope.selectSocial1();

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(response.data,response.status,response.statusText);
      });
    }

    $scope.updateSo1Btn = function(s1_id, s1_link, s1_icons) {
      $scope.btnInsert = false;
      $scope.btnUpdate = true;
      $scope.s1_id = s1_id;
      $scope.s1_link = s1_link;
      $scope.s1_icons = s1_icons;
    }

    $scope.deleteSocial1 = function(s1_id){
      $http({
        method: 'POST',
        url: 'include/delete_social1.php',
        data: {s1_id: s1_id}
      }).then(function onSuccess(response) {
        // Handle success
        $scope.selectSocial1();

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(response.data,response.status,response.statusText);
      });
    }

});
