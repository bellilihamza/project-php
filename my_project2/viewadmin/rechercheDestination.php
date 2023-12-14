<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>
    <header>
    <h2><a href="#"class="logo"></a>viva togo</h2>
    <ul>
        <li><a href="">home</a></li>
        <li><a href="">product</a></li>
        <li><a href="">chop</a></li>
        <li><a href="login.php">login</a></li>
    </ul>

    </header>
    <section class="main">
       
        <img src="../image/mountains7.webp" id="mountains7" alt="">
        
    </section>
    <div class="results">
        <?php
        require_once('../controllers/destinationCntroller.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $country = $_POST["country"];
            $state = $_POST["state"];

            $destination = new DestinationController();
            $results = $destination->rechercheDestination($country, $state);

            if (count($results) > 0) {
                echo '<table>';
                echo '<tr><th>Pays</th><th>Etat</th><th>Date</th><th>Nombre</th><th>ID Vol</th><th>Heure</th><th>reserve</th></tr>';
                foreach ($results as $value) {
                    echo '<tr>';
                    echo '<td>' . $value["country"] . '</td>';
                    echo '<td>' . $value["state"] . '</td>';
                    echo '<td>' . $value["date"] . '</td>';
                    echo '<td>' . $value["nombre"] . '</td>';
                    echo '<td>' . $value["idvol"] . '</td>';
                    echo '<td>' . $value["time"] . '</td>';
                    echo '<td><a href="select_destination.php?iddes='. urlencode($value["iddes"]) .'">  <img src="../image/reserv.jpg" alt="" height="50" width="50" style="border-radius:50%;">
                    </a></td>';

                    echo '</tr>';
                }
                echo '</table>'; 
            } else {
                echo '<p>Aucun résultat trouvé.</p>';
            }
        }
        ?>
    </div>
            
    
    
</body>
</html>