<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Travel Responsive Web Template</title>
        <meta name="description" content="">
<!-- 
Travel Template
http://www.templatemo.com/tm-409-travel
-->
        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="site-header">
            <div class="container">
                <div class="main-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-10">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo.png" alt="travel html5 template" title="travel html5 template">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-6 col-xs-2">
                            <div class="main-menu">
                                <ul class="visible-lg visible-md">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about.php">Reservation</a></li>
                                    <?php
                                    
                                    $id=$_SESSION['client_id'];
                                    if(empty($id)){
                                    echo'
                                    <li><a href="contact.html">Login</a></li>';}
                                    else{echo'  <li><a href="services.php">Compte</a></li>';}
                                    ?>

                                </ul>
                                <a href="#" class="toggle-menu visible-sm visible-xs">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div> <!-- /.main-menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div> <!-- /.main-header -->
                <div class="row">
                    <div class="col-md-12 visible-sm visible-xs">
                        <div class="menu-responsive">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.html">Login</a></li>
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->

      
        <div class="flexslider">
            <ul class="slides">
              
                   
                <li>
                    <div class="overlay"></div>
                    <img src="images/templatemo_slide_1.jpg" alt="Special 1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <span class="price">$7,500</span>
                                    <h3 class="title">Venice, Italy</h3>
                                    <p>Travel is a responsive Bootstrap layout from 
                                    <span class="blue">template</span><span class="green">mo</span> website.
										All images used in this template are from 
                            			<a rel="nofollow" href="http://unsplash.com" target="_parent">Unsplash</a>.</p>
                                    <a href="about.php" class="slider-btn">Pre-booking</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="overlay"></div>
                    <img src="images/templatemo_slide_2.jpg" alt="Special 2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <span class="price">$12,400</span>
                                    <h3 class="title">Bercelona, Spain</h3>
                                    <p>You may visit <a href="http://tourkrub.co" target="_parent">Tour Krub</a> for Thai Tour Packages. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas.</p>
                                    <a href="about.php" class="slider-btn">Reserve Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="overlay"></div>
                    <img src="images/templatemo_slide_3.jpg" alt="Special 3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <span class="price">$20,800</span>
                                    <h3 class="title">Basel, Switzerland</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas.</p>
                                    <a href="about.php" class="slider-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div> <!-- /.flexslider -->

        
        
        <div class="container">
            <div class="row">
                <div class="our-listing owl-carousel">
                <?php 
                   
                   require_once('../controllers/destinationCntroller.php');
                   $result=new destinationController();
                   
                   if($data=$result->selectdes()){
                    foreach($data as $value){
                   echo'
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>'. $value["country"] .'</h4>
                            </div>
                            <img src="images/'. $value["image"] .'.jpg" alt="destination 1">
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                            <h5>'. $value["state"] .'</h5>
                            <span>'. $value["date"] .'</span>

                            <a href="reservationForm.php?id='. $value["iddes"] .'" class="price-btn">$1,700 Book Now</a>
                        </div> <!-- /.list-content -->
                    </div> ';}}
                    ?><!-- /.list-item -->
                     <!-- /.list-item -->
                </div> <!-- /.our-listing -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

		<div class="middle-content"></div>

        <div class="partner-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner1.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner2.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner3.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner1.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner2.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item last">
                            <img src="images/partners/partner3.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.partner-list -->

		

        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo">
                            <a href="index.php">
                                <img src="images/logo.png" alt="">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">
                            <span>
                            	
                                Copyright &copy; 2014 <a href="#">vivatogo</a>
                            
                            
                            <!--
                            | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a>
                            -->
                            
                            </span>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <ul class="social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-flickr"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!-- templatemo 409 travel -->  
    </body>
</html>