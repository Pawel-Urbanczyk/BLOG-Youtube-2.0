<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Get Loged In</title>
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
	
	<div class='container-fluid' style='background-image: url(../images/form_background.jpg); height: 100vh; background-size: 100%;'>

	<!--Form start-->
		<form class='register-form col-md-6'>
			<div class='page-header'>
				<h2>Upload Video</h2>
			</div>
			<div class='form-group'>
				<label class=''>Select File:</label>
				<input type='file' class='form-control'>
			</div>
			<div class='form-group'>
				<label class=''>Title:</label>
				<input type='text' class='form-control'>
			</div>
			<div class='form-group'>
				<label class=''>Description:</label>
				<textarea class='form-control'></textarea>
			</div>
			<div class='form-group'>
				<label class=''>Select Playlist:</label>
				<select class='form-control'>
					<option>Select a Playlist</option>
					<option>Playlist 1</option>
					<option>Playlist 2</option>
					<option>Playlist 3</option>
				</select>
			</div>
				<div class='form-group'>
				<label class=''>Select Status:</label>
				<select class='form-control'>
					<option selected>Public</option>
					<option>Unlisted</option>
					<option>Private</option>
				</select>
			</div>
			<div class='form-group'>
				<button class='btn btn-primary btn-block'>Submit</button>
			</div>
		</form>
	<!--Form end-->
	</div>
	
	<?php include '../includes/footer.php';?>
	
	</body>
</html>