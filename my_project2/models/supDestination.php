<?php
include_once("../controllers/destinationcontroller.php");
$des=new destination();
$iddes=$_GET['iddes'];
if($des->delete($iddes)){
    header[localisation:'listDestination.php']

}