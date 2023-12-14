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
    <a class="active" href="index.php"> Client</a>
    <a href="listVol.php">Vol</a>
    <a href="listReservation.php">Rservation</a>
    <a href="listDestination.php">Destination</a>
    <a   href="list compagnie.php">Compagnie</a>

    <div class="navbar-right">
        <a href="../admin/logoutadmin.php">logout</a>
*    </div>
</div><div class="a1">
<!-- Ajoutez une barre de recherche -->
<input type="text" id="searchBar" placeholder="Rechercher par nom">
</div>
<div style="width:100%;   display: flex;justify-content: center;align-items: center;">
<a href='ajoutClient.php'  class="r">Inscription</a>
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
require_once('../controllers/ClientController.php');

$us = new ClientController();
$rese = $us->liste();
?>

<table id="myTable">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
        <th>CIN</th>
        <th>Telephone</th>
        <th>Mot de passe</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>

    <?php
    if (is_array($rese) || is_object($rese)) {
        foreach ($rese as $row) {
            echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[Nom]</td>
                <td>$row[Prenom]</td>
                <td>$row[Adresse_email]</td>
                <td>$row[cin]</td>
                <td>$row[Numero_telephone]</td>
                <td>$row[mot]</td>
                <td><a href='modifClient.php?id=$row[id]'>Modifier</a></td>
                <td><a href='supclient.php?id=$row[id]'>Supprimer</a></td>
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
