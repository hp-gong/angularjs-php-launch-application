<?php
include("include/select_login1.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex">
          <title>Launch Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="bootstrap/dist/css/signin.css">
    </head>
<body>
  <div class="container">

    <form class="form-signin" action="#" method="POST" enctype="multipart/form">
      <h2 class="form-signin-heading">Please sign in</h2>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="user_password" name="user_password"  class="form-control" placeholder="Password" required>
      <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
    </form>

  </div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document song-app="myNav" the pages load faster -->
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
