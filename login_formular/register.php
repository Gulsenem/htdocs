<?php

    if(empty($_POST["vorname"]) || empty($_POST["nachname"]) || empty($_POST["mail"]) || empty($_POST["passwort"]))
    {
        header("Location: registerPage.php");
        exit();
    }

    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $mail = $_POST["mail"];
    $passwort = $_POST["passwort"];


    $serverName = "localhost";
    $datenbankUser   = "root";
    $datenbankPass   = "";
    $datenbankName  = "login_formular";

    $verbindung = new mysqli($serverName, $datenbankUser, $datenbankPass , $datenbankName);

    $anfrage = "SELECT * FROM users WHERE mail='" . $mail . "' OR passwort='" . $passwort . "'";
    $result = $verbindung->query($anfrage);
    if($result->num_rows > 0)
    {
        header("Location: registerPage.php?fehler=1");
        exit();
    }
    
    $anfrage = "INSERT INTO users ( vorname, nachname, mail, passwort) VALUES ('" . $vorname . "' , '" . $nachname . "' , '" . $mail . "' , '" . $passwort . "');";
    if($verbindung->query($anfrage)=== TRUE)
    {
            header("Location: loginPage.php");
    }
    else
    {
        echo("es gab einen Fehler");
    }

    $verbindung->close();
?>