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
        <title>About - Travel</title>
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
                                    <li><a href="index.php">Home</a></li>
                                	<li ><a href="about.php">Reservation</a></li>
                                    <?php
                                    $id=$_SESSION['client_id'];
                                    if(empty($id)){
                                    echo'
                                    <li><a href="contact.html">Login</a></li>';}
                                    else{echo'  <li><a href="services.php">Compte</a></li>';}
                                    ?>                                </ul>
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
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><a href="about.html">Reservation</a></li>
                                <li><a href="contact.html">Login</a></li>
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->

        <div class="page-top" id="templatemo_about">
        </div> <!-- /.page-header -->
        <div class='form1'>
            <form action="../viewadmin/reservtion.php" method='POST'>
                <?php
                $iddes=$_GET['id'];
                require_once('../controllers/destinationCntroller.php');
                $result=new destinationController();
                $data=$result->affichedes($iddes);
                $_SESSION['iddes']=$data[0]['iddes'];
                echo'
                <h1>destination</h1>
            <p>country  : '.$data[0]['country'].'</p>
            <br>
            <p>state  :  ' .$data[0]['state'].'</p>
            <br>
            <p>nombre de place reste : <span name="nombre"> '.$data[0]['nombre'].'</span></p>
            <br>
            <input type="number" placeholder="Entrez le nombre" name="nb"  onblur="checkNombrePlace()" required>
            <button type="submit"  class="cancelbtn" id="reserveButton">reservee</button>
            </form>';
?>
        </div>
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
    <style>
       .form1{
        width:100%;
        height:100%;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
        margin-bottom:100px;


       }
       form{ 
        width:70%;
display:flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
}

input[type="number"]{

width: 20%;
height: 30px;
border-radius: 20px;
background-color: transparent;
color: aliceblue;
padding: 10px;
margin: 8px 0;
color :black;
padding: 20px;
margin: 20px;
}
div p{
    margin-top:30px;
}div h1{
    margin-top:30px;
    font-size: 40px;
}


    </style>
    <script>    
function checkNombrePlace() {
  console.log("hi");
            var inputNombre = parseInt(document.getElementsByName("nb")[0].value);
            console.log(inputNombre);
            var nombre = parseInt(document.getElementsByName("nombre")[0].textContent);
                console.log(nombre);

                if (nombre<  inputNombre || inputNombre<=0) {
                    alert('La destination n\'a pas assez de places.');
                    document.getElementById('reserveButton').disabled = true;
                } else {
                    document.getElementById('reserveButton').disabled = false;
                }
        }


  </script>
  
</html>