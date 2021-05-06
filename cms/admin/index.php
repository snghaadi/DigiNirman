<?php include "includes/admin_header.php"; ?>

<body>
    <div id="wrapper">

        <?php
            //if($connection) echo "We are connected"
            $post_counts = 0;
            $users_counts = 0;
        ?>

        <?php include "includes/admin_navbar.php"; ?>
        <?php include "includes/admin_sidebar.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADMIN PANEL
                            <small> </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> HOME
                            </li>
                        </ol>
                    </div>
                </div>
                
                <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php
                                    $query = "SELECT * FROM posts";
                                    $select_all_post = mysqli_query($connection, $query);
                                    $post_counts = mysqli_num_rows($select_all_post);
                                    echo "<div class='huge'>{$post_counts}</div>";
                                ?>
                             <div>Posts</div>
                                </div>
                            </div>
                        </div>
                        <a href="posts.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!--<div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class='huge'>23</div>
                                    <div>Comments</div>
                                </div>
                            </div>
                        </div>
                        <a href="comments.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>-->

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                <?php
                                    $query = "SELECT * FROM users";
                                    $select_all_users = mysqli_query($connection, $query);
                                    $users_counts = mysqli_num_rows($select_all_users);
                                    echo "<div class='huge'>{$users_counts}</div>";
                                ?>
                                

                                    <div> Admins</div>
                                </div>
                            </div>
                        </div>
                       <a href="users.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

               <!--<div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class='huge'>13</div>
                                        <div>Categories</div>
                                </div>
                            </div>
                        </div>
                        <a href="categories.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>-->
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <div class="row">
            <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['', ''],

                <?php
                    /*$elements_text = ['Active Posts','Users'];
                    $elements_count = [$post_counts,$users_counts];
                    for($i = 0; $i < 2; $i++)
                    {
                        echo "['{elements_text[$i]}'".","."{elements_count[$i]}],";
                        echo ['Posts', $post_counts];
                    }*/
                ?>
               ['Posts', <?php echo $post_counts;?>],
               ['Admins', <?php echo $users_counts;?>]

                ]);

                var options = {
                chart: {
                    title: '',
                    subtitle: '',
                }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
            </script>
            
        </div>
        <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>

    </div>
    <!-- /#wrapper -->

    
   <?php include "includes/footer.php"?>
</body>

</html>
