<?php

    $eingeloggt = false;
    $name = "";
    if(isset($_COOKIE["eingeloggt"]) && $_COOKIE["eingeloggt"]== 1)
    {
        $eingeloggt= true;
    }
    if(!empty($_COOKIE["name"]))
    {
        $name = $_COOKIE["name"];
    }

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
    <?php
        if($eingeloggt)
        {
            ?>
            <h1>Herzlich Wilkommen <?= $name ?> bei Digitale Karriere!</h1>
            <?php
        }
        
        else
        {
            ?>
                        
            Registrieren Sie sich <a href="registerPage.php">KLICK</a> <br>
            oder einloggen Sie sich <a href="loginPage.php">KLICK</a>

            <?php
        }

    ?>


</body>
</html>