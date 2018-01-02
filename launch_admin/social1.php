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
    <link rel="stylesheet" href="bootstrap/dist/css/simple-line-icons.css">
    <link rel="stylesheet" href="bootstrap/dist/css/font-awesome.min.css">

  </head>

  <body>
<?php include 'include/nav.php'; ?>
     <div ng-app="mySocial1App" ng-controller="social1Control" ng-init="selectSocial1()">
      <div class="container">

      <div class="form-group row"><h4>Enter & Update Social Media 1</h4></div>

      <div class="container-fluid">
          <div class="animated fadeIn">
              <div class="card card-default">
                  <div class="card-header">
                      <i class="fa fa-picture-o"></i> Social Icons
                  </div>
                  <div class="card-block">
                      <div class="row text-center">

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-tumblr-with-circle icons font-2xl d-block mt-4"></i>icon-tumblr-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-twitter-with-circle icons font-2xl d-block mt-4"></i>icon-twitter-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-facebook-with-circle icons font-2xl d-block mt-4"></i>icon-facebook-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-instagram-with-circle icons font-2xl d-block mt-4"></i>icon-instagram-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-linkedin-with-circle icons font-2xl d-block mt-4"></i>icon-linkedin-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-pinterest-with-circle icons font-2xl d-block mt-4"></i>icon-pinterest-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-github-with-circle icons font-2xl d-block mt-4"></i>icon-github-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-gplus-with-circle icons font-2xl d-block mt-4"></i>icon-gplus-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-skype-with-circle icons font-2xl d-block mt-4"></i>icon-skype-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-dribbble-with-circle icons font-2xl d-block mt-4"></i>icon-dribbble-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-behance-with-circle icons font-2xl d-block mt-4"></i>icon-behance-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-soundcloud-with-circle icons font-2xl d-block mt-4"></i>icon-soundcloud-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-spotify-with-circle font-2xl d-block mt-4"></i>icon-spotify-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-stumbleupon-with-circle icons font-2xl d-block mt-4"></i>icon-stumbleupon-with-circle
                        </div>

                        <div class="col-6 col-sm-4 col-md-3">
                            <i class="icon-youtube-with-circle icons font-2xl d-block mt-4"></i>icon-youtube-with-circle
                        </div>
                        </div>
                        <br>
                        <!--/.row-->
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- /.conainer-fluid -->
        <div class="form-group row">
            <label class="form-control-label" for="s1_link">Link:</label>
              <div class="col-4 col-lg-4">
                <input type="text" id="s1_link" name="s1_link" class="form-control" ng-model="s1_link">
            </div>
            <label class="form-control-label" for="s1_icons">Icons:</label>
              <div class="col-4 col-lg-4">
                <input type="text" id="s1_icons" name="s1_icons" class="form-control" ng-model="s1_icons">
            </div>
         </div>

          <input type="hidden" ng-model="s1_id">
          <button type="button" class="btn btn-primary" ng-show="btnInsert" ng-click="insertSocial1()"><span class="glyphicon glyphicon-save"></span>Insert</button>
  				<button type="button" class="btn btn-warning" ng-show="btnUpdate" ng-click="updateSocial1()"><span class="glyphicon glyphicon-edit"></span>Update</button>
       <br><br>

          <div class="col-md-12">
              <table class="table table-bordered">
                  <tr ng-repeat="sa in social1">
                    <td>{{sa.s1_link}}</td>
                    <td>{{sa.s1_icons}}</td>
                      <td>
                          <button type="button" class="btn btn-warning" ng-click="updateSo1Btn(sa.s1_id, sa.s1_link, sa.s1_icons)">
                            <span class="glyphicon glyphicon-edit"></span>Edit
                          </button>
                      </td>
                      <td>
                        <button type="button" class="btn btn-danger" ng-click="deleteSocial1(sa.s1_id)">
                        <span class="glyphicon glyphicon-remove"></span>Delete
                        </button>
                      </td>
                  </tr>
              </table>
          </div>
            <br>
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
    <script src="js/apps3.js"></script>

  </body>
</html>
