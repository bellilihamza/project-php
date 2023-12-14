<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Tableau Professionnel</title>
    <style>
        /* Ajoutez du style pour la barre de recherche */
        #searchBar {
            margin: 10px 0;
        }
        .a1{    margin-left: 400px;            margin-top:50px;

}
    </style>
</head>
<body style="margin:0;">


<div class="navbar">
    <a  href="index.php"> Client</a>
    <a href="listVol.php">Vol</a>
    <a  class="active" href="listReservation.php">Rservation</a>
    <a href="listDestination.php">Destination</a>
    <a   href="list compagnie.php">Compagnie</a>

    <div class="navbar-right">      
          <a href="../admin/logoutadmin.php">logout</a>

    </div>
</div><div class="a1">
<!-- Ajoutez une barre de recherche -->
<input type="text" id="searchBar" placeholder="Rechercher par nom">
</div>
<div style="width:100%;   display: flex;justify-content: center;align-items: center;">
<a href='ajoutReservation.php'  class="r">Inscription</a>
</div>
<style>
    /* Style de base pour le lien */
.r {
  display: inline-block;
  padding: 10px 20px;
  text-decoration: none;
  background-color: #3498db;
  color: #fff;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

/* Changement de couleur au survol */
.r:hover {
  background-color: #2980b9;
}

</style>
<?php
require_once('../controllers/reservationController.php');

$us = new reservtionController();
$rese = $us->liste();
?>

<table id="myTable">
    <tr>
        <th>ID</th>
        <th>id client</th>
        <th>nombre</th>
        <th>DateReservation</th>
        <th>id destination</th>
        <th colspan="2" style="text-align: center;">Action</th>
    </tr>

    <?php
    if (is_array($rese) || is_object($rese)) {
        foreach ($rese as $row) {
            echo "
            <tr>
                <td>$row[ReservationID]</td>
                <td>$row[ClientID]</td>
                <td>$row[nombre]</td>
                <td>$row[DateReservation]</td>
                <td>$row[iddes]</td>
                <td><a href='modifreservation.php?id=$row[ReservationID]'>Modifier</a></td>
                <td><a href='supreservation.php?id=$row[ReservationID]'>Supprimer</a></td>
            </tr>";
        }
    }
    ?>
</table>


<script>
    // Script pour filtrer les résultats du tableau en fonction du nom
    document.getElementById('searchBar').addEventListener('input', function () {
        var filter, table, tr, td, i, txtValue;
        filter = this.value.toUpperCase();
        table = document.getElementById('myTable');
        tr = table.getElementsByTagName('tr');

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName('td')[1]; // Colonne du nom
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = '';
                } else {
                    tr[i].style.display = 'none';
                }
            }
        }
    });
</script>

</body>
</html>
