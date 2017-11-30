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
        <?php
        if(isset($_GET['cat_id'])){
            $cat_id = $_GET['cat_id'];
        }
        $sql = "SELECT * FROM blog_data WHERE blog_category = '$cat_id' ORDER BY blog_id DESC LIMIT 3";
        $run = mysqli_query($conn,$sql);
        while($rows = mysqli_fetch_assoc($run)){
            $blog_title = ucwords($rows['blog_title']);
            $blog_description = substr($rows['blog_description'],0,200);

            $blog_category = $rows['blog_category'];
            $cat_sql = "SELECT * FROM categories WHERE cat_id = '$blog_category'";
            $cat_run = mysqli_query($conn, $cat_sql);
            while($cat_row = mysqli_fetch_assoc($cat_run)){
                $category = ucwords($cat_row['cat_data']);
                $cat_id = $cat_row['cat_id'];
            }

            ?>
            <div class="post">
                <?php  echo"<h1><a href='post.php?post_id=$rows[blog_id]' class='post-title'>$blog_title</a></h1>";?>

                <div class="meta small-text"><a href="#"><?php echo($rows['blog_date']);?></a> | <a href="#"><?php echo($rows['blog_author']);?></a> | <a                                           href="menu.php?cat_id=<?php echo $cat_id;?>"><?php echo $category;?></a></div>

                <p class="lead"><?php echo($blog_description);?>... <a href='post.php?post_id=<?php echo $rows['blog_id'];?>'>Continue reading</a></p>
                <a class="label label-default">What is Technology?</a>
                <a class="label label-default">How technology works?</a>
                <a class="label label-default">Intro into the technology</a>
            </div>
        <?php  }
        ?>

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
