        <div class="col-md-12">
				<nav class='navbar navbar-sub'>
					<ul class='nav navbar-nav'>

                        <?php
                            $sql = "SELECT * FROM categories";
                            $run_sql = mysqli_query($conn, $sql);
                            while($rows = mysqli_fetch_assoc($run_sql)){
                                $cat_data = ucwords($rows['cat_data']);
                                echo "<li><a href='menu.php?cat_id=$rows[cat_id]'>$cat_data</a></li>";
                            }
                        ?>
					</ul>
				</nav>
		</div>