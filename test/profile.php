<?php
include("verbinden.php");


$sorgu = $_SERVER["REQUEST_METHOD"];

if($sorgu == "GET")
{
    if(empty($_GET["id"]))
    {
        exit(json_encode(array(
            "basarili" => "id yok"
        )));
    }

    $id = $_GET["id"];

    // HER ZAMAN ILK SORUMUZ, GIRIS YAPTIN MI OLACAK

    if(empty($_GET["token"]))
    {
        exit(json_encode(array(
            "basarili" => "token yok"
        )));
    }

    $query = "SELECT * FROM users WHERE token='" . $_GET["token"] . "'";
    $sonuc = $verbindung->query($query);

    if($sonuc->num_rows == 0)
    {
        exit(json_encode(array(
            "basarili" => "token gecersiz"
        )));
    }

    $query = "SELECT * FROM users WHERE id=" . $id;
    $sonuc = $verbindung->query($query);
    
    exit(json_encode(array(
        "basarili" => "1",
        "profil_resmi" => "",
        "email" => $sonuc->fetch_assoc()["email"],
        "posts" => ""
    )));
    

}