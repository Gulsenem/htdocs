<?php
    if(empty($_POST["email"]) || empty($_POST["pass"]))
    {
        exit("Es gibt einen Fehler");
    }

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $serverName     = "localhost";
    $datenbankName  = "login_formular";
    $datenbankUser  = "root";
    $datenbankPass  = "";

    $verbindung     = new mysqli($serverName, $datenbankUser, $datenbankPass, $datenbankName);
    $anfrage = "SELECT * FROM users WHERE mail='" . $email ."' AND passwort= '" . $pass . "'";
    $ergebnis       = $verbindung->query($anfrage);
    

    if($ergebnis->num_rows == 0)
    {
        // es gibt einen Fehler
        header("Location: loginPage.php?fehler=1");
        exit();
    }
    else
    {
        // Erfolgreich eingeloggt
        setcookie("eingeloggt", "1");
        setcookie("name", $ergebnis->fetch_assoc()["vorname"]);
        header("Location: index.php");
        exit();
    }




?>