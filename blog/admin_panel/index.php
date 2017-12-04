<?php include '../includes/db.php';
    if(isset($_GET['del_id'])){
        $del_id = $_GET['del_id'];
        $del_sql = "DELETE  FROM blog_data WHERE blog_id = '$del_id'";
        if(mysqli_query($conn, $del_sql)){?>
            <script>window.location = 'index.php';</script>
        <?php  }
    }
?>
<html lang="pl">
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8" />
    <meta name="description" content="Alternative to YouTube.com" />
    <meta name="keywords" content="Youtube 2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--Bootstrap links start-->


    <!--Latest compiled and minified CSS-->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <!--custom css-->
    <link rel="stylesheet" href="../../css/style.css">
    <!--font awesome-->
    <link rel="stylesheet" href="../../css/font-awesome.css">

    <!--jQuery-->
    <script	src="../../js/jquery.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="../../js/bootstrap.js"></script>


    <!--Bootstrap links end-->


</head>
<body>
    <nav class='navbar navbar-default'>
        <div class='container-fluid'>
            <div class='navbar-header'>
                <a href='#' class='navbar-brand'>Admin Panel</a>
            </div>
            <ul class='nav navbar-nav'>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Posts</a></li>
                <li><a href='#'>Music</a></li>
                <li><a href='#'>Movies</a></li>
            </ul>
        </div>
    </nav>
    <div class='container'>
        <table class='table table-stripped table-bordered'>
            <thead>
                <tr>
                    <th>S.no</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Categories</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM  blog_data";
                $run = mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_assoc($run)){
                    $blog_title = ucwords($rows['blog_title']);
                    $blog_description = substr($rows['blog_description'], 0, 100);

                    $cat_sql= "SELECT * FROM categories WHERE cat_id = '$rows[blog_category]'";
                    $cat_run = mysqli_query($conn, $cat_sql);
                    while($cat_rows = mysqli_fetch_assoc($cat_run)){
                       $cat_data = ucwords($cat_rows['cat_data']);
                    }
                    echo"
                        <tr>
                            <td>$rows[blog_id]</td>
                            <td>$blog_title</td>
                            <td>$blog_description</td>
                            <td>$rows[blog_author]</td>
                            <td>$cat_data</td>
                            <td>
                                <div class='dropdown'>
                                    <button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>Actions <span class='caret'></span></button>
                                    <ul class='dropdown-menu'>
                                        <li><a href='#'>Edit</a></li>
                                        <li><a href='index.php?del_id=$rows[blog_id]'>Delete</a></li>
                                        <li><a href='../post.php?post_id=$rows[blog_id]'>View</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    ";
                }

            ?>

            </tbody>
        </table>
    </div>

</body>
</html>