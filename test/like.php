<?php

include("verbinden.php");

    $sorgu = $_SERVER["REQUEST_METHOD"];

    if($sorgu == "POST")
    { 
        if(empty($_POST["token"])) //post_content ve token yok bolsa basarisiz 
        {
            exit(json_encode(array(
                "basarili"  => "0"
            )));
        }

        $token = $_POST["token"];
        // tokeni ulanyp user_id almaly
        $anfrage = "SELECT * FROM users where token='" . $token ."'"; 
        $result = $verbindung->query($anfrage);
    




// user id alamyzdan son posty alyp bilyas

























?>