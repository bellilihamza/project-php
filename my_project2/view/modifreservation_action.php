<?php
require_once('../controllers/reservationController.php');
require_once('../models/reservations.php');
$reservationCtr=new reservtionController();
$reservation=new reservation();
$reservation->setClientID($_POST['idc']);
$reservation->setiddes($_POST['iddes']);
$reservation->setnombre($_POST['nombre']);
$reservation->setDateReservation($_POST['date']);
$reservationCtr->modifier_reservation($reservation,$_POST['idr']);
header('Location:listreservation.php');

?>