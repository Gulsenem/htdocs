<?php

    include("header.php");
    include("verbinden.php");

    if(!empty($_GET["id"]))
    {
        $post_id = $_GET["id"];
    }
    else
    {
        exit("Die Rezepte ist NICHT gefunden!");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezepte</title>

    <link rel="stylesheet" href="rezepte_sehen1.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <?php
            if(!isset($post_id))
            {
                exit("Die rezepte ist nicht gefunden");
            }
            else
            {
                $anfrage = "SELECT * FROM test WHERE id=" . $post_id;
                $ergebnis = $verbindung->query($anfrage);
                $row = $ergebnis->fetch_assoc();
            }


        ?>
        <h2> <?= $row["post_name"]  ?> </h2>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i> 

            <span id="kommentar_zahl"> (2) </span>
        </div>
        <div class="box flex">
            <div class="bild"> <img src="bild/suppe.jpg" ></div>
            <div class="about_rezept">
                <div class="arbeitsBelastung ">
                    <div class="about_zeit">
                        ARBEITSZEIT:  <span id="koch_minut"> <?= $row["arbeitzeit"]  ?></span>
                    </div>
                    <div class="about_niveau">
                        NIVEAU:  <span id="koch_niveau"> <?= $row["niveau"]  ?> </span>
                    </div>                    
                </div>

                <p>
                    <?= $row["content"]  ?>
                </p>

                <div class="autor">
                    <img src="bild/frau.jpg">
                    Rezept von  <b>Ben</b>
                </div>
            </div>
        </div>

        
    </div>
    
</body>
</html>
<?php
    include("footer.php");
    include("close.php");
?>