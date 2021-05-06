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

                    <table class = "table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Comments</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php
                            //Find all posts query
                            $query = "SELECT * FROM contacts ORDER BY user_id DESC";
                            $select_users = mysqli_query($connection, $query);
                            
                            while($row = mysqli_fetch_assoc($select_users))
                            {

                                $user_id = $row['user_id'];
                                $full_name = $row['full_name'];
                                $email_id = $row['email_id'];
                                $mobile_number = $row['mobile_number'];
                                $comment = $row['comment'];

                                
                                
                                echo "<tr>";
                                echo "<td>{$user_id}</td>";
                                echo "<td>{$full_name}</td>";
                                echo "<td>{$email_id}</td>";
                                echo "<td>{$mobile_number}</td>";
                                echo "<td>{$comment}</td>";
                                echo "<td><a href = 'delete-details.php?delete={$user_id}'>Delete</a></td>";
                                echo "</tr>";
                            }
                        ?>

                        </tbody>
                    </table>

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



