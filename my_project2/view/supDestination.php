<?php
require_once("../controllers/destinationCntroller.php");

$destinationController = new destinationController();
$iddes = $_GET['id'];
if($destinationController->delete($iddes)){
header('Location: listDestination.php');}
else{ echo'erreur';}
?>
