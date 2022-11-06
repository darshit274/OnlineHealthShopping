<?php
require("include/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Online Health Store</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <style>
            .bg {
  /* The image used */
  background-image: url("img/background.jpeg");

  /* Full height */
  height: 93%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.row{
    margin-top: 150px;
}
body{
    padding-top: 40px;
}
h2{
    color:  whitesmoke;
}
        </style>
    </head>
    <body>
       <div class="bg">
        <?php include 'include/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                 
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <center>
                        <h2>SIGN UP</h2>
                        </center><br>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                                    <?php
                                    if (isset($_GET['error'])){
                                    echo $_GET['m1']; }
                                    ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                                     <?php
                                    if (isset($_GET['error'])){
                                    echo $_GET['m1']; }
                                    ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php include "include/footer.php"; ?>
    </body>
</html>