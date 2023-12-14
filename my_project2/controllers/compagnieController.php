<?php
include_once('../models/compagne.php');
include_once('../database/config.php');

class compagnieController extends Connexion{
    function __construct()
    {
        parent::__construct();
    }

    function insert(compagnie $c)
    {
       
            $query = "INSERT INTO  compagnie (idcomp,nom)values(?, ?)";
            $res = $this->pdo->prepare($query);

            $aryy = array($c->getidcomp(), $c->getnom());
            return $res->execute($aryy);
      
    }

    function getcompagnie($id)
    {
        try {
            $query = "SELECT * FROM compagnie WHERE idcomp = ? ";
            $res = $this->pdo->prepare($query);
            $res->execute(array($id));
            $array = $res->fetch();
            return $array;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function delete($idcomp)
    {
       
            $query = "delete from compagnie where idcomp=?";
            $res = $this->pdo->prepare($query);
            return $res->execute(array($idcomp));
       
    }


    function liste()
    {
        try {
            $query = "select * from compagnie";
            $res = $this->pdo->prepare($query);
            $res->execute();
            return $res;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function modifier_compagnie(compagnie $c)
    {
        try {
            $sql = "UPDATE compagnie SET  nom=? WHERE idcomp=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($c->getnom(), $c->getidcomp()));
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>