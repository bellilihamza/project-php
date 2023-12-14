  
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
    <a class="active" href="listReservation.php">Rservation</a>
    <a href="listDestination.php">Destination</a>
    <a  href="list compagnie.php">Compagnie</a>

    <div class="navbar-right">        
        <a href="../admin/logoutadmin.php">logout</a>

    </div>
</div>
<div class="c">
<form action="ajoutResevation_action.php" method="post">

    <label for="username">id client :</label>
    <input type="text" id="username" name="idc" required>

    <label for="username"> id destination:</label>
    <input type="text" id="username" name="iddes" required>

    <label for="password">Date Reservation:</label>
    <input type="date" id="adr" name="date"  required>

    <label for="username">nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

        <br>
        <br>
    <input type="submit" value="Ajouter">
</form>
</div>
</body>
</html>
