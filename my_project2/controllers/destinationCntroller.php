<?php

include_once('../models/destination.php');
include_once('../database/config.php');

class destinationController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(Destination $destination) {
        $query = "insert into destination(country, state, date, nombre,time,idvol ) values(?, ?, ?, ?,?, ?)";
        $res = $this->pdo->prepare($query);

        $aryy = array(
            $destination->getcountry(),
            $destination->getstate(),
            $destination->getdate(),
            $destination->getnombre(),
            $destination->gettime(),
            $destination->getidVol()
        );

        return $res->execute($aryy);
    }

    function getDestination($iddes) {
        $query = "SELECT * FROM destination WHERE iddes = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($iddes));
        $array = $res->fetch();
        return $array;
    }

    function delete($iddes) {
        $query = "delete from destination where iddes=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($iddes));
    }

    function liste() {
        $query = "select * from destination where nombre>0";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function modifier_destination(destination $destination,$iddes) {
        $sql = "UPDATE destination SET country=?, state=?, date=?, nombre=?,time=?, idvol=?WHERE iddes=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(
            $destination->getcountry(),
            $destination->getstate(),
            $destination->getdate(),
            $destination->getnombre(),
            $destination->gettime(),
            $destination->getidVol(),
            $iddes
        ));
    }
    function rechercheDestination($country,$state) {
        $query = "SELECT * FROM destination WHERE country =? AND state =? and nombre>0";
        $res = $this->pdo->prepare($query);
        $res->execute(array($country,$state));
        $array = $res->fetchAll();
        return $array;
    }
  
    function updateNumberPlace($nombre, $id) {
        $query = "UPDATE destination SET nombre = nombre - ? WHERE iddes = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($nombre, $id));
    }
    function selectdes (){

        $query = "SELECT * FROM destination WHERE country IN ('ITALY', 'GERMANY', 'FRANCE', 'SPAIN','SUISSE') and nombre>0";
        $res = $this->pdo->prepare($query);
        $res->execute();
        $array = $res->fetchAll();
        return $array;
    }
    function affichedes($iddes){

        $query = "SELECT * FROM destination WHERE iddes = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($iddes));
        $array = $res->fetchAll();
        return $array;
    }
}
?>
