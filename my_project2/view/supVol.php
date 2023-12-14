<?php
require_once('../controllers/volController.php');
$volCtr=new volController();
$volCtr->delete($_GET['id']);
header('Location:listVol.php');
?>