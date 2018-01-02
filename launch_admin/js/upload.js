var app = angular.module("myImage", []);
app.directive("fileInput", function($parse){
     return{
          link: function($scope, element, attrs){
               element.on("change", function(event){
                    var files = event.target.files;
                    $parse(attrs.fileInput).assign($scope, element[0].files);
                    $scope.$apply();
               });
          }
     }
});
app.controller("myImageController", function($scope, $http){
     $scope.uploadFile = function(){
          var form_data = new FormData();
          angular.forEach($scope.files, function(file){
               form_data.append('file', file);
          });
          $http({
            method: 'POST',
            url: 'include/insert_image.php',
            data: form_data,
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined,'Process-Data': false}
          }).then(function onSuccess(response) {
            // Handle success
            alert(response.data);
            $scope.selectImages();

            console.log(response.data,response.status,response.statusText);

          }).catch(function onError(response) {
            // Handle error
            console.log(response.data,response.status,response.statusText);
          });
     }

     $scope.selectImages = function(){
       $http({
         method: 'GET',
         url: 'include/select_image.php'
       }).then(function onSuccess(response) {
         // Handle success
         $scope.images = response.data;

         console.log(response.data,response.status,response.statusText);

       }).catch(function onError(response) {
         // Handle error
         console.log(response.data,response.status,response.statusText);
       });
     }

     $scope.deleteImages = function(name){
       $http({
         method: 'POST',
         url: 'include/delete_image.php',
         data: {name: name}
       }).then(function onSuccess(response) {
         // Handle success

           $scope.selectImages();

         console.log(response.data,response.status,response.statusText);

       }).catch(function onError(response) {
         // Handle error
         console.log(response.data,response.status,response.statusText);
       });
     }
});
