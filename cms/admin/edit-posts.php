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

                        <?php
                            if(isset($_GET['edit-post']))
                            {
                                $the_post_id = $_GET['edit-post'];
                            }
                            $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
                            $select_posts_by_id = mysqli_query($connection, $query);
                            
                            while($row = mysqli_fetch_assoc($select_posts_by_id))
                            {
                                $post_id = $row['post_id'];
                                $post_author = $row['post_author'];
                                $post_title = $row['post_title'];
                                
                                $post_image = $row['post_image'];
                                $post_content = $row['post_content'];
                                $post_tags = $row['post_tags'];
                                /*$post_comment = $row['post_comment_count'];*/
                                $post_date = $row['post_date'];
                            }

                            if(isset($_POST['submit']))
                            {
                                $post_title = $_POST['post_title'];

                                
                                $post_author = $_POST['post_author'];
                                
                                
                                $post_image = $_FILES['image']['name'];
                                $post_image_temp = $_FILES['image']['tmp_name'];

                                $post_content = $_POST['post_content'];
                                
                                $post_tags = $_POST['post_tags'];

                                move_uploaded_file($post_image_temp, "../images/ ");

                                /*if(empty($post_image)
                                {
                                    $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
                                    $select_image = mysqli_query($connection, $query);
                                    while($row = musqli_fetch_array($select_image))
                                    {
                                        $post_image = $row['post_image']
                                    }
                                }*/

                                $query = "UPDATE posts SET ";
                                $query .="post_title = '{$post_title}', ";
                                
                                $query .="post_date = now(),";
                                $query .="post_author = '{$post_author}', ";
                               
                                $query .="post_tags = '{$post_tags}', ";
                                $query .="post_content = '{$post_content}', ";
                                $query .= "post_image = '{$post_images}' ";
                                $query .= "WHERE post_id = {$the_post_id} ";

                                $update_post = mysqli_query($connection, $query);
                                if(!$update_post)
                                {
                                    die("Failed to update"."<br>".mysqli_error($connection));
                                }
                                header("Location: posts.php");
                                
                                
                            }
                        ?>

                        <div class = "col-xs-12">

                            <form action = "" method = "post" enctype = "multipart/form-data">
                                <div class="form-group">

                                    <label for="post_title">Title</label>
                                    <br>
                                    <input value="<?php echo $post_title;?>" class="form-control" type = "text" name = "post_title">
                                
                                </div>

                                
                                    
                                    
                                    
                                   

                                <div class="form-group">

                                    <label for="post_author">Author</label>
                                    <br>
                                    <input value="<?php echo $post_author;?>" class="form-control" type = "text" name = "post_author">

                                </div>

                                <div class="form-group">

                                    <label for="image">Image</label>
                                    <br>
                                    <input type="file" name = "image">
                                    <br>
                                    <img width= "100" src="../images/<?php echo $post_image;?>">
                                    <br>

                                </div>

                                <div class="form-group">

                                    <label for="post_content">Content</label>
                                    <br>
                                    <textarea class="form-control" type = "text" name = "post_content" rows = "10" cols = "30"><?php echo $post_content;?>
                                    </textarea>

                                </div>

                                <div class="form-group">

                                    <label for="post_tags">Tags</label>
                                    <br>
                                    <input value="<?php echo $post_tags;?>" class="form-control" type = "text" name = "post_tags" placeholder = "Seperate each tag with comma (,)">

                                </div>

                                <div class="form-group">

                                    <input name="submit" class="btn btn-primary" type="submit" value = "Update">

                                </div>
                            </form>
