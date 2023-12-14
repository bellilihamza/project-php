<?php
require_once('../controllers/compagnieController.php');
$compagnieCtr=new compagnieController();
if($compagnieCtr->delete($_GET['id'])){
header('Location:list compagnie.php');}
else{echo'error';}
?>