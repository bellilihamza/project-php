<?php
session_start();
$id=$_SESSION['client_id'];
unset($_SESSION['client_id']);
header('Location:../templatemo_409_travel/index.php');

?>