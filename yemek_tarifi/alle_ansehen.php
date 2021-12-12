<?php

    include("header.php");
    include("verbinden.php");

    if(!empty($_GET["id"]))
    {
        $r_id = $_GET["id"];
    }
    else
    {
        exit("Error!");
    }
?>
<main>
    <div class=" alle_ansehen wrapper">
    <?php
        if(!isset($r_id))
        {
            exit("Error!");
        }
        else
        {
            $anfrage = "SELECT * FROM kategoriename WHERE id=" . $r_id;
            $ergebnis = $verbindung->query($anfrage);
            $row = $ergebnis->fetch_assoc();
        }

    ?>
        <h1><?= $row["cat_name"] ?></h1>
        <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
            sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et 
            accusam et justo duo dolores et ea rebum. Stet clita kasd 
            dolore magna aliquyam erat, sed diam voluptua.
        </p> 
        <div class="flex_wrap">
                
                <?php
                        $anfrage1 = "SELECT * FROM test Where category=" . $row["id"];
                        $ergebnis1 = $verbindung->query($anfrage1);
                        while($row1 = $ergebnis1->fetch_assoc())
                        {
                ?>

                <div class="card" > <a href="rezepte_sehen.php?id=<?=$row1["id"] ?> ">
                    <div class="card_img">
                        <img src="bild/suppe.jpg">
                    </div>
                    <div class="titel">
                        <h3> <?= $row1["post_name"] ?></h3>
                    </div>
                    <div class="card_bottom flex">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>    
                        </div>
                        <div class="arbeitZeit">
                            <i class="far fa-clock"></i>
                            <?= $row1["arbeitzeit"] ?>
                        </div>
                    </div> </a>
                </div>
                <?php
                    }
                ?>    
                
                
            </div>

    </div>

</main>
<?php
    include("footer.php");
    include("close.php");
?>