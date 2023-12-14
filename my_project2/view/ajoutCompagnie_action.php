<?php
require_once('../controllers/compagnieController.php');
require_once('../models/compagne.php');
$idcom=$_POST['idcomp'];
$nom=$_POST['nom'];



$comp=new compagnie();
$comp->setidcomp($idcomp);
$comp->setnom($nom);
$compc=new compagnieController();

if($res=$compc->insert($comp)){
header('Location:list compagnie.php');
}
else{

    header('Location:ajoutCompagnie.php');
}
?>