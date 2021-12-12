<?php
    $server_name = "localhost";
    $server_user = "root";
    $server_pass = "";
    $database_name = "test";
    
    $verbindung = new mysqli($server_name, $server_user, $server_pass, $database_name);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Produkte: </h3>

    <div class="cards" style="display:flex;" >
        <?php
            $anfrage = "SELECT * FROM produkte  Where bestand>4";
            $result   = $verbindung->query($anfrage);

            while($row = $result->fetch_assoc())
            {
                ?>
                    <div class="box" style="border: 1px solid black; padding: 10px 20px; margin: 10px;">
                        <h3> <?= $row["name"] ?> </h3>
                        <p><?= $row["content"] ?></p>
                        <div>preis: <?= $row["preis"] ?> </div>
                        <div>bestand: <?= $row["bestand"] ?> </div>
                    </div>
                <?php
            }

        ?>
    </div>


</body>
</html>