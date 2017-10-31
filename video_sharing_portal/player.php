<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Youtube 2.0 Player Page</title>
		<meta charset="utf-8" />
		<meta name="description" content="Alternative to YouTube.com" />
		<meta name="keywords" content="Youtube 2.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
	<!--Bootstrap links start-->
	
		<!--jQuery-->
		<script	src="../js/jquery.js"></script>
		
		<!--Latest compiled and minified CSS-->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<!--custom css-->
		<link rel="stylesheet" href="../css/style.css">
		<!--font awesome-->
		<link rel="stylesheet" href="../css/font-awesome.css">

		<!--Latest compiled and minified JavaScript-->
		<script src="../js/bootstrap.js"></script>
		
		
	<!--Bootstrap links end-->
		
		
	</head>
	<body>
	<!--Navbar start-->
		<?php include '../includes/nav.php';?>
	<!--Navbar end-->
	
	<!--second navbar start-->
		<?php include 'includes/video-nav.php';?>
	<!--second navbar end-->
	
	<div class='container-fluid' style='background: silver;'>
		<div class='row'>
			<div class='col-md-8' style='background: white;'>
			<!--Player start-->
				<div class='player-container'>
					<video width='100%' controls>
						<source src='videos/vid1.mp4' type='video/mp4'>
					</video>
				</div>
			<!--Player end-
			->
			<!--Title and label start-->
				<div class='row'>
					<div class='col-md-8'>
						<h2>How to Drive a Car?</h2>
					</div>
					<div class='col-md-4 text-right'>
						<span class='label label-primary'>29 Views</span>
					</div>
				</div>
			<!--Title and label end-->
		
			<!-- start-->
				<div class='row'>
					<div clas='col-md-3'>
						<div class='col-md-1 user-image-container'>
							<img src='../images/me.png' class=''>
						</div>
						<div class='col-md-6'>
							
							<a href='#' class='user-name-player-page'>TechGuy</a>
							<a href='#' class='btn btn-primary btn-sm btn-square'>Subscribe</a>
						</div>
					</div>
					<div class='col-md-9'>
						<div class='pull-right text-center col-md-2'>
							<span class='fa fa-level-down fa-3x'></span>
							<div class=''>24 Dislikes</div>
						</div>
						<div class='pull-right text-center col-md-2'>
							<span class='fa fa-heart fa-3x'></span>
							<div class=''>76 Likes</div>
						</div>
					</div>
				</div>
			<!-- end-->
			
			<!--Description start-->
			<div class='row'>
				<div class='col-md-12 video-description'>
					<h3>Description</h3>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
			</div>
			<!--Description end-->
			</div>
			<div class='col-md-4'>
				<div class='jumbotron'></div>
			</div>
		</div>
	</div>
	</body>
</html>