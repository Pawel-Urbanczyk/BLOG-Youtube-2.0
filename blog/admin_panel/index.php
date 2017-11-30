<?php include '../includes/db.php';?>
<html lang="pl">
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8" />
    <meta name="description" content="Alternative to YouTube.com" />
    <meta name="keywords" content="Youtube 2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--Bootstrap links start-->

    <!--jQuery-->
    <script	src="../js/jquery.js"></script>

    <!--Latest compiled and minified CSS-->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <!--custom css-->
    <link rel="stylesheet" href="../../css/style.css">
    <!--font awesome-->
    <link rel="stylesheet" href="../../css/font-awesome.css">

    <!--Latest compiled and minified JavaScript-->
    <script src="../js/bootstrap.js"></script>


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
                <tr>
                    <td>ggg</td>
                    <td>ggg</td>
                    <td>ggg</td>
                    <td>ggg</td>
                    <td>ggg</td>
                    <td>
                        <div class='dropdown'>
                            <button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>Actions <span class='caret'></span></button>
                            <ul class='dropdown-menu'>
                                <li><a href='#'>Edit</a></li>
                                <li><a href='#'>Delete</a></li>
                                <li><a href='#'>View</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>