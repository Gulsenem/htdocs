<?php

    include("verbinden.php");

    // php code für add_follow_liste function 

    // 1.  tokeni boyunca öz id.sini almaly id_my
    // 2.  iberen username parametri boyuncada usernamin id.sini almaly id_it
    //3.   follow DB. eklemek.


        

        $sorgu = $_SERVER["REQUEST_METHOD"];

        if($sorgu == "POST")
        {
            // 1.  tokeni boyunca öz id.sini almaly id_my
            if(isset($_POST["token"]))
            {
                $token = $_POST["token"];
                $user_it = $_POST["user_it"];
 
                // tokeni denesdirip oz id.ni alya
                $anfrage = "SELECT id FROM users where token='" . $token ."'"; 
                $result = $verbindung->query($anfrage);
                $id_my = $result->fetch_assoc()["id"]; //id.sini aldyk


                // 2.  iberen username parametri boyuncada usernamin id.sini almaly id_it

                // user_it bilen usersDB.daky username denesdirmeli
                $anfrage1 = "SELECT id FROM users where username='". $user_it ."'";
                $result1 =$verbindung->query($anfrage1);
                $id_it = $result1->fetch_assoc()["id"];

                //  3.   follow DB. eklemek.

                $anfrage3 = "INSERT INTO follow (`takipEdenKisi_id`, `TakitEttigiKisi_id`) VALUES ('" . $id_my . "','" . $id_it . "')";
                if($verbindung->query($anfrage3)=== TRUE)
                {
                    if()
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
                
    

?>