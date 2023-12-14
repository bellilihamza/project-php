<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
$clientCtr=new ClientController();
$client=new Client();
$client->setcin($_POST['cin']);
$client->setNom($_POST['nom']);
$client->setPrenom($_POST['prenom']);
$client->setTel($_POST['tele']);
$client->setmot($_POST['mot']);
$client->setadr($_POST['adr']);

 

    $clientCtr=new ClientController();
    if($res=$clientCtr->insert($client)){
	header('Location:index.php');
    }
else{
    echo'erreurnn';
}
?>