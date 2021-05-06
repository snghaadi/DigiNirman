<?php include "includes/db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/login.css">
    <title>Digi Nirman | Admin Login </title>
    <link rel="shortcut icon" href="images/logo.png">
</head>

<body>
<header>
    <nav id="navbar">
      <div class="container">
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
  <div id="main">
    <div id="image">
        <!-- Login System -->
    <div class="well">
                    <h4>ADMIN LOGIN</h4> <br>
                    <form action = "includes/login.php" method="post">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="USERNAME">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="PASSWORD">
                    </div>
                    <span class = "input-group-button">
                    <div id ="submit">
                    <button class="btn-btn-primary" name="login" type="submit">LOGIN</button>
                    </div>
                    </span>

                    </form><!--search form-->
                    <!--input-group -->
                </div>
    </div>
  </div>
</body>