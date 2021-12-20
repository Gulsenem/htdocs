<?php

    include("verbinden.php");

    if(empty($_POST["vorname"]) || empty($_POST["nachname"]) || empty($_POST["geburstdatum"]) || empty($_POST["username"]) 
     || empty($_POST["email"])  || empty($_POST["passwort"])  || empty($_POST["user_content"])) 
    {
        exit(json_encode(array(
           "basarili" => "0" 
        )));
    }

    
    $vorname    = $_POST["vorname"];
    $nachname   = $_POST["nachname"];
    $geburstdatum = date("Y-m-d",  strtotime($_POST["geburstdatum"]));
    $username   = $_POST["username"];
    $email      = $_POST["email"];
    $passwort   = $_POST["passwort"];    
    //$userBild   = $_FILES["userbild"]["tmp_name"];
    $user_content   = $_POST["user_content"];
    $token = bin2hex(random_bytes(20));

    $anfrage = "SELECT * FROM users WHERE username='" . $username . "' OR email='" . $email . "'";
    $result  = $verbindung->query($anfrage);

    if($result->num_rows > 0)
    {
        //nicht erfolgreich
        exit(json_encode(array(
            "basarili" => "0" 
         )));
    }


    $anfrage = "INSERT INTO users (token, vorname, nachname,  geburstdatum, username, email, passwort, user_content ) VALUES ('" . $token . "','" . $vorname . "','" . $nachname ."','".  $geburstdatum  . "','" . $username . "','" . $email . "','" . $passwort . "','" . $user_content . "');";

    

    if($verbindung->query($anfrage) === true)
    {

        //Erfolgreich
        echo(json_encode(array(
            "basarili"  => "1"
            /*"isim"      => "admin",
            "id"        => $cevapIcerigi["id"],
            "token"     => $token  */
        )));

    }
    else
    {
        exit(json_encode(array(
            "basarili" => "0" 
         )));
    }
    $verbindung->close();

?>

