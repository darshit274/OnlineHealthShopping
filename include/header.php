<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
           <a class="navbar-brand" href="index.php">Online Health Shopping</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <li><a href="contactUs.php"><span class="glyphicon glyphicon-user"></span>Contact Us</a></li>
                    <li><a href="aboutUs.php"><span class="glyphicon glyphicon-user"></span>About Us</a>
                    ?>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="contactUs.php"><span class="glyphicon glyphicon-user"></span>Contact Us</a></li>
                    <li><a href="aboutUs.php"><span class="glyphicon glyphicon-user"></span>About Us</a>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>