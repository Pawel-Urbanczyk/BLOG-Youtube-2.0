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
	
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-8'>
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
			
			<div class='row'>
				<div class='col-md-12'>
					<div class='pull-right'>
			<!--Buttons start-->
						<a href='#' class='btn btn-default'>Share</a>
						<a href='#' class='btn btn-default'>Embed</a>
						<a href='#' class='btn btn-default'>Report</a>
					</div>
					<div class='clearfix'></div>
					<br>
			<!--Buttons end-->
					<div class='well well-md'>
						<strong>
							http://localhost/youtube2.0/video_sharing_portal/player.php
						</strong>
					</div>
					
			<!--Socials start-->
					<div class='pull-right'>
						<div class='text-center'>
							<a href='#'><i style='color: #3b5998;' class='fa fa-facebook-official fa-3x'></i></a>
							<a href='#'><i style='color: #00aced;' class='fa fa-twitter fa-3x'></i></a>
							<a href='#'><i style='color: #dd4b39;' class='fa fa-google-plus-official fa-3x'></i></a>
							<a href='#'><i style='color: #cb2027;' class='fa fa-pinterest fa-3x'></i></a>
							<a href='#'><i style='color: #ff0084;' class='fa fa-flickr fa-3x'></i></a>
							<a href='#'><i style='color: #32506d;' class='fa fa-tumblr fa-3x'></i></a>
							<a href='#'><i style='color: #bc2a8d;' class='fa fa-instagram fa-3x'></i></a>
							<a href='#'><i style='color: #007bb6;' class='fa fa-linkedin fa-3x'></i></a>
						</div>
					</div>
			<!--Socials end-->
				</div>
			</div>
			<hr>
			<!--Comments start-->
			<div class='row'>
				<div class='col-md-12'>
					<h3>Comments<h3>
					<form>
						<textarea class='form-control'></textarea><br>
						<button class='btn btn-primary pull-right'>Submit</button>
					</form>
				</div>
			</div>
			<!--Comments end-->
			
			<!--Comment start-->
			<div class='row'>
				<div class='col-md-2'>
					<img src='../images/me.png' class='img-responsive img-circle' style='width: 60px;'>
				</div>
				<div class='col-md-10'>
					<div class='row'>
							<h4 style='margin-bottom:0px;'>John Doe</h4>
							<strong style='margin-bottom:10px;'>2 monhts</strong>
					</div>
					
					<div class='row'>
						<p tyle='padding-right: 20px; line-height:20px;'>
						At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
						</p>
						<a href='#'><strong>Reply</strong></a>
					</div>
				</div>
			</div>
			<!--Comment end-->
			
			<!--Comment start-->
			<div class='row'>
				<div class='col-md-2'>
					<img src='../images/me.png' class='img-responsive img-circle' style='width: 60px;'>
				</div>
				<div class='col-md-10'>
					<div class='row'>
							<h4 style='margin-bottom:0px;'>John Doe</h4>
							<strong style='margin-bottom:10px;'>2 monhts</strong>
					</div>
					
					<div class='row'>
						<p tyle='padding-right: 20px; line-height:20px;'>
						At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
						</p>
						<a href='#'><strong>Reply</strong></a>
					</div>
				</div>
			</div>
			<!--Comment end-->
			
			
			
			</div>
			
			<!--Right sidebar start-->
			<div class='col-md-4'>
			<!--Adv area start-->
				<div class='row'>
					<div class='col-md-12'>
						<img src='../images/ads400.jpg'>
					</div>
					<br>
				</div>
			<!--Adv area end-->
				<div class='row sidebar-videos'>
					<div class='col-md-6'>
						<a href='#' class='play-button'></a>
						<img src='../images/img4.jpg' class='img-responsive'>
					</div>
					<div class='col-md-6' style='margin: 0; padding: 0;'><a href='#'>
						<h4 class='sidebar-videos-title'>How to Drive a Car?</h4>
						<strong style='display: block;'>Techguy</strong>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident...</p></a>
					</div>
				</div>
			</div>
			
			<div class='col-md-4' style='background: white;'>
				<div class='row sidebar-videos'>
					<div class='col-md-6'>
						<a href='#' class='play-button'></a>
						<img src='../images/img4.jpg' class='img-responsive'>
					</div>
					<div class='col-md-6' style='margin: 0; padding: 0;'><a href='#'>
						<h4 class='sidebar-videos-title'>How to Drive a Car?</h4>
						<strong style='display: block;'>Techguy</strong>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident...</p></a>
					</div>
				</div>
			</div>
			
			<div class='col-md-4' style='background: white;'>
				<div class='row sidebar-videos'>
					<div class='col-md-6'>
						<a href='#' class='play-button'></a>
						<img src='../images/img4.jpg' class='img-responsive'>
					</div>
					<div class='col-md-6' style='margin: 0; padding: 0;'><a href='#'>
						<h4 class='sidebar-videos-title'>How to Drive a Car?</h4>
						<strong style='display: block;'>Techguy</strong>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident...</p></a>
					</div>
				</div>
			</div>
			
			<div class='col-md-4' style='background: white;'>
				<div class='row sidebar-videos'>
					<div class='col-md-6'>
						<a href='#' class='play-button'></a>
						<img src='../images/img4.jpg' class='img-responsive'>
					</div>
					<div class='col-md-6' style='margin: 0; padding: 0;'><a href='#'>
						<h4 class='sidebar-videos-title'>How to Drive a Car?</h4>
						<strong style='display: block;'>Techguy</strong>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident...</p></a>
					</div>
				</div>
			</div>
			<!--Right sidebar end-->
		</div>
	</div>
	
	<?php include '../includes/footer.php';?>
	</body>
</html>