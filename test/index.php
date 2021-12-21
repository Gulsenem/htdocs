<?php

    include("verbinden.php");

    
    if(!isset($_COOKIE["eingeloggt"] ))
    {
        //basarisiz loggine iber
        //include("loginPage.php");
        echo(json_encode(array(
            "basarili"  => "0",
        )));
    }
    else{
        $cookie = $_COOKIE["eingeloggt"];
        $anfrage = "SELECT * FROM users WHERE token='" . $cookie . "'";
        $result  = $verbindung->query($anfrage);

        if($result->num_rows>0)
        { 
            //basarili home.vue görünsin
            echo(json_encode(array(
                "basarili"  => "1",
            )));
        }
        else
        {
            //echo("cookieler gabat gelmedi logine iber");
            echo(json_encode(array(
                "basarili"  => "0",
            )));
        }
    }
?>
