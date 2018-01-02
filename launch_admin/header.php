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
    <link rel="stylesheet" href="textAngular/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" href="textAngular/font-awesome/css/textAngular.css">
  	<link rel="stylesheet" href="textAngular/font-awesome/css/style.css">
  </head>

  <body>

<?php include 'include/nav.php'; ?>
     <div ng-app="myHeaderApp" ng-controller="headerControl" ng-init="selectHeader()">

       <div class="container">

        <div class="form-group row"><h4>Update Info</h4></div>
        <br/>
        <div class="form-group row">
        <label class="col-md-1 form-control-label" for="title">Title:</label>
        <div class="col-9 col-lg-9">
        <input type="text" id="title" name="title" class="form-control" ng-model="title">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-md-1 form-control-label" for="info1">Info 1:</label>
        <div class="col-9 col-lg-9">
        <input type="text" name="info1" class="form-control" ng-model="info1">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-md-1 form-control-label" for="info2">Info 2:</label>
          <div class="col-9 col-lg-9">
         <div text-angular ng-model="info2" name="info2" ta-text-editor-class="clearfix border-around" ta-html-editor-class="border-around"></div>
        </div>
        </div>

        <div class="form-group row">
        <label class="col-md-1 form-control-label" for="info3">Info 3:</label>
        <div class="col-9 col-lg-9">
        <input type="text" name="info3" class="form-control" ng-model="info3">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-md-1 form-control-label" for="footer1">Footer1:</label>
        <div class="col-9 col-lg-9">
          <div text-angular ng-model="footer1" name="footer1" ta-text-editor-class="clearfix border-around" ta-html-editor-class="border-around"></div>
        </div>
        </div>

        <div class="form-group row">
        <label class="col-md-1 form-control-label" for="footer2">Footer2:</label>
        <div class="col-9 col-lg-9">
          <div text-angular ng-model="footer2" name="footer2" ta-text-editor-class="clearfix border-around" ta-html-editor-class="border-around"></div>
        </div>
        </div>

            <input type="hidden" ng-model="h_id">
            <button type="button" class="btn btn-primary" ng-show="btnInsert" ng-click="insertHeader()">
              <span class = "glyphicon glyphicon-save"></span>Update
            </button>
         <br><br>

           <div class="col-12 col-lg-12">
             <span ng-repeat="hr in headers">
                   <p><b>Title:</b> {{hr.title}}</p>
                   <p><b>Info1:</b> {{hr.info1}}</p>
                   <p><b>Info2:</b> {{hr.info2}}</p>
                   <p><b>Info3:</b> {{hr.info3}}</p>
                   <p><b>Footer1:</b> {{hr.footer1}}</p>
                   <p><b>Footer2:</b> {{hr.footer2}}</p>
                     <p>
                         <button class="btn btn-warning btn-xs" ng-click="updateHeader(hr.h_id, hr.title, hr.info1, hr.info2, hr.info3, hr.footer1, hr.footer2)">
                             <span class="glyphicon glyphicon-edit"></span> Edit
                         </button>
                     </p>
                 </span>
         </div>
         <br><br>
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
    <script src="js/apps2.js"></script>
    <!-- textAngular -->
    <script src="textAngular/dist/textAngular-rangy.min.js" type="text/javascript"></script>
    <script src="textAngular/dist/textAngular-sanitize.min.js" type="text/javascript"></script>
    <script src="textAngular/dist/textAngular.min.js" type="text/javascript"></script>

  </body>
</html>
