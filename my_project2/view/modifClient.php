<?php
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
$res=$clientCtr->getClient($_GET['id']);
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        
        .c{
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
           
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .navbar {
    overflow: hidden;
    background-color: #333;
  
}

.navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.navbar a.active {
    background-color: #4CAF50;
    color: white;
}

.navbar-right {
    float: right;
}
      
    </style>
    <title>Professional Form</title>
</head>
<body>
<div class="navbar">
    <a class="active" href="index.php"> Client</a>
    <a    href="listVol.php">Vol</a>
    <a href="listReservation.php">Rservation</a>
    <a href="listDestination.php">Destination</a>
    <a   href="list compagnie.php">Compagnie</a>

    <div class="navbar-right">        
        <a href="../admin/logoutadmin.php">logout</a>

    </div>
</div>
<div class="c">
<form action="modifClient_action.php" method="post">
    <label for="username">id:</label>
    <input type="text" id="username" name="id"  value = "<?php echo $res['id'] ?>"required>

    <label for="username">Nom:</label>
    <input type="text" id="username" name="nom"  value = "<?php echo $res['Nom'] ?>"required>

    <label for="username">Prenom:</label>
    <input type="text" id="username" name="prenom" value = "<?php echo $res['Prenom'] ?>" required>

    <label for="password">adresse:</label>
    <input type="email" id="adr" name="adr"value = "<?php echo $res['Adresse_email'] ?>" required>

    <label for="username">Cin:</label>
    <input type="text" id="cin" name="cin"  value = "<?php echo $res['cin'] ?>"required readonly>

    <label for="username">Telephone:</label>
    <input type="text" id="tele" name="tele" value = "<?php echo $res['Numero_telephone'] ?>" required>

    <label for="username">Mot de passe:</label>
    <input type="text" id="Mot de passe" name="mot"  value = "<?php echo $res['mot'] ?>"required>

    <input type="submit" value="Ajouter">
</form>
</div>
</body>
</html>
