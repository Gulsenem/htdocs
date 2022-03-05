<?php
    if(empty($_POST["email"]) || empty($_POST["pass"]))
    {
        exit("Es gibt einen Fehler");
    }

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    include("verbinden.php");

    $anfrage = "SELECT * FROM users WHERE mail='" . $email ."' AND passwort= '" . $pass . "'";
    $ergebnis       = $verbindung->query($anfrage);
    

    if($ergebnis->num_rows == 0)
    {
        // es gibt einen Fehler
        header("Location: loginPage.php");
        exit();
    }
    else
    {
        // Erfolgreich eingeloggt
        setcookie("eingeloggt", "1");
        header("Location: index.php");
        exit();
    }


    include("close.php");

?>