<?php
    if(empty($_POST["benutzername"]) || empty($_POST["pass"]))
    {
        exit("Es gibt einen Fehler");
    }

    $benutzername = $_POST["benutzername"];
    $pass = $_POST["pass"];
    include("../verbinden.php");

    $anfrage = "SELECT * FROM users WHERE benutzername='" . $benutzername ."' AND passwort= '" . $pass . "'";
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
        setcookie("eingeloggt", "1", 0, "/");
        setcookie("id", $ergebnis->fetch_assoc()["id"], 0, "/");
        header("Location: dashboard.php");
        exit();
    }


    include("../close.php");

?>