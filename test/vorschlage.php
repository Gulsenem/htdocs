<?php

    include("verbinden.php");

    $sorgu = $_SERVER["REQUEST_METHOD"];

    if($sorgu == "POST")
    {
        if(isset($_POST["token"]))
        {
            $token = $_POST["token"];

            
            $anfrage = "SELECT id FROM users where token='" . $token ."'"; 
            $result = $verbindung->query($anfrage);
            $uID = $result->fetch_assoc()["id"]; //id.sini aldyk
            

            $anfrage2 = "SELECT * FROM follow where takipEdenKisi_id='" . $uID ."'"; 
            $result2 = $verbindung->query($anfrage2);

            $abonameArray = array();
            $takipArray = array();
            while($row2 = $result2->fetch_assoc()) 
            {
                $anfrage3 = "SELECT takitEttigiKisi_id FROM follow where takipEdenKisi_id='" .  $row2["takitEttigiKisi_id"] . "'"; 
                $anfrage31 = "SELECT username FROM users where id='" .  $row2["takitEttigiKisi_id"] . "'"; 
                $result31 = $verbindung->query($anfrage31); 
                $result3 = $verbindung->query($anfrage3);           
                while($row3 = $result3->fetch_assoc()) 
                {
                    $anfrage4 = "SELECT username FROM users where id='" .  $row3["takitEttigiKisi_id"] . "'"; 
                    $result4 = $verbindung->query($anfrage4);
                    $takipArray[] = $result4->fetch_assoc();
                    $abonameArray[] = $result31->fetch_assoc();
                }                 
            }  
            //echo($userIDArray[0]);   /*
 
            
            echo(json_encode(array($takipArray, $abonameArray)));
   
               /* foreach ($userIDArray as $value) 
                {

                    /*$anfrage3 = "SELECT username FROM users where id='" . $value ."'"; 
                    $result3 = $verbindung->query($anfrage3);
                    while($row3 = $result3->fetch_assoc()) 
                    {
                        $takipArray[] = $row3; 
                        
                    }
                       
                }*/
//echo(json_encode($takipArray)); 
                        /*foreach ($userIDArray as $value) 
            {
          a
                echo($value);
            }  */
            //echo(json_encode($userIDArray)); 
            //$id = array_chunk($userIDArray, length);
 










        }
    }
    



?>