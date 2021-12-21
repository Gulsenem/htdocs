<?php

    include("verbinden.php");

    
    if(!isset($_COOKIE["eingeloggt"] ))
    {

        include("loginPage.php");
    }
    else{
        $cookie = $_COOKIE["eingeloggt"];
        $anfrage = "SELECT * FROM users WHERE token='" . $cookie . "'";
        $result  = $verbindung->query($anfrage);

        if($result->num_rows>0)
        { 
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
    <h3>Produkte: </h3>

    <div class="cards" style="display:flex;" >
                    oifnböxkfdhbioöndfbhfidyoblkfnbfi
    </div>


</body>
</html>

<?php
        }
        else
        {
            echo("cookieler gabat gelmedi logine iber");
        }
    }
?>