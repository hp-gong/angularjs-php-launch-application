<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Launch - landing page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div id="title_logo"></div>
				</div>
			</div>
		</div>
	</nav>
	<?php
	include 'launch_admin/functions/db2.php';
	global $conn;
	$sql1 = "SELECT * FROM images";
	$result1 = $conn->query($sql1);
	while($row1 = $result1->fetch(PDO::FETCH_ASSOC)){
	echo '<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/'.$row1['name'].');" data-stellar-background-ratio="0.5">';
	}
	?>
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<div id="info_1"></div>
							<div class="simply-countdown simply-countdown-one"></div>
							<div class="row">
							<div id="info_2"></div>
								<div ng-app="myEmailApp" ng-controller="emailcontrol">
								<form class="form-inline" id="fh5co-header-subscribe" name="myEmailForm" novalidate>
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" ng-model="email.value" ng-pattern="emailRegex" required>
											<input type="hidden" ng-model="id" />
											<button type="submit" class="btn btn-primary" id="onSubmit" ng-model="button" ng-disabled="myEmailForm.$invalid || myEmailForm.$pristine || myEmailForm.email.$dirty && myEmailForm.email.$invalid" ng-click="insertEmail(email); myEmailForm.$setPristine();">{{btnName}}</button>
										</div>
								  </div>
									<span style="color:red" ng-show="myEmailForm.email.$dirty && myEmailForm.email.$invalid">
									<span ng-show="myEmailForm.email.$error.required">Email is required.</span>
									<span ng-show="myEmailForm.email.$error.email">Invalid email address.</span>
									</span>
								</form>
							   </div>
								<ul class="fh5co-social-icons">
									<?php
									include 'launch_admin/functions/db2.php';
									global $conn;
									$sql2 = "SELECT * FROM social1";
									$result2 = $conn->query($sql2);
									while($row2 = $result2->fetch(PDO::FETCH_ASSOC)){
									echo '<li><a href="'.$row2['s1_link'].'"><i class="'.$row2['s1_icons'].'"></i></a></li>';
								  }
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
	</header>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<div id="footer1"></div>
						<div id="footer2"></div>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<?php
							include 'launch_admin/functions/db2.php';
							global $conn;
							$sql3 = "SELECT * FROM social2";
							$result3 = $conn->query($sql3);
							while($row3 = $result3->fetch(PDO::FETCH_ASSOC)){
							echo '<li><a href="'.$row3['s2_link'].'"><i class="'.$row3['s2_icons'].'"></i></a></li>';
							}
							?>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- Angular JS v1.6.6 -->
	<script src="js/angular.min.js"></script>
        <!-- Ajax -->
	<script src="js/app.js"></script>
	<script src="js/ajax.js"></script>

	<?php
	include 'launch_admin/functions/db2.php';
	global $conn;
	$sql4 = "SELECT * FROM  duedate";
	$result4 = $conn->query($sql4);
	while($row4 = $result4->fetch(PDO::FETCH_ASSOC)){
	echo "<script>";
	echo "simplyCountdown('.simply-countdown-one', {";
	echo "year:" .$row4['year']. ", ";
	echo "month:" .$row4['month']. ", ";
	echo "day:" .$row4['day'];
	echo "});";
	echo "</script>";
	}
	?>

	<!-- Google Analytics -->

	

	</body>
</html>
