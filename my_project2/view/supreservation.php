<?php
require_once("../controllers/reservationController.php");

$reservationController = new reservtionController();
$idr = $_GET['id'];
if($reservationController->delete($idr)){
header('Location: listreservation.php');}
else{ echo'erreur';}
?>
