<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cdb6284342.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" media="screen and (max-width: 500px)" href="style/mobile2.css">
    <link rel="stylesheet" media="screen and (min-width: 500px) and (max-width:1100px)" href="style/widescreen2.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="shortcut icon" href="images/logo.png">
   <title>Digi Nirman | Contact Us</title>
</head>
<body>
  <header>
    <nav id="navbar">
      <div class="container">
      <img src="images/logo.png" alt="Company Logo" >
      <h3 style="font-size: 20px; font-weight: bold;"><span>DIGI</span> NIRMAN</h3> </div>
      <ul>
        <li div="home"><a href="../index.html">Home</a></li>  
        <li div="about"><a href="../about.html">About Us</a></li>       
        <li div="service"><a href="../services.html">Services</a></li>       
        <li div="academy"><a href="../academy.html">Academy</a></li>
        <li div="blog"><a href="../blogs.html">Blogs</a></li>       
        <li div="contact"><a class="current" href="contact.php">Contact Us</a></li>            
      </ul> 
    </nav>
  </header>

      <!--<div class="header-box">
        <div id="header-pic">
          <img src="images/header-pic.jpg" alt="Office" width="100%" height="700px">
        </div>
        <div class="header-text">
          <h1><span style="color: #54dafd;">DIGI</span> <span>NIRMAN</span></h1>
          <br>
          <br>
          <p>DIGITAL SOLUTIONS FOR BETTER INFRASTRUCTURE</p>
        </div>
      </div>

    <div class="about-us2">
      <h1 style="color: white; font-weight: 600;"><span style="color: #54dafd;">CONTACT</span> US</h1>
    </div>-->

    <?php
        if(isset($_POST['submit']))
        {
          $full_name = $_POST['full_name'];
          $email_id = $_POST['email_id'];
          $mobile_number = $_POST['mobile_number'];
          $comment = $_POST['comment'];

          $query = "INSERT INTO contacts (full_name, email_id, mobile_number, comment)";

          $query .= "VALUES('{$full_name}', '{$email_id}', '{$mobile_number}', '{$comment}')";

          $create_user_query  = mysqli_query($connection, $query);
        }
    ?>

    <div id="fix6">
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1" style="font-weight: bold;">Full Name</label>
                <input name="full_name" type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1" style="font-weight: bold;">Email address</label>
              <input name="email_id" type="email" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1" style="font-weight: bold;">Mobile Number</label>
                <input name="mobile_number" type="tel" class="form-control" id="exampleFormControlInput1" required>
              </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1" style="font-weight: bold;">Comments</label>
              <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button class="btn btn-primary" type="submit" name="submit">SUBMIT</button>

          </form>
    </div>
    
    
    
    
    <br><br>

    <footer>
        <div class="about-us2">
          <h1 style="color: white; font-weight: 600;">OUR TEAM</h1>
        </div>
        <div class="flex-footer" style="font-weight: bold;">
          <div class="box-footer"><img src="Images/logo.png" alt="footer-logo"></div>
          <div class="box-footer">
            <h3 style="text-align: left";>ABOUT DIGI NIRMAN</h3>
            <hr>
            <br>
            <p style="text-align: left; font-weight: normal;">At Digi Nirman, we pride ourselves on being a “digital by default” company dedicated to work in development and implementation of technologies that transform the way we plan, design, deliver and manage the built environment</p>
          </div>
          <div class="box-footer"></div>
          <div class="box-footer">
            <div class="contact-us"><a href="contact.php"><h2>CONTACT US</h2></a></div>
            <div style="margin-left: -30px;">
              <br>
              <a href="https://www.facebook.com"><img src="images/icon-fb.png"></a>
              <a href="https://www.instagram.com"><img src="images/icon-insta.png">
              <a href="https://www.youtube.com"><img src="images/icon-yt.png"></a>
              <a href="https://www.linkedin.com"><img src="images/icon-linkedin.png"></a>
            </div>
          </div>
        </div>

        <footer id="main-footer">
          <p>DIGINIRMAN &copy; 2020, All Rights Reserved</p>
        </footer>
        
    </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>