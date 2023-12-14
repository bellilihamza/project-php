<?php

class vol {
private $idvol,$idcomp;
function __construct($idvol="",$idcomp="") {
	
    $this->idvol=$idvol;
    $this->idcomp=$idcomp;
}

public function getidvol(){
	return $this->idvol;
}

public function getidcomp(){
	return $this->idcomp;
}

public function setidvol($idvol){
        $this->idvol = $idvol;
    }

 public function setidcomp($idcomp){
        $this->idcomp = $idcomp	;
    }
	
}
?>