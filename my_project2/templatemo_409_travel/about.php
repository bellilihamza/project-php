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
                                	<li class="active"><a href="about.html">Reservation</a></li>
                                    <?php
                                    
                                    $id=$_SESSION['client_id'];
                                    if(empty($id)){
                                    echo'
                                    <li><a href="contact.html">Login</a></li>';
                                    }                                    else{echo'  <li><a href="services.php">Compte</a></li>';}

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
                                <li><a href="services.html">Services</a></li>
                                <li class="active"><a href="about.html">About Us</a></li>
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
                <?php
                require_once('../controllers/destinationCntroller.php');
                $result=new destinationController();
                $data=$result->liste();
                if (!empty($data)) {
                    echo '<form >
                    <h1> Liste Reservation</h1>

                    <div class="search-container" style="width :60%;">
                    <input type="text" id="myInput" onkeyup="filterTable()" placeholder="Rechercher par pays">
                    </div>


                        <table id="myTable">
                            <tr class="header">
                                <th style="width:20%;">country</th>
                                <th style="width:20%;">state</th>
                                <th style="width:20%;">date</th>
                                <th style="width:20%;">nombre de place restante</th>
                                <th style="width:20%;">reserve </th>
                            </tr>';
                
                    foreach ($data as $item) {
                        echo '<tr>';
                        echo '<td>' . $item['country'] . '</td>';
                        echo '<td>' . $item['state'] . '</td>';
                        echo '<td>' . $item['date'] . '</td>';
                        echo '<td>' . $item['nombre'] . '</td>';
                        echo '<td><a href="reservationForm.php?id='. urlencode($item["iddes"]) .'">  <img src="../image/reserv.jpg" alt="" height="80" width="150" style="border-radius:50%;">';
                        echo '</tr>';
                    }
                
                    echo '</table>';
                    echo '<p class="error-message" id="errorMessage"></p>';
                    echo '</form>';
                }
                        
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


       }
       #myTable {
            width: 100%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 50px;
            text-align: center ;
            
        }

        #myTable th  {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }
        #myTable td{ border: 1px solid #ddd;
            padding-bottom: 20px;
            text-align: center ;
            font-size: 18px;
            color:black;
        }

        #myTable th {
            
            background-color: #9ED034;
            color: white;
        }
       form{ 
        width:70%;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
}
.search-container input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        #myInput{
            width :100%;
            color:black;
        }

input[type="text"]{

width: 100%;
height: 30px;
border-radius: 20px;
background-color: transparent;
color: aliceblue;


padding: 20px;
margin: 20px 0px;
}
div p{
    margin-top:30px;
}div h1{
    margin-top:30px;
    font-size: 40px;
}
    </style>
    <script>
           function filterTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1]; 
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    </script>
</html>