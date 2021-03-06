<?php include 'includes/db.php';?>
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
                    <?php

                    if(isset($_GET['post_id'])){
                        $sql = "SELECT * FROM blog_data WHERE blog_id = $_GET[post_id]";
                        $run = mysqli_query($conn, $sql);
                        while($rows = mysqli_fetch_assoc($run)){
                            $blog_title = ucwords($rows['blog_title']);
                            $cat_sql = "SELECT * FROM categories WHERE cat_id = $rows[blog_category]";
                            $cat_run = mysqli_query($conn, $cat_sql);
                            while($cat_rows = mysqli_fetch_assoc($cat_run)){
                               $cat_data = ucwords($cat_rows['cat_data']);
                               $cat_id = $cat_rows['cat_id'];
                            }
                            echo"
                                    <h1><a href='#' class='post-title'>$blog_title</a></h1>
                                    <div class='meta small-text\'><a href='#'>$rows[blog_date]</a> | <a href='#'>$rows[blog_author]</a> | <a                                                                        href='menu.php?cat_id=$cat_id'>$cat_data</a></div>
                                    <img src='../images/img1.jpg' class='img-responsive padding-50'>
                                    <p class='lead'>$rows[blog_description]</p>
                                    <a class='label label-default'>What is Technology?</a>
                                    <a class='label label-default'>How technology works?</a>
                                    <a class='label label-default'>Intro into the technology</a>                                                                                                              ";
                        }

                    }else{
                        ?>
                            <script>
                                window.location = "index.php";
                            </script>
                        <?php
                    }
                    ?>

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
