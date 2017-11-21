	<!--Sidebar right start-->
			<div class="col-md-4">
			<div class='row'>
						<!--header-->
					<div class="page-header">
						<h2>Latest post</h2>
					</div>
					<!--Lates post-->
					<div class="custom-sidebar-list">
                        <?php
                            $side_sql = "SELECT * FROM blog_data ORDER BY blog_id DESC LIMIT 6";
                            $side_run = mysqli_query($conn, $side_sql);
                            while($side_rows = mysqli_fetch_assoc($side_run)){ ?>
                                <a href="post.php" class="custom-sidebar-list-item"><?php echo(ucwords($side_rows['blog_title']));?></a>
                        <?php }
                        ?>
					</div>
					
			</div>
			<div class='row'>
					<div class="page-header">
						<h2>Post of the Day</h2>
					</div>
				
				<div class="day-post">
					<h3>The Second Post</h3>
					<div class="meta small-text"><a href='#'>06-06-2017</a> | <a href='#'>Technology</a> | <a href='#'>Pawel Urbanczyk</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href='#' class="label label-default">What is Technology</a>
					<a href='#' class="label label-default">How technology works</a>
					<a href='#' class="label label-default">Intro to Technology</a>
				</div>
				
			</div>
			
				<!--About me-->
				<div class='row'>
						<div class="page-header">
							<h2>About Pawel Urbanczyk</h2>
						</div>
						
						<!--picture-->
						<div class="col-md-4">
							<img src='../images/me.png' class='img-responsive'>
						</div>
						
						<!--Data-->
						<div class="col-md-8">
							<a href='#' class="lead">Profile page</a><br>
							<a href='#' class="lead">Website address</a><br>
							<a href='#' class="lead">Official Email</a><br>
						</div>
				</div>
				<div class="row">
					<!--social start-->
					<div class="page-header">
						<h2>Social Links</h2>
						
					</div>
					<div class='text-center'>
						<a href='#'><i style='color: #3b5998;' class='fa fa-facebook-official fa-4x'></i></a>
						<a href='#'><i style='color: #00aced;' class='fa fa-twitter fa-4x'></i></a>
						<a href='#'><i style='color: #dd4b39;' class='fa fa-google-plus-official fa-4x'></i></a>
						<a href='#'><i style='color: #cb2027;' class='fa fa-pinterest fa-4x'></i></a>
						<a href='#'><i style='color: #ff0084;' class='fa fa-flickr fa-4x'></i></a>
						<a href='#'><i style='color: #32506d;' class='fa fa-tumblr fa-4x'></i></a>
						<a href='#'><i style='color: #bc2a8d;' class='fa fa-instagram fa-4x'></i></a>
						<a href='#'><i style='color: #007bb6;' class='fa fa-linkedin fa-4x'></i></a>
					</div>
					<!--social end-->
				</div>
			</div>
		<!--Sidebar right end-->