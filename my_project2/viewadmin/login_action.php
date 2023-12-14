<?php
session_start();

require_once('../controllers/clientController.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["uname"];
    $psw = $_POST["psw"];
    $client = new Client();

    $nom = $_POST["lastname"];
    $prenom = $_POST["firstname"];
    $telephone = $_POST["number"];
    $adr = $_POST["email"];
    $mot = $_POST["password"];
    $cin = $_POST["cinx"];

    $clientc = new ClientController();

    if (!empty($cin)) {
        $client->setNom($nom);
        $client->setPrenom($prenom);
        $client->setTel($telephone);
        $client->setadr($adr);
        $client->setcin($cin);
        $client->setmot($mot);
       $clientc->insert($client);
       $stmt=$clientc->getcin($cin);    
        if (!empty($stmt) ) {
            $_SESSION['client_id'] = $stmt['id'];
            header("Location:../templatemo_409_travel/index.php");
            exit();
        } else {
            header("Location:../templatemo_409_travel/contact.html");
        }
    } else {
        

        if ($stm = $clientc->verifLogin($uname,$psw)) {
            $_SESSION['client_id'] = $stm['id'];
            header("Location:../templatemo_409_travel/index.php");
            exit();
        } else {
            header("Location:../templatemo_409_travel/contact.html");
        }
    }
} else {
    header("Location:../templatemo_409_travel/contact.html");
}

?>