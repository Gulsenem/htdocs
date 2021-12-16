<?php
        if(empty($_POST["vorname"]) || empty($_POST["nachname"]) || empty($_FILES["user_img"]["tmp_name"]))
       {
           exit();
       }

       $vorname    = $_POST["vorname"];
       $nachname   = $_POST["nachname"];
       $user_img   = $_FILES["user_img"]["tmp_name"];

       $server_name = "localhost";
       $server_user = "root";
       $server_pass = "";
       $database_name = "beispiel";
   
       $verbindung = new mysqli($server_name, $server_user, $server_pass, $database_name);

       $anfrage = "INSERT INTO users ( vorname, nachname, resim) VALUES ('" . $vorname . "','" . $nachname ."','" .  $user_img . "');";

       if($verbindung->query($anfrage) === true)
       {
           if(is_uploaded_file($_FILES["user_img"]["tmp_name"]))
           {
               echo("erfolgreich");
           }
           
       }
       else{
           echo("fehler");
       }
       $verbindung->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="resimgörme.php?id=3">
</body>
</html>