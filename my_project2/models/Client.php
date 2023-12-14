<?php

class Client {
private $nom,$prenom,$adr,$ncin,$telephone,$mot;
function __construct($nom="",$prenom="",$adr="",$cin="",$telephone="",$mot="") {
	
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->cin=$cin;
    $this->adr=$adr;
    $this->telephone=$telephone;
    $this->mot=$mot;
}
public function getcin(){
	return $this->ncin;
}
public function getmot(){
	return $this->mot;

}
public function getadr(){
	return $this->adr;
}

public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}

public function getTel(){
	return $this->telephone;
}


public function setnom($nom){
        $this->nom = $nom;
    }
public function setadr($adr){
        $this->adr = $adr;
    }
public function setcin($ncin){
        $this->ncin = $ncin;
    }

public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

 public function setTel($telephone){
        $this->telephone = $telephone;
    }
    public function setmot($mot){
        $this->mot = $mot;
    }
	
	
}
?>