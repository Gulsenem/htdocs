<?php

    include("verbinden.php");

    if(empty($_POST["post_content"]))
    {
        exit();
    }

    $post_content = $_POST["post_content"];

    $anfrage = "INSERT INTO posts "




















?>