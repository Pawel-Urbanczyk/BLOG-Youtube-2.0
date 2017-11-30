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
        $sql = "SELECT * FROM authors";
        $run = mysqli_query($conn, $sql);
        while($rows = mysqli_fetch_assoc($run)){
            $author_name = ucwords($rows['author_first_name'].' '.$rows['author_last_name']);
            echo "
             <div class='page-header'>
                <h4>$author_name</h4>
             </div>   
             <div class='col-md-6'>
                <img src='../images/$rows[author_image]' class='img-responsive img-thumbnail' >
             </div>
             <div class='col-md-6'>
                    <table class='table table-stripped table-bordered'>
                        <tbody>
                            <tr>
                                <th>Name:</th>
                                <td>$author_name</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>$rows[author_email]</td>
                            </tr>
                            <tr>
                                <th>Contact No.:</th>
                                <td>$rows[author_cell]</td>
                            </tr>
                        </tbody>
                    </table>     
             </div>
             <div class='col-md-12'>
                 <p class=''>
                    $rows[author_about]
                 </p>
             </div>
            ";
        }
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
