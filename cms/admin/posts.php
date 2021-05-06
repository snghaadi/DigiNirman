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
                            Hey Admin
                            <small>You can Add, Remove or Modify Posts here</small>
                        </h1>

                    <table class = "table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Content</th>
                                <th>Tags</th>
                                <!--<th>Comment</th>-->
                                <th>Date</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php include "display-posts.php"; ?>

                            <?php include "delete-posts.php"; ?>

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
