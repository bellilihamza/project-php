<?php
include_once('../database/config.php');
class adminController extends Connexion{
function __construct() {
parent::__construct();
}


function loginadmin($adr,$mot) {

    $query = "SELECT * FROM admin WHERE Adresse_email=? AND password=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($adr,$mot));
    return $res->fetch(PDO::FETCH_ASSOC);

}
}