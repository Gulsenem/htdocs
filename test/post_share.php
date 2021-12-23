<?php

    include("verbinden.php");

    $sorgu = $_SERVER["REQUEST_METHOD"];

    if($sorgu == "POST")
    { 
        /*if(empty($_POST["post_content"]) || empty($_POST["token"]) || empty($_POST["tokenvalue"])) //post_content ve token yok bolsa basarisiz 
        {
            exit(json_encode(array(
                "basarili"  => "0"
            )));
        }
        if(isset($_POST["token"])  )
        {
            $tokenvalue = $_POST["tokenvalue"];
            $anfrage = "SELECT * FROM users where token='" . $tokenvalue . "'"; 
            $result = $verbindung->query($anfrage);

            exit(json_encode(array(
                "basarili"  => "1",
                "test10" => $tokenvalue,
                "uID"    => $result->fetch_assoc()["id"],
            )));
        }*/
        if(empty($_POST["post_content"]) || empty($_POST["token"])) //post_content ve token yok bolsa basarisiz 
        {
            exit(json_encode(array(
                "basarili"  => "0"
            )));
        }
        if(isset($_POST["token"]))
        {

            
            $post_content = $_POST["post_content"];
            $token = $_POST["token"];
            
            
            
            $anfrage = "SELECT * FROM users where token='" . $token ."'"; 
            $result = $verbindung->query($anfrage);
        
            if($result->num_rows == 0)
            {
                echo(json_encode(array(
                    "basarili"  => "0"
                )));
            }
            else { 
                
                

                $anfrage2 = "INSERT INTO posts (`post_content`, `user_id`) VALUES ('" . $post_content . "','" . $result->fetch_assoc()["id"] . "')";
                if($verbindung->query($anfrage2)=== TRUE)
                {
                    echo(json_encode(array(
                        "basarili"  => "1",

                    )));
                }
                else{
                    echo(json_encode(array(
                        "basarili"  => "0"
                    )));
                }
            }    
        }
        
    }




?>