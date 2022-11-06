<?php
require("include/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Health Shopping</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <style>
            .bg {
  /* The image used */
  background-image: url("img/background1.jpeg");

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
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    <?php
                                    if (isset($_GET['error'])){
                                    echo $_GET['error'];}
                                    ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <?php include 'include/footer.php'; ?>
    </body>
</html>