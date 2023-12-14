<?php

class destination {
private $country,$state,$date,$nombre ,$idvol,$time;
function __construct($country="",$state="",$date="",$nombre="",$time="",$idvol="") {
	
    $this->country=$country;
    $this->state=$state;
    $this->date=$date;
    $this->nombre=$nombre;
    $this->idvol=$idvol;
}

public function getcountry(){
	return $this->country;
}

public function getidvol(){
	return $this->idvol;
}
public function getstate(){
	return $this->state;
}

public function getdate(){
	return $this->date;
}

public function getnombre(){
	return $this->nombre;
}
public function gettime(){
	return $this->time;
}


public function setstate($state){
        $this->state = $state;
    }
    public function setidvol($idvol){
        $this->idvol = $idvol;
    }

public function setcountry($country){
        $this->country = $country;
    }

public function setdate($date){
        $this->date = $date;
    }

 public function setnombre($nombre){
        $this->nombre = $nombre	;
    }
	public function settime($time){
        return $this->time=$time;
    }
}
?>