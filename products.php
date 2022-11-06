<?php
require("include/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Online Health Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <style>
        h1{
            color:  cornflowerblue;
        }
        .bt{
            background-color: #0c1a01;
background-image: url("img/3px-tile.png");
        }
        body{
    padding-top: 40px;
}
    </style>
    </head>

    <body>
        <div class="bt">
        <?php
        include 'include/header.php';
        include 'include/check-if-added.php';
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to Healthcare</h1>
                <p>Improve your health and wellness by shopping online for health care products such as Ayurvedic medicines, pain relievers, stimulants and more..</p>

            </div>
            <hr>
            <center><h1>Featured categories</h1></center>
            <hr>
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-3">
                        <a href="products1.php#thermo" >
                            <div class="thumbnail">
                                <img src="img/download (3)_1.jpg" alt="">
                                <div class="caption">
                                    <h3>Thermometers</h3>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products1.php#hcd" >
                            <div class="thumbnail">
                                <img src="img/download (10).jpg" alt="">
                                <div class="caption">
                                    <h3>HealthCare Devices</h3>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products1.php#s-s" >
                            <div class="thumbnail">
                                <img src="img/download (2).jpg" alt="">
                                <div class="caption">
                                    <h3>Sleep & Snoring</h3>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="products1.php#a-a" >
                            <div class="thumbnail">
                                <img src="img/images (2).jpg" alt="">
                                <div class="caption">
                                    <h3>Allergy & Asthma</h3>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-3">
                        <a href="products1.php#adi" >
                            <div class="thumbnail">
                                <img src="img/download (3).jpg" alt="">
                                <div class="caption">
                                    <h3>Adult Diapers & Incontinence</h3>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products1.php#fa" >
                            <div class="thumbnail">
                                <img src="img/images (3).jpg" alt="">
                                <div class="caption">
                                    <h3>First Aid</h3>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products1.php#c-d" >
                            <div class="thumbnail">
                                <img src="img/download (5).jpg" alt="">
                                <div class="caption">
                                    <h3>Cough & Cold</h3>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="products1.php#prd" >
                            <div class="thumbnail">
                                <img src="img/download (4).jpg" alt="">
                                <div class="caption">
                                    <h3>pain Relief Devices</h3>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <?php include("include/footer.php"); ?>
    </body>

</html>