<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
$clientCtr=new ClientController();
$client=new Client();
$client->setcin($_POST['cin']);
$client->setnom($_POST['nom']);
$client->setPrenom($_POST['prenom']);
$client->setTel($_POST['tele']);
$client->setmot($_POST['mot']);
$client->setadr($_POST['adr']);


$clientCtr->modifier_user($client);
header('Location:index.php');

?>