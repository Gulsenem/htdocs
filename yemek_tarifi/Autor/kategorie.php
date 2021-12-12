<?php

    if(empty($_POST["cat_name"]))
    {
        exit("Bitte geben sie etwas");

    }

    $cat_name = $_POST["cat_name"];

    include ("../verbinden.php");

    $anfrage = "INSERT INTO kategoriename (cat_name) VALUES ('". $cat_name . "' );";

    if($verbindung->query($anfrage) === TRUE)
    {
        echo("Erfolgreich hinzefügt");
    }
    else
    {
        echo("Es gab ein Problem");
    }


    include ("../close.php");
?>