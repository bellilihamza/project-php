<?php
include_once('../models/vol.php') ;
include_once('../database/config.php');
class VolController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(vol $v){
    $query = "insert into vol(idvol,idcomp) values(?,?)";
    $res = $this->pdo->prepare($query);

    $aryy = array($v->getidvol(),$v->getidcomp());
    return $res->execute($aryy);
}
function getvol($idvol){
    $query="SELECT * FROM vol WHERE idvol = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($idvol));
    $array= $res->fetch();
    return $array;
}


function delete($idvol) {
    $query = "delete from vol where idvol=?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($idvol));
    }

    function liste(){
        $query = "select 	v.idvol, v.idcomp,d.nom  from vol v,compagnie d where d.idcomp=v.idcomp";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
        }
        function modifier_vol($idvol,$id)
        {
        $sql = "UPDATE vol SET  idcomp=? WHERE idvol=?" ;
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute(array($idvol,$id));
        }

}
?>