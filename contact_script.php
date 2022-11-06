<?php

require("include/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name1'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email1'];
  $email = mysqli_real_escape_string($con, $email);

  $subject = $_POST['subject'];
  $subject = mysqli_real_escape_string($con, $subject);

  $shareyourthoughts = $_POST['about'];
  $shareyourthoughts = mysqli_real_escape_string($con, $shareyourthoughts);
    
    $query = "INSERT INTO inquiry(name1, email1, subject, about)VALUES('" . $name . "','" . $email . "','" . $subject . "','" . $shareyourthoughts . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: index.php');
?>