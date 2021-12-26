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


            if($result->num_rows == 0) //kisinin tokenini aldyk
            {
                echo(json_encode(array("basarili"  => "0")));
            }
            else
            {
                $u_id= $result->fetch_assoc()["id"];

                $anfrage2 = "SELECT * FROM posts where user_id<>'" . $u_id ."'"; 
                $result2 = $verbindung->query($anfrage2);



                $postArray = array();
                $usernameArray = array();
                while($row2 = $result2->fetch_assoc()) 
                {
                    $anfrage3 = "SELECT username FROM users where id='" . $row2["user_id"] ."'"; 
                    $result3 = $verbindung->query($anfrage3);
                    $username = $result3->fetch_assoc();
                    $postArray[] = $row2;
                    $usernameArray[] = $username; 
                }
                echo(json_encode(array($postArray, $usernameArray)));
                //echo(json_encode(array("basarili"  => '1',)));
                    
            }
        }
    }
    



?>