<?php

    if(empty($_POST["benutzername"]) || empty($_POST["mail"]) || empty($_POST["passwort"]))
    {
        header("Location: registerPage.php");
        exit();
    }

    $benutzername = $_POST["benutzername"];
    $mail = $_POST["mail"];
    $passwort = $_POST["passwort"];

    include("../verbinden.php");

    $anfrage = "SELECT * FROM users WHERE mail='" . $mail . "' OR benutzername='" . $benutzername . "'";
    $result = $verbindung->query($anfrage);
    if($result->num_rows > 0)
    {
        header("Location: registerPage.php?fehler=1");
        exit();
    }
    
    $anfrage = "INSERT INTO users ( vorname, nachname, mail, passwort) VALUES ('" . $vorname . "' , '" . $nachname . "' , '" . $mail . "' , '" . $passwort . "');";
    if($verbindung->query($anfrage)=== TRUE)
    {
        setcookie("eingeloggt", "1", 0, "/");
        setcookie("id", $verbindung->insert_id, 0, "/");
        header("Location: dashboard.php");
    }
    else
    {
        echo("es gab einen Fehler");
    }

    include("../close.php");
?>