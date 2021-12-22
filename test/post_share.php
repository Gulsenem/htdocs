<?php

    include("verbinden.php");

    $sorgu = $_SERVER["REQUEST_METHOD"];

    if($sorgu == "POST")
    { 
        if(empty($_POST["post_content"])) //post yok bolsa basarisiz 
        {
            exit(json_encode(array(
                "basarili"  => "0"
            )));
        }

        $post_content = $_POST["post_content"];

        $anfrage = "INSERT INTO posts (post_content) VALUES ('" . $post_content . "')";
        if($verbindung->query($anfrage === true))
        {
            exit(json_encode(array(
                "basarili"  => "1"
            )));
        }
        else{
            exit(json_encode(array(
                "basarili"  => "0"
            )));
        }
        /*
        $user_id = $_GET["user_id"];

        if(!isset($_GET["token"]))
        {
            exit(json_encode(array(
                "basarili"  => "0"
            )));
            //exit('token bulunmadi gelmedi');
        }

        $token = $_GET["token"]
        $anfrage = "SELECT * FROM users where token='" . $token ."'"; 
        $result = $verbindung->query($anfrage);
        if($result->num_rows>0)
        {
            exit(json_encode(array(
                "basarili"  => "0"
            )));  //echo("token tapylmady ya den gelyani yok");
        }
        else
        {
            $row = $result->fetch_assoc()["id"];
            $user_id = $row;

            $anfrage2 = "INSERT INTO posts ( post_content, 'user_id' ) VALUES ('" . $post_content . "' , '" . $user_id . "')";
            if($verbindung->query($anfrage2 === true))
            {
                echo(json_encode(array(
                    "basarili"  => "0"
                )));
            }
            else{
                echo(json_encode(array(
                    "basarili"  => "0"
                ))); //echo("else hata");
            }
            
        }
    }
/*
    $anfrage = "SELECT * FROM users where id='" . $user_id ."'"; 
    $result = $verbindung->query($anfrage);

    if($result->num_rows>0)
    {
        echo("id tapylmady");
    }
    else
    {
        $anfrage2 = "INSERT INTO posts (post_content) VALUES ('" . $post_content . "')";
        if($verbindung->query($anfrage2 === true))
        {
            echo("basardin");
        }
        else{
            echo("else hata");
        }
    }
*/
    




















?>