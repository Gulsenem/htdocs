<?php

    if(empty($_POST["vorname"]) || empty($_POST["nachname"]) || empty($_POST["email"])
     || empty($_POST["passwort"]) || empty($_POST["username"]) || empty($_FILES["user_img"]["tmp_name"]))
    {
        exit();
    }

    $vorname    = $_POST["vorname"];
    $nachname   = $_POST["nachname"];
    $email      = $_POST["email"];
    $geburstdatum = $_POST["geburstdatum"];
    $passwort   = $_POST["passwort"];
    $username   = $_POST["username"];
    $user_img   = $_FILES["user_img"]["tmp_name"];
    

    $server_name = "localhost";
    $server_user = "root";
    $server_pass = "";
    $database_name = "test";

    $verbindung = new mysqli($server_name, $server_user, $server_pass, $database_name);

    $anfrage = "INSERT INTO users1 ( vorname, nachname, email, geburstdatum, passwort, foto, username) VALUES ('" . $vorname . "','" . $nachname ."','".  $email  . "','" . $geburstdatum . "','" . $passwort . "','" .  $user_img .  "','" . $username . "');";

    if($verbindung->query($anfrage) === true)
    {
        echo("erfolgreich");
        setcookie("registriert", "1");
    }
    else{
        echo("fehler");
    }
    $verbindung->close();

    if($_FILES)
    {
        
    $user_img =  $_FILES["user_img"]["tmp_name"];
    if(isset($user_img))
    {
        echo("surat yüklendi!");
        if(exif_imagetype( $user_img) == false)
        {
            echo("surat girizin bitte");
        }
    }

    }
/*
    if(empty($_POST["vorname"]) || empty($_POST["nachname"]) || 
        empty($_POST["email"]) || empty($_POST["passwort"]) || empty($_POST["username"]))
    {
        exit();
    }

    $vorname    = $_POST["vorname"];
    $nachname   = $_POST["nachname"];
    $email      = $_POST["email"];
    $geburstdatum = $_POST["geburstdatum"];
    $passwort   = $_POST["passwort"];
    $foto       = $_POST["foto"];
    $username   = $_POST["username"];

    $server_name = "localhost";
    $server_user = "root";
    $server_pass = "";
    $database_name = "test";

    $verbindung = new mysqli($server_name, $server_user, $server_pass, $database_name);

    $anfrage = "INSERT INTO users1 ( vorname, nachname, email, geburstdatum, passwort, foto, username) VALUES ('" . $vorname . "','" . $nachname ."','".  $email  . "','" . $geburstdatum . "','" . $passwort . "','" .  $foto .  "','" . $username . "');";

    if($verbindung->query($anfrage) === true)
    {
        echo("erfolgreich");
        setcookie("registriert", "1");
    }
    else{
        echo("fehler");
    }
    $verbindung->close();

    */

?>