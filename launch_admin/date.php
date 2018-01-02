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
     <div ng-app="myDateApp" ng-controller="dateControl" ng-init="selectDate()">
      <div class="container">

      <div class="form-group row"><h4>Enter the Date for the Countdown</h4></div>
      <br/>
        <div class="form-group row">
            <label class="form-control-label" for="year">Year:</label>
              <div class="col-3 col-lg-3">
                <input type="text" name="year" class="form-control" ng-model="year">
            </div>
            <label class="form-control-label" for="month">Month:</label>
              <div class="col-3 col-lg-3">
                <input type="text" name="month" class="form-control" ng-model="month">
            </div>
            <label class="form-control-label" for="day">Day:</label>
              <div class="col-3 col-lg-3">
                <input type="text" name="day" class="form-control" ng-model="day">
            </div>
         </div>

          <input type="hidden" ng-model="d_id">
          <button type="button" class="btn btn-primary" ng-show="btnInsert" ng-click="insertDate()">
            <span class="glyphicon glyphicon-save"></span>Update
          </button>
       <br><br>

          <div class="col-md-12">
              <table class="table table-bordered">
                  <tr ng-repeat="d in due">
                    <td>{{d.year}}</td>
                    <td>{{d.month}}</td>
                    <td>{{d.day}}</td>
                      <td>
                          <button class="btn btn-success btn-xs" ng-click="updateDate(d.d_id, d.year, d.month, d.day)">
                              <span class="glyphicon glyphicon-edit"></span> Edit
                          </button>
                      </td>
                  </tr>
              </table>
          </div>

         </div>
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
    <script src="js/apps5.js"></script>

  </body>
</html>
