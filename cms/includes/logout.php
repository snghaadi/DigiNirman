<?php session_start(); ?>

<?php
    $_SESSION['user_firstname'] = "";
    $_SESSION['user_lastname'] = "";
    $_SESSION['username'] = "";
    $_SESSION['user_password'] = "";

    header("Location: ../index.php");
?>