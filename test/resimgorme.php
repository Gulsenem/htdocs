<?php

    $server_name = "localhost";
    $server_user = "root";
    $server_pass = "";
    $database_name = "beispiel";

    $verbindung = new mysqli($server_name, $server_user, $server_pass, $database_name);

    


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
    <form action="resimgorme.php" method="POST" enctype="multipart/form-data" > 
            <input type="file" name="dosya"> <br> <br>
            <input type="submit" name="dugme" value="yukle">
    </form>
</body>
</html>