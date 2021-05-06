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

                                    <label for="user_firstname">First Name</label>
                                    <br>
                                    <input class="form-control" type = "text" name = "user_firstname">
                                
                                </div>

                                <div class="form-group">

                                    <label for="user_lastname">Last Name</label>
                                    <br>
                                    <input class="form-control" type = "text" name = "user_lastname">
                                
                                </div>

                                <div class="form-group">

                                    <label for="user_email">Email</label>
                                    <br>
                                    <input class="form-control" type = "email" name = "user_email">
                                
                                </div>

                                <div class="form-group">

                                    <label for="username">Username</label>
                                    <br>
                                    <input class="form-control" type = "text" name = "username">
                                
                                </div>

                                <div class="form-group">

                                    <label for="user_password">Password</label>
                                    <br>
                                    <input class="form-control" type = "password" name = "user_password">
                                
                                </div>
                                

                                <div class="form-group">

                                    <input name="submit" class="btn btn-primary" type="submit" value = "Add">

                                </div>
                            </form>

                            <?php
                                if(isset($_POST['submit']))
                                {  
                                    $user_firstname = $_POST['user_firstname'];
                                    $user_lastname = $_POST['user_lastname'];
                                    $user_email = $_POST['user_email'];
                              
                                   
                                    
                                    $username = $_POST['username'];
                                    $user_password = $_POST['user_password'];

                                    $query = "INSERT INTO users (user_firstname, user_lastname, user_email, username, user_password)";

                                    $query .= "VALUES('{$user_firstname}', '{$user_lastname}', '{$user_email}', '{$username}', '{$user_password}')";

                                    $create_user_query  = mysqli_query($connection, $query);

                                    if(!$create_post_query)
                                    {
                                        die("QUERY FAILED".mysqli_error($connection));
                                    }
                                    if($create_post_query)
                                    {
                                        header("Location: users.php");
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
