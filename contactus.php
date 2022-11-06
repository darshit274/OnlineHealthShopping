<?php
require("include/common.php");
if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Online Health Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <style>
        .header{
            margin-top: 50px;
        }
        .body{
            margin-top: 100px;
        }
        .contact{
            padding-right: 100px;
            padding-left: 100px;
            margin-right: auto;
            margin-left: auto;
        }
    </style>
        
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'include/header.php';
        ?>
	<div id="page">
            <div id="body" class="contact" >
			<div class="header">
				<div style="text-align: center">
                                    <h1 style="background-color: bisque">Contact</h1>
				</div>
			</div>
                <div class="body" style="text-align: center">
                    <div class="contact" style="padding-top: 50px">
					<h1>INQUIRY FORM</h1>
                                        <form  action="contact_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name1"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email1" required = "true">
                                    <?php
                                    if (isset($_GET['error'])){
                                    echo $_GET['m1']; }
                                    ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Subject" maxlength="10" size="10" name="subject" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Share your thoughts" name="about" required = "true">
                            </div>
                            <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
                        </form>
				</div>
                <div class="section" style="text-align: center">
                    <h1>WE’D LOVE TO HEAR FROM YOU.</h1>
					<p></p>
				</div>
                        </div>
		</div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
</body>
</html>