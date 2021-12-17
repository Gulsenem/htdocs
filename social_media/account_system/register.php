<?php

    if(empty($_POST["vorname"]) || empty($_POST["nachname"]) || empty($_POST["email"]) || empty($_POST["passwort"]))
    {
        exit();
    }
        
    

    $vorname    = $_POST["vorname"];
    $nachname   = $_POST["nachname"];
    $email      = $_POST["email"];
    $passwort   = password_hash($_POST["passwort"], PASSWORD_DEFAULT);

    include("verbinden.php");

    /* 1. shol atly we email.li biri barmy kontrol etmek */
    $anfrage        = "SELECT * FROM users WHERE vorname='" . $vorname . "' OR email='" . $email . "';";
    $result         = $verbindung->query($anfrage);

    if($result->num_rows > 0)
    {   
        exit("ungültig!");
    }




    /**
     * Alles okay, jetzt Account erstellen
     */
    $anfrage        = "INSERT INTO users (vorname, nachname, email, passwort) VALUES ('" . $vorname . "', '" . $nachname . "', '" . $email . "', '" . $passwort . "');";

    if($verbindung->query($anfrage) === true)
    {
        header("Location: ../index.php");
        exit();
    }
    else
    {
        echo("Es gab ein Problem!");
    }


    /**
     * Verbindung schließen
     */
    include("close.php");

?>