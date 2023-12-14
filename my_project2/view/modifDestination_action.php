<?php
require_once('../controllers/destinationCntroller.php');
require_once('../models/destination.php');

if($destination=new destination()){
    $destination->setcountry($_POST['country']);
    $destination->setstate($_POST['state']);
    $destination->setdate($_POST['date']);
    $destination->setnombre($_POST['nombre']);
    $destination->setidvol($_POST['idvol']);
    $destination->settime($_POST['time']);

    $destinationCtr=new destinationController();
    $destinationCtr->modifier_destination($destination,$_POST['id']);
    header('Location:listDestination.php');
}
else{
    header('Location:modifDestination.php');
}
?>