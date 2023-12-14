<?php
session_start();
echo '
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h2><a href="#" class="logo"></a>viva togo</h2>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Produits</a></li>
            <li><a href="#">Chop</a></li>
            <li><a href="#">Connexion</a></li>
        </ul>
    </header>

    <section class="main">
        <img src="../image/mountains7.webp" id="mountains7" alt="">
    </section>

    <div class="results">';
    require_once('../controllers/destinationCntroller.php');

    $iddes = $_GET['iddes'];
    $id = $_SESSION['client_id'];

    echo '
    </div>

    <div class="center-form">
        <div class="modal">
            <form action="reservtion.php" method="post" class="modal-content">
                <label for="">ID Destination</label>
                <input type="text" placeholder="Entrer l\'ID destination" name="iddes" value="' . $iddes . '" readonly>
                <label for="">ID Client</label>
                <input type="number" placeholder="Votre ID" name="idc" value="' . $id . '" readonly>
                <label for="">Entrez le nombre de places reservees</label>
                <input type="number" placeholder="Entrez le nombre" name="nb">
                <button type="submit" id="reserveButton">Réserver</button>
            </form>
        </div>
    </div>';
?>
</div>

<style>
    .modal {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fefefe;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 10px;
        z-index: 1;
        width: 400px;
        text-align: center;
        background-color: transparent;
        backdrop-filter: blur(10px);
    }

    label {
        color: #fff;
    }

    .modal-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="number"] {
        width: 100%;
        height: 30px;
        border-radius: 20px;
        background-color: transparent;
        color: aliceblue;
        padding: 10px;
        margin: 8px 0;
        padding: 20px;
        margin-top: 15px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        margin: 8px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        background-color: #45a049;
    }

    .container {
        padding: 20px;
    }
</style>

</body>
</html>
