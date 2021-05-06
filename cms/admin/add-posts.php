<?php include "includes/admin_header.php"; ?>

<body>
    <div id="wrapper">

        <?php include "includes/admin_navbar.php"; ?>
        <?php include "includes/admin_sidebar.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                            <small>Author</small>
                        </h1>

                        <div class = "col-xs-12">

                            <form action = "" method = "post" enctype = "multipart/form-data">
                                <div class="form-group">

                                    <label for="post_title">Title</label>
                                    <br>
                                    <input class="form-control" type = "text" name = "post_title">
                                
                                </div>

                                

                                <div class="form-group">

                                    <label for="post_author">Author</label>
                                    <br>
                                    <input class="form-control" type = "text" name = "post_author">

                                </div>

                               

                                <div class="form-group">

                                    <label for="image">Image</label>
                                    <br>
                                    <input type="file" name = "image">

                                </div>

                                <div class="form-group">

                                    <label for="post_content">Content</label>
                                    <br>
                                    <textarea class="form-control" type = "text" name = "post_content" rows = "10" cols = "30"></textarea>

                                </div>

                                <div class="form-group">

                                    <label for="post_tags">Tags</label>
                                    <br>
                                    <input class="form-control" type = "text" name = "post_tags" placeholder = "Seperate each tag with comma (,)">

                                </div>

                                <div class="form-group">

                                    <input name="submit" class="btn btn-primary" type="submit" value = "Add">

                                </div>
                            </form>

                            <?php
                                if(isset($_POST['submit']))
                                {  
                                    $post_title = $_POST['post_title'];

                                    
                                    
                                    $post_author = $_POST['post_author'];
                                    
                                    
                                    
                                    $post_image = $_FILES['image']['name'];
                                    $post_image_temp = $_FILES['image']['tmp_name'];
 
                                    $post_content = $_POST['post_content'];
                                    
                                    $post_tags = $_POST['post_tags'];

                                    $post_date = date('d-m-y');

                                    $post_comment_count = 0;

                                    move_uploaded_file($post_image_temp, "../images/ ");

                                    $query = "INSERT INTO posts (post_title, post_author, post_date, post_image, post_content, post_tags)";

                                    $query .= "VALUES('{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}', '{$post_tags}')";

                                    $create_post_query  = mysqli_query($connection, $query);

                                    if(!$create_post_query)
                                    {
                                        die("QUERY FAILED".mysqli_error($connection));
                                    }
                                    if($create_post_query)
                                    {
                                        header("Location: posts.php");
                                    }
                                }
                                
                            ?>


                        </div>
                   


                    </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "includes/footer.php"?>

</body>

</html>
