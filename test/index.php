<?php

    include("verbinden.php");

    $sorgu = $_SERVER["REQUEST_METHOD"];

    if($sorgu == "POST")     
    {
        $id = $_POST["id"];
        //basarisiz loggine iber
        //include("loginPage.php");
        
        if($id=="eingeloggt")
        {
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
