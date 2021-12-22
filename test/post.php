<?php

include("verbinden.php");
    
$sorgu = $_SERVER["REQUEST_METHOD"];

    
    if($sorgu == "POST")     
    {
        $id = $_POST["id"];
        $post_content = $_POST["post_content"];
        
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
    
        if(empty($_POST["post_content"])) //post yok bolsa basarisiz 
        {
            exit(json_encode(array(
                "basarili"  => "0"
            )));
        }

        

        $anfrage2 = "INSERT INTO posts ( post_content ) VALUES ('" . $post_content . "')";
        if($verbindung->query($anfrage2 === true))
        {
            echo(json_encode(array(
                "basarili"  => "1"
            )));
        }
        else{
            echo(json_encode(array(
                "basarili"  => "0"
            ))); //echo("else hata");
        }

    }




    










?>