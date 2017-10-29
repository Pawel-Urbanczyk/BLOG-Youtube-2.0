<html lang="pl">
	<head>
		<title>Youtube 2.0</title>
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
	<nav class='navbar second-bar' style='margin-top: 0px;'>
		<div class='container'>
			<ul class='nav navbar-nav navbar-right'>
				<li><a href='#'>Upload</a></li>
				<li><a href='#'>Sign In</a></li>
				<li><a href='#'>Join</a></li>
			</ul>
		</div>
	</nav>
	<!--second navbar end-->
	
	<!--sidebar start-->
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'>
				<div class='page-header' style='margin-top: 2px;'>
					<h3>Categories</h3>
				</div>
				<div class='vid-sidebar-list'>
					<a href='#' class='vid-sidebar-list-item'><i class='fa fa-home'></i> Home</a>
					<a href='#' class='vid-sidebar-list-item'><i class='fa fa-cogs'></i> Technology</a>
					<a href='#' class='vid-sidebar-list-item'><i class='fa fa-medkit'></i> Health</a>
					<a href='#' class='vid-sidebar-list-item'><i class='fa fa-flask'></i> Science</a>
				</div>
				<div class='page-header' style='margin-top: 20px;'>
					<h3>My account</h3>
				</div>
				<div class='vide-sidebar-list'>
					<a href='#' class='vid-sidebar-list-item'><i class='fa fa-desktop'></i> My Channel</a>
					<a href='#' class='vid-sidebar-list-item'><i class='fa fa-list-alt'></i> My Playlists</a>
					<a href='#' class='vid-sidebar-list-item'><i class='fa fa-heart'></i> My Liked Videos</a>
					<a href='#' class='vid-sidebar-list-item'><i class='fa fa-plus-square'></i> My Subscribed Channels</a>
				</div>
			</div>
	<!--sidebar end-->
			<div class='col-md-10'>
				<div class='jumbotron'></div>
			</div>
		</div>
	</div>
	
	
	
		<!--footer start-->
			<?php include "../includes/footer.php";?>
		<!--footer end-->
	</body>
</html>