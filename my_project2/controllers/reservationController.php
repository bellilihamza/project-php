<?php
include_once('../models/reservations.php') ;
include_once('../database/config.php');
class reservtionController extends Connexion{
function __construct() {
parent::__construct();
}
function insertreservation(reservation $r)    {
    $query="insert into reservations(ClientID,nombre,DateReservation,iddes)values(?,?,?,?)";
    $res=$this->pdo->prepare($query);
    $aryy =array($r->getClientID(),$r->getnombre(),$r->getDateReservation(),$r->getiddes()) ;
    return $res->execute($aryy);


}
function insertreservationc($nom, $adr, $cin)    {
    $DateReservation= date("Y-m-d");
    $query = "INSERT INTO reservations (ClientID, iddes, nombre,DateReservation) VALUES (?,?,?,?)";
    $res = $this->pdo->prepare($query);
    return $res->execute(array($nom, $adr, $cin, $DateReservation));
}
function getreservation($idclient){
    $query = "SELECT r.nombre,d.country,d.state,d.date FROM destination d,reservations r where d.iddes =r.iddes AND r.ClientID=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($idclient));
    return $res->fetchAll(PDO::FETCH_ASSOC);
}
function getreservations($idr){
    $query = "SELECT * FROM reservations  where ReservationID=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($idr));         
    return $res->fetch();
}
function liste(){
    $query = "SELECT * FROM reservations";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res->fetchAll(PDO::FETCH_ASSOC);
}
function delete($idr){
    $query = "DELETE FROM reservations WHERE ReservationID =?";
    $res = $this->pdo->prepare($query);
    return $res->execute(array($idr));
}
function modifier_reservation(reservation $r ,$ReservationID){
    $query = "UPDATE reservations SET ClientID =?, nombre =?, DateReservation =?,iddes =? WHERE ReservationID =?";
    $res = $this->pdo->prepare($query);
    return $res->execute(array($r->getClientID(), $r->getnombre(), $r->getDateReservation(),$r->getiddes(), $ReservationID));
}
}
?>