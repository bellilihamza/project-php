<?php
include_once('../controllers/destinationCntroller.php');
include_once('../models/destination.php');

$destination = new Destination();
$destination->setcountry($_POST['country']);

$destination->setstate($_POST['state']);

$destination->setdate($_POST['date']);

$destination->setnombre($_POST['nombre']);

$destination->settime($_POST['time']);

$destination->setidvol($_POST['idvol']);


$destinationController = new destinationController();

if( $data=$destinationController->insert($destination)){

header('location: listDestination.php');}
else{echo $_POST['country'];
    echo $_POST['state'];
    
    echo $_POST['date'];
    
    echo $_POST['nombre'];
    
    echo $_POST['idvol'];
    
    echo $_POST['time'];
    }
?>
