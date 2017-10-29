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
		<?php include "../includes/nav.php";?>
		<!--Navbar end-->
		
		<!--header start-->
		<header>
			<div class="text-center">
				<h1>YouTube 2.0</h1>
				<p class="lead">Simply text, asdsad sadasdas</p>
			</div>
		</header>
		<!--header end-->
		
		<!--post area start-->
		<div class="container-fluid">
			<!--blog nav start-->
				<?php include "/includes/blog-nav.php";?>
			<!--blog nav end-->
		
			<div class="col-md-8">
				<div class="post">
					<h1><a href='#' class="post-title">The First Post</a></h1>
					
					<div class="meta small-text"><a href="#">06-06-2017</a> | <a href="#">Pawel Urbanczyk</a> | <a href="#">Technology</a></div>
					
					<img src='../images/img1.jpg' class="img-responsive padding-50">
					
					<p class="lead">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
					<a class="label label-default">What is Technology?</a>
					<a class="label label-default">How technology works?</a>
					<a class="label label-default">Intro into the technology</a>
				</div>
				
			</div>
			
			<!--Sidebar right start-->
				<?php include "/includes/blog-sidebar.php";?>
			<!--Sidebar right end-->
		</div>
		<!--post area end-->
		
		<!--footer start-->
			<?php include "../includes/footer.php";?>
		<!--footer end-->
	</body>
</html>
