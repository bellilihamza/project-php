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

      
    </style>
    <title>Professional Form</title>
</head>
<body>
<div class="navbar">
    <a href="index.php"> Client</a>
    <a    href="listVol.php">Vol</a>
    <a href="listReservation.php">Rservation</a>
    <a href="listDestination.php">Destination</a>
    <a class="active"  href="list compagnie.php">Compagnie</a>

    <div class="navbar-right">        
        <a href="../admin/logoutadmin.php">logout</a>

    </div>
</div>
<div class="c">
<form action="ajoutCompagnie_action.php" method="post">
    <label for="username">Id compagnie:</label>
    <input type="text" id="username" name="idcomp" required>

    <label for="username">Nom :</label>
    <input type="text" id="username" name="nom" required>

  

    <input type="submit" value="Ajouter">
</form>
</div>
</body>
</html>
