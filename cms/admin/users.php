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
                            ADMINS
                            <small>You can modify Admin details here</small>
                        </h1>

                    <table class = "table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php include "display-users.php"; ?>

                            <?php include "delete-users.php"; ?>

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
