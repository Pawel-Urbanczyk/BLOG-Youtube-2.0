<?php include '../includes/db.php';
    if(isset($_GET['del_id'])){
        $del_id = $_GET['del_id'];
        $del_sql = "DELETE  FROM blog_data WHERE blog_id = '$del_id'";
        if(mysqli_query($conn, $del_sql)){?>
            <script>window.location = 'index.php';</script>
        <?php  }
    }

    if(isset($_POST['edit_submit'])){
        $blog_title = mysqli_real_escape_string($conn,strip_tags($_POST['blog_title']));
        $blog_description = mysqli_real_escape_string($conn,strip_tags($_POST['blog_description']));
        $blog_category = mysqli_real_escape_string($conn,strip_tags($_POST['blog_category']));


        $edit_sql = "UPDATE blog_data SET blog_title = '$blog_title', blog_description = '$blog_description', blog_category = '$blog_category' WHERE blog_id = '$_POST[blog_id]'";
        if(mysqli_query($conn,$edit_sql)){ ?>
                <script>window.location = 'index.php';</script>
        <?php }
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
                $c = 1;
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
                            <td>$c</td>
                            <td>$blog_title</td>
                            <td>$blog_description</td>
                            <td>$rows[blog_author]</td>
                            <td>$cat_data</td>
                            <td>
                                <div class='dropdown'>
                                    <button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>Actions <span class='caret'></span></button>
                                    <ul class='dropdown-menu'>
                                        <li><a href='#edit_modal$c' data-toggle='modal'>Edit</a></li>
                                        <li><a href='index.php?del_id=$rows[blog_id]'>Delete</a></li>
                                        <li><a href='../post.php?post_id=$rows[blog_id]'>View</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    "; ?>
                        <div id='edit_modal<?php echo $c;?>' class='modal fade'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <button class='close' data-dismiss='modal'>&times;</button>
                                       <h4>Modal Header</h4>
                                    </div>
                                    <div class='modal-body'>
                                        <form class='' method='POST' action=''>
                                            <input type='hidden' name='blog_id' value='<?php echo $rows['blog_id'];?>'>
                                            <div class='form-group'>
                                                <label>Title</label>
                                                <input type='text' class='form-control' name='blog_title' value='<?php echo $blog_title; ?>'>
                                            </div>
                                            <div class='form-group'>
                                                <label>Description</label>
                                                <input type='text' class='form-control' name='blog_description' value='<?php echo $blog_description; ?>'>
                                            </div>
                                            <div class='form-group'>
                                                <label>Category</label>
                                                <select name='blog_category' class="form-control">
                                                    <?php
                                                        $edit_cat_sql = "SELECT * FROM categories";
                                                        $edit_cat_run = mysqli_query($conn, $edit_cat_sql);
                                                        while($edit_cat_rows = mysqli_fetch_assoc($edit_cat_run)){
                                                            $edit_cat_data = ucwords($edit_cat_rows['cat_data']);
                                                            if($edit_cat_rows['cat_id'] == $rows['blog_category']){
                                                                echo "<option value='$edit_cat_rows[cat_id]' selected>$edit_cat_data</option>";
                                                            }else{
                                                                echo "<option value='$edit_cat_rows[cat_id]'>$edit_cat_data</option>";
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class='form-group'>
                                                <input type='submit' name='edit_submit' class='btn btn-info btn-block'>
                                            </div>
                                        </form>
                                    <div class='modal-footer'></div>
                                </div>
                            </div>
                        </div>
                    <?php $c++;}

            ?>

            </tbody>
        </table>
    </div>

</body>
</html>