<?php
    include("verbinden.php");
    include("header.php");

    if(!empty($_GET["id"]))
    {
        $post_id = $_GET["id"];
    }

?>
<main>
    
    <?php
        if(!isset($post_id))
        {
            echo("post nicht gefunden");

        }
        else
        {
            $anfrage = "SELECT * FROM posts where id=" . $post_id;
            $result = $verbindung->query($anfrage);

            if($result->num_rows == 0)
            {
                echo("Post nicht gefunden");
            }
            else
            {
                $post_row = $result->fetch_assoc();  //Post row

                $anfrage = "SELECT * FROM kategorien WHERE id=" . $post_row["kategorie"];
                $result = $verbindung->query($anfrage);
                $kat_row = $result->fetch_assoc();


                $anfrage = "SELECT * FROM autoren WHERE id=" . $post_row["autor"];
                $result = $verbindung->query($anfrage);
                $autor_row = $result->fetch_assoc();
                ?>
                    <h2> <?= $post_row["titel"] ?> </h2>
                    <a href="category.php?id= <?= $kat_row["id"] ?> "><?= $kat_row["name"]?></a>
                    <p> <?= $post_row["content"] ?></p>
                    <hr>
                    <span> Autor: <?= $autor_row["name"] ?></span> <br>
                    <span><?= $post_row["datum"] ?></span>
                <?php
            }

        }
    ?>



</main>

<?php
    include("sidebar.php");
    include("footer.php");
    include("close.php");
?>