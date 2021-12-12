<?php

    include("verbinden.php");
    

?>
        <section class="sec_rezept" id="rezepte">
            <div class="wrapper">
                <h1>Rezepte</h1>

                <?php
                            $anfrage = "SELECT * FROM kategoriename";
                            $ergebnis = $verbindung->query($anfrage);
                            while($row = $ergebnis->fetch_assoc())
                            {
                                ?>

                                <div class="container">
                                    <div class="container_titel flex">

                                    <h2> <?= $row["cat_name"] ?></h2>

                        <a href="alle_ansehen.php?id=<?=$row["id"] ?>" class="anzeigen">Alle anzeigen <i class="fas fa-chevron-right"></i></a>
                    </div>
                    
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
                <?php
                    }
                ?>
            </div>
        </section>
<?php

    include("close.php");

?>