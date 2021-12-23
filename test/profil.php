<?php

include("verbinden.php");

$sorgu = $_SERVER["REQUEST_METHOD"];

if($sorgu == "POST")
{   
    if(isset($_POST["token"]))
    {
        $token = $_POST["token"];

                    
        $anfrage = "SELECT * FROM users where token='" . $token ."'"; 
        $result = $verbindung->query($anfrage);

        if($result->num_rows == 0)
        {
            echo(json_encode(array(
                "basarili"  => "0"
            )));
        }
        else
        {
            $row = $result->fetch_assoc();
            echo(json_encode(array(
                "basarili"        => "1",
                "vorname"         => $row["vorname"],
                "nachname"        => $row["nachname"],
                "geburstag"       => $row["geburstdatum"],
                "username"        => $row["username"],
                "email"           => $row["email"],
                "user_content"    => $row["user_content"],
                "joined"          => $row["user_kayitTarihi"],
            )));
        }        
    }
    else
    {
        exit(json_encode(array(
            "basarili" => "0" //token yok
        )));
    }
}


?>