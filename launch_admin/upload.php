<?php
include("include/select_session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Launch Admin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
  </head>
<body>

<?php include 'include/nav.php'; ?>

 <div class="container" ng-app="myImage" ng-controller="myImageController" ng-init="selectImages()">

      <div class="form-group row"><h4>Upload Background Image</h4></div>
      <br/>
     <div class="col-md-4">
          <input type="file" name="files" file-input="files" />
     </div><br />
     <div class="col-md-6">
          <button class="btn btn-info" ng-click="uploadFile()">Upload</button>
     </div>
     <div style="clear:both"></div>
     <br /><br />
     <table class="table table-bordered">
         <tr ng-repeat="image in images">
           <td><img ng-src="../images/{{image.name}}" width="200" height="200" style="padding:16px; border:1px solid #f1f1f1; margin:16px;" /></td>
             <td>
               <button type="button" class="btn btn-danger" ng-click="deleteImages(image.name);">
               <span class="glyphicon glyphicon-remove"></span>Delete
               </button>
             </td>
         </tr>
     </table>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Angular JS v1.6.6 -->
<script src="js/angular.min.js"></script>
<!-- Ajax -->
<script src="js/upload.js"></script>
</body>
</html>
