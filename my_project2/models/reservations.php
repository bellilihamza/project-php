<?php

class reservation {
private $ClientID,$iddes,$nombre,$DateReservation;
function __construct($ClientID="",$nombre="",$DateReservation="",$iddes="") {
	
    $this->ClientID=$ClientID;
    $this->nombre=$nombre;
    $this->DateReservation=$DateReservation;
    $this->iddes=$iddes;

}
public function getClientID(){
	return $this->ClientID;
}
public function getiddes(){
	return $this->iddes;
}

public function getnombre(){
	return $this->nombre;
}

public function getDateReservation(){
	return $this->DateReservation;
}


public function setiddes($iddes){
        $this->iddes = $iddes;
    }

public function setClientID($ClientID){
        $this->ClientID = $ClientID;
    }

public function setnombre($nombre){
        $this->nombre = $nombre;
    }

 public function setDateReservation($DateReservation){
        $this->DateReservation = $DateReservation	;
    }
	
}
?>