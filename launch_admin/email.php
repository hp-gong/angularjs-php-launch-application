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
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
<?php include 'include/nav.php'; ?>
    <div class="container">
      <div ng-app="myEmailApp" ng-controller="emailcontrol" ng-init="displayEmail()">
        <div id="csvEmail">
        <table class="table table-bordered">
          <thead>
      	  <tr>
          <th style="border: 1px solid black; text-align: center;" scope="col">Email</th>
      	  </tr>
      	  </thead>
      	  <tbody>
             <tr ng-repeat="e in emails">
                 <td style="border: 1px solid black;" align="center">{{e.email}}</td>
                 <input type="hidden" ng-model="email">
            </tr>
          </tbody>
          </table>
          <a id="export" class="btn btn-primary btn-xs" href="#">Export as CSV</a>
          <input type="hidden" ng-model="id">
          <button ng-click="deleteEmail(e.id)" class="btn btn-danger btn-xs">Delete</button>
          </div>
      </div> <!-- myEmailApp end -->
    </div> <!-- container end -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Angular JS v1.6.6 -->
    <script src="js/angular.min.js"></script>
    <!-- Ajax -->
    <script src="js/apps1.js"></script>
    <!-- Export -->
    <script src="js/export_email.js"></script>
  </body>

</html>
