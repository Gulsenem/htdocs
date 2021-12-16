<?php

    $server_name = "localhost";
    $server_user = "root";
    $server_pass = "";
    $database_name = "test";

    $verbindung = new mysqli($server_name, $server_user, $server_pass, $database_name);

    $anfrage = "SELECT * FROM users";
    $ergebnis = $verbindung->query($anfrage);
    while($row = $ergebnis->fetch_assoc())
    {
        $imageData  = $row["resim"];
    }
    header("content-type: resim/jpeg");
    echo("img src='$imageData'");

?>
