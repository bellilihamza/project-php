<?php

class compagnie {
private $idcomp,$nom;
function __construct($idcomp="",$nom="") {
	
    $this->idcomp=$idcomp;
    $this->nom=$nom;
}
public function getidcomp(){
	return $this->idcomp;
}
public function getnom(){
	return $this->nom;
}



public function setnom($nom){
        $this->nom = $nom;
    }

public function setidcomp($idcomp){
        $this->idcomp = $idcomp;
    }


}
?>