var app = angular.module("myEmailApp",[]);
 app.controller("emailcontrol", function($scope, $http){

    $scope.email = {value:''};

    $scope.btnName = "SEND";

    $scope.emailRegex = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;

		$scope.insertEmail = function(){
				$http({
				 method: 'POST',
				 url: 'launch_admin/include/insert_email.php',
				 data: {email: $scope.email.value, btnName: $scope.btnName}
			 }).then(function onSuccess(response) {
         // Handle success
         $scope.email = {value:''};

          console.log(response.data,response.status,response.statusText);

        }).catch(function onError(response) {
          // Handle error
          console.log(response.data,response.status,response.statusText);
        });
			}
});
