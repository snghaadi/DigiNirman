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

    <!-- Navigation -->
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

            <!-- Blog Entries Column -->
            <div class="col-md-8">

            <?php
            if(isset($_POST['submit']))
            {
                $search = $_POST['search'];
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                $search_query = mysqli_query($connection, $query);
                if(!$search_query)
                {
                    die("QUERY FAILED".mysqli_error($connection));
                }
                $count = mysqli_num_rows($search_query);
                if($count == 0)
                {
                    echo "<h1>No result</h1>";
                }
                else
                {
                    while($row = mysqli_fetch_assoc($search_query))
                    {
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
            ?>
                        <h1 class="page-header">
                        
                        <small></small>
                        </h1>

                        <!-- First Blog Post -->
                        <h2>
                            <a href="#"><?php echo $post_title?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $post_author?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $post_image;?>" alt = "">
                        <p><?php echo $post_content?></p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>

                    <?php }

                }
            }
            ?>
                
                <!-- Pager 
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li> -->
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action = "search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form><!--search form>
                    /.input-group -->
                </div>

                

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>
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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
