<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/index-main.css">
    <link rel="stylesheet" media="screen and (max-width: 500px)" href="css/index-mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 500px) and (max-width:1100px)" href="css/index-widescreen.css">
    <title>Digi Nirman | Blogs </title>
    <link rel="shortcut icon" href="images/logo.png">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<header>
    <nav id="navbar">
      <div class="container-nav">
      <img src="images/logo.png" alt="Company Logo" >
      <p> <span style="color:#54dafd;">DIGI </span> NIRMAN</p> </div>
      <ul>
        <li div="home"><a  href="../index.html">Home</a></li>       
        <li div="about"><a href="../about.html">About Us</a></li>       
        <li div="service"><a href="../services.html">Services</a></li>       
        <li div="academy"><a href="../academy.html">Academy</a></li>
        <li div="blog"><a class="current" href="index.php">Blogs</a></li>       
        <li div="contact"><a href="contact.php">Contact Us</a></li>           
      </ul> 
    </nav>
  </header>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->

            <div class="col-lg-8">

            <?php

            if(isset($_GET['p_id']))
            {
                $the_post_id = $_GET['p_id'];
            }

            ?>

            <?php
            $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
            $select_all_posts_query = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($select_all_posts_query))
                    {
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                    
            ?>
           
                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $post_title ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php echo $post_author ?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="images/<?php echo $post_image;?>" alt = "">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $post_content ?></p>

                <hr>
            </div>
                
            </div>

        </div>
        <!-- /.row -->

                    
        
        <hr>
         <?php } ?>
    </div>
    <footer>
        <div class="about-us">
          <h1 style="color: white; font-weight: 600;">OUR TEAM</h1>
        </div>
        <div class="flex-footer" style="font-weight: bold;">
          <div class="box-footer"><img src="images/logo.png" alt="footer-logo"></div>
          <div class="box-footer">
            <h3 style="text-align: left";>ABOUT DIGI NIRMAN</h3>
            <hr>
            <br>
            <p style="text-align: left; font-weight: normal;">At Digi Nirman, we pride ourselves on being a “digital by default” company dedicated to work in development and implementation of technologies that transform the way we plan, design, deliver and manage the built environment</p>
          </div>
          <div class="box-footer"></div>
          <div class="box-footer">
            <div class="contact-us"><a href="contact.php"><h2>CONTACT US</h2></a></div>
            <div style="margin-left: -70px;">
              <br>
              <a href="https://www.facebook.com"><img src="images/icon-fb.png"></a>
              <a href="https://www.instagram.com"><img src="images/icon-insta.png">
              <a href="https://www.youtube.com"><img src="images/icon-yt.png"></a>
              <a href="https://www.linkedin.com"><img src="images/icon-linkedin.png"></a>
            </div>
          </div>
        </div>
      </footer>
      <footer id="main-footer">
        <p>DIGINIRMAN &copy; 2020, All Rights Reserved</p>
      </footer>

                    

    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
