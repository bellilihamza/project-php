<?php
session_start();
include_once('../controllers/reservationController.php');
include_once('../controllers/destinationCntroller.php');


$id = $_SESSION['iddes'];
$idclent =$_SESSION['client_id'];
$nb = $_POST['nb'];
$destination=new destinationController();
$reservation=new reservtionController();
if(!empty($id) && !empty($idclent) && !empty($nb)){
if ($reservation->insertreservationc($idclent,$id,$nb)) {
    $destination->updateNumberPlace($nb,$id);

    header("Location:../templatemo_409_travel../services.php?id=" . urlencode($idclent));
}

} else {
    header("Location:../templatemo_409_travel../contact.html");

}
?>          
v 