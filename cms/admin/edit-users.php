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
                            if(isset($_GET['edit-user']))
                            {
                                $the_user_id = $_GET['edit-user'];
                            }
                            $query = "SELECT * FROM users WHERE user_id = $the_user_id";
                            $select_user_by_id = mysqli_query($connection, $query);
                            
                            while($row = mysqli_fetch_assoc($select_user_by_id))
                            {
                                $user_id = $row['user_id'];
                                $user_firstname = $row['user_firstname'];
                                $user_lastname = $row['user_lastname'];
                                $user_email = $row['user_email'];
                                $username = $row['username'];
                                $user_password = $row['user_password'];
                            }

                            if(isset($_POST['submit']))
                            {
                                $user_firstname = $_POST['user_firstname'];
                                $user_lastname = $_POST['user_lastname'];
                                $user_email = $_POST['user_email'];   
                                $username = $_POST['username'];
                                $user_password = $_POST['user_password'];

                                $query = "UPDATE users SET ";
                                $query .="user_firstname = '{$user_firstname}', ";
                                $query .="user_lastname = '{$user_lastname}', ";
                                $query .="user_email = '{$user_email}', ";
                                $query .="username = '{$username}', ";
                                $query .="user_password = '{$user_password}' ";
                                $query .= "WHERE user_id = {$the_user_id} ";

                                $update_user = mysqli_query($connection, $query);
                                if(!$update_user)
                                {
                                    die("Failed to update"."<br>".mysqli_error($connection));
                                }
                                header("Location: users.php");
                                
                                
                            }
                        ?>

                        <div class = "col-xs-12">

                            <form action = "" method = "post" enctype = "multipart/form-data">
                                <div class="form-group">

                                    <label for="user_firstname">Firstname</label>
                                    <br>
                                    <input value="<?php echo $user_firstname;?>" class="form-control" type = "text" name = "user_firstname">
                                
                                </div>

                                <div class="form-group">

                                    <label for="user_lastname">Lastname</label>
                                    <br>
                                    <input value="<?php echo $user_lastname;?>" class="form-control" type = "text" name = "user_lastname">

                                </div>

                                <div class="form-group">

                                    <label for="user_email">Email</label>
                                    <br>
                                    <input value="<?php echo $user_email;?>" class="form-control" type = "text" name = "user_email">

                                </div>

                                <div class="form-group">

                                    <label for="username">Username</label>
                                    <br>
                                    <input value="<?php echo $username;?>" class="form-control" type = "text" name = "username">
                                    
                                </div>

                                <div class="form-group">

                                    <label for="user_password">Password</label>
                                    <br>
                                    <input value="<?php echo $user_password;?>" class="form-control" type = "text" name = "user_password">
                                    
                                </div>

                                <div class="form-group">

                                    <input name="submit" class="btn btn-primary" type="submit" value = "Update">

                                </div>
                            </form>
