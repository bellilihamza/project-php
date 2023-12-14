<?php
require_once('../controllers/adminController.php');
    $admin=new  adminController();

    $mail = $_POST["mail"];
    $psw = $_POST["pass"];
    if($adminData =$admin->loginadmin($mail, $psw)){
    header("Location:../view/index.php");}
    else{   
         header("Location:../admin/index.php");}




?>