<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Rezepte</title>


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="alle_ansehen.css">
</head>
<body>
    <header>
        <div class="wrapper flex">
            <div class="logo"> 
                <i class="far fa-hat-chef"></i>
                Das Kochrezept </div>
            <div class="such_feld">
                <i class="far fa-search"></i>
                <input type="text" placeholder="z.B 'Pasta' oder 'Kuchen'" oninput="tip(this)" >
                <div class="results" id="results"></div>
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="#uberUns">Über uns</a>
                <a href="#rezepte">Rezepte</a>
            </nav>
        </div>
    </header>

    <?php
        include("autocomplete.php");
    ?>