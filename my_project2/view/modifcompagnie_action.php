<?php
require_once('../controllers/compagnieController.php');
require_once('../models/compagne.php');
$compagnieCtr=new compagnieController();
$compagnie=new compagnie();
$compagnie->setidcomp($_POST['idcomp']);
$compagnie->setnom($_POST['nom']);


$compagnieCtr->modifier_compagnie($compagnie);
header('Location:list compagnie.php');

?>