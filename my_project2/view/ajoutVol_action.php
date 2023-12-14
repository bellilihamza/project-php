<?php
require_once('../controllers/volController.php');
require_once('../models/vol.php');
$nom=$_POST['idvol'];
$prenom=$_POST['idcomp'];
$vol=new vol($nom,$prenom);
$volCtr=new volController();
$res=$volCtr->insert($vol);
if($res==true){
    header('Location:listVol.php');
    exit();
}
else{
    header('Location:ajoutVol.php');
    exit();

}
?>