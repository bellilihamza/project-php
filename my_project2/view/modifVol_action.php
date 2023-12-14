<?php
require_once('../controllers/volController.php');
require_once('../models/vol.php');
$vol=new vol();
if($volCtr=new volController())
{$volCtr->modifier_vol($_POST['idcomp'],$_POST['idvol']);
        header('Location:listVol.php');
        exit();
}
        else{header('Location:modifVol.php');}
?>