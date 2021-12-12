<?php   
    include("verbinden.php");   
    include("header.php");

    if(!empty($_GET["id"]))
    {
        $kat_id = $_GET["id"];
    }
    else
    {
        exit("Kategorie nicht gefunden");
    }

    $kat_name = "";
?>

    <main>           

            <?php
                if(!isset($kat_id))
                {
                    echo("Kategorie nicht gefunden");
                }
                else
                {
                    $anfrage = "SELECT * FROM kategorien where id=" . $kat_id;
                    $result = $verbindung->query($anfrage);

                    //haben wir diese Kategorie?
                    if($result->num_rows == 0)
                    {
                        echo("Kategorie nicht gefunden");
                    }
                    else
                    {
                        $kat_name = $result->fetch_assoc()["name"];
                        ?>
                            <h3>Willkommen in  Category <?= $kat_name ?></h3>
                            posts: 
                            <ul>

                        <?php
                            $anfrage2 = "SELECT * FROM posts WHERE kategorie=" . $kat_id;
                            $result2 = $verbindung->query($anfrage2);

                            while($row2 = $result2->fetch_assoc())
                            {
                                ?>
                                    <li> <a href="post.php?id=<?= $row2["id"] ?>"> <?= $row2["titel"] ?> </a> </li>
                                <?php
                            }
                    }
                }
            ?>
            </ul>
    </main>
<?php

    include("sidebar.php");
    include("footer.php");
    include("close.php");

?>