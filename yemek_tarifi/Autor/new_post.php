<?php
    

    if(empty($_POST["name"]) || empty($_POST["content"]) || empty($_POST["arbeitzeit"]) || empty($_POST["niveau"]))
    { 
        exit("Rezepte wurde nicht erstellt");
    }


    $name = $_POST["name"];
    $content = $_POST["content"];
    $arbeitzeit = $_POST["arbeitzeit"];
    $niveau = $_POST["niveau"];
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);


    include ("../verbinden.php");

    $anfrage = "INSERT INTO test (post_name, content, arbeitzeit, niveau, category) VALUES ('" . $name . "' , '" . $content . "' , '" . $arbeitzeit . "' , '" . $niveau . "' , '" . $category . "');";
    
    if($verbindung->query($anfrage)=== TRUE)
    {
        header("Location: new_post_page.php");
        exit();

    }
    else
    {
        echo("es gab einen Fehler <br>"); 

    }

    
    include ("../close.php");
?>