<?php
include("include/select_session.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/dist/css/jquery-ui.css">
</head>
<body>

<?php include 'include/nav.php'; ?>

<div ng-app="myEventApp" ng-controller="eventControl" ng-init="selectEvent()">

<div class="container">

<div class="form-group row"><h4>Enter Upcoming Promotion / Events</h4></div>

<div class="form-group row">
    <label class="form-control-label" for="event_name">Events:</label>
      <div class="col-4 col-lg-4">
        <input type="text" id="event_name" name="event_name" class="form-control" ng-model="event_name">
    </div>
    <label class="form-control-label" for="date">Count Down Date:</label>
      <div class="col-4 col-lg-4">
        <input type="date" id="datepicker" name="datepicker" class="form-control" ng-model="datepicker">
    </div>
 </div>

  <input type="hidden" ng-model="e_id">
  <button type="button" class="btn btn-primary" ng-click="insertEvent()"><span class="glyphicon glyphicon-save"></span>Insert</button>
<br><br>

  <div class="col-md-12">
      <table class="table table-bordered">
          <tr ng-repeat="so in events">
            <td>{{so.event_name}}</td>
            <td>{{so.datepicker}}</td>
              <td>
                <button type="button" class="btn btn-danger" ng-click="deleteEvent(so.e_id);">
                <span class="glyphicon glyphicon-remove"></span>Delete
                </button>
              </td>
          </tr>
      </table>
  </div>
    <br>
 </div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document song-app="myNav" the pages load faster -->
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Angular JS v1.6.6 -->
<script src="js/angular.min.js"></script>
<!-- Ajax -->
<script src="js/apps.js"></script>

<script src="bootstrap/dist/js/jquery-ui.js"></script>

<script>
    $("#datepicker").datepicker({
        });
</script>

</body>
</html>
