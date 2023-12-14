<?php
require_once('../controllers/destinationCntroller.php');
$destinationCtr=new destinationController();
$res=$destinationCtr->getDestination($_GET['id']);

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
    <a href="index.php"> Client</a>
    <a    href="listVol.php">Vol</a>
    <a href="listReservation.php">Rservation</a>
    <a href="listDestination.php" class="active"  >Destination</a>
    <a href="list compagnie.php">Compagnie</a>

    <div class="navbar-right">        
        <a href="../admin/logoutadmin.php">logout</a>

    </div>
</div>
<div class="c">
<form action="modifDestination_action.php" method="post">
    <label for="username">id destination:</label>
    <input type="text" id="username" name="id"  value = "<?php echo $res['iddes'] ?>"required>

    <label for="username">country:</label>
    <input type="text" id="username" name="country"  value = "<?php echo $res['country'] ?>"required>

    <label for="username">state:</label>
    <input type="text" id="username" name="state" value = "<?php echo $res['state'] ?>" required>

    <label for="password">date:</label>
    <input type="date" id="adr" name="date"value = "<?php echo $res['date'] ?>" required>

    <label for="username">nombre:</label>
    <input type="text" id="nombre" name="nombre"  value = "<?php echo $res['nombre'] ?>"required>

    <label for="username">id vol:</label>
    <input type="text" id="tele" name="idvol" value = "<?php echo $res['idvol'] ?>" required>

    <label for="username">tile:</label>
    <input type="time" id="Mot de passe" name="time"  value = "<?php echo $res['time'] ?>"required>
        <br>
        <br>
    <input type="submit" value="Ajouter">
</form>
</div>
</body>
</html>
