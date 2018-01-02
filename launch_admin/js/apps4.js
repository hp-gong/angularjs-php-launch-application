var s2apps = angular.module("mySocial2App", []);
  s2apps.controller("social2Control", function($scope, $http){

    $http.get('include/select_social2.php').then(function(response){
      $scope.social2 = response.data;
    });

    $scope.insertSocial2 = function(){
      $http({
        method: 'POST',
        url: 'include/insert_social2.php',
        data: {s2_link: $scope.s2_link, s2_icons: $scope.s2_icons}
      }).then(function onSuccess(response) {
        // Handle success
        $scope.s2_link = "";
        $scope.s2_icons = "";
        $scope.selectSocial2();

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(response.data,response.status,response.statusText);
      });
    }

    $scope.selectSocial2 = function(){
      $http({
        method: 'GET',
        url: 'include/select_social2.php',
      }).then(function onSuccess(response) {
        // Handle success
        $scope.social2 = response.data;

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(response.data,response.status,response.statusText);
      });
    }

    $scope.btnInsert = true;

    $scope.updateSocial2 = function(s1_id){
      $scope.btnUpdate = false;
      $scope.btnInsert = true;
      $http({
        method: 'POST',
        url: 'include/update_social2.php',
        data: {s2_id: $scope.s2_id, s2_link: $scope.s2_link, s2_icons: $scope.s2_icons}
      }).then(function onSuccess(response) {
        // Handle success
        $scope.s2_link = "";
        $scope.s2_icons = "";
        $scope.selectSocial2();

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(response.data,response.status,response.statusText);
      });
    }

    $scope.updateSo2Btn = function(s2_id, s2_link, s2_icons) {
      $scope.btnInsert = false;
      $scope.btnUpdate = true;
      $scope.s2_id = s2_id;
      $scope.s2_link = s2_link;
      $scope.s2_icons = s2_icons;
    }

    $scope.deleteSocial2 = function(s2_id){
      $http({
        method: 'POST',
        url: 'include/delete_social2.php',
        data: {s2_id: s2_id}
      }).then(function onSuccess(response) {
        // Handle success
        $scope.selectSocial2();

        console.log(response.data,response.status,response.statusText);

      }).catch(function onError(response) {
        // Handle error
        console.log(response.data,response.status,response.statusText);
      });
    }

});
