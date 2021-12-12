<?php

    include("verbinden.php");

    $anfrage = "SELECT * FROM test ";
    $ergebnis = $verbindung->query($anfrage);

    $emparray = array();
    while($row = $ergebnis->fetch_assoc())
    {
        $emparray[] = $row["post_name"];
    }

    echo json_encode($emparray);







    include("close.php");




?>