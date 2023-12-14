<?php
include_once('../models/Client.php') ;
include_once('../database/config.php');
class ClientController extends Connexion{
function __construct() {
parent::__construct();
}


function insert(Client $c){

$query="insert into clients(Nom,Prenom,Adresse_email,cin,Numero_telephone,mot)values(?,?,?,?,?,?)";
$res=$this->pdo->prepare($query);

$aryy =array($c->getNom(),$c->getPrenom(),$c->getadr(),$c->getcin(),$c->getTel(),$c->getmot()) ;
return $res->execute($aryy);

}

function getClient($id){
    $query="SELECT * FROM clients WHERE id = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}


function delete($idClient) {
$query = "delete from clients where id=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idClient));

}
function liste(){

$query = "select * from clients";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_user(Client $c)
{
$sql = "UPDATE clients SET  nom=?, prenom=?,Adresse_email=?,Numero_telephone=? ,mot=? WHERE cin=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getadr(),$c->getTel(),$c->getmot(),$c->getcin()));
}

function verifLogin($adr,$mot) {
    $query = "SELECT * FROM clients WHERE Adresse_email=? AND mot=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($adr,$mot));

    return $res->fetch(PDO::FETCH_ASSOC);
}
function loginadmin($adr,$mot) {

    $query = "SELECT * FROM admin WHERE Adresse_email=? AND password=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($adr,$mot));

}
function getcin($cin){
    $query = "SELECT * FROM clients WHERE cin=? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($cin));

    return $res->fetch(PDO::FETCH_ASSOC);
}

}
?>