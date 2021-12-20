<?php
include("verbinden.php");

$sorgu = $_SERVER["REQUEST_METHOD"];

if($sorgu == "POST")
{
    //gecersiz post sorgusu
    if(empty($_POST["email"]) || empty($_POST["passwort"]))
    {
        exit(json_encode(array(
            "basarili"  => "0"
        )));
    }

    $email = $_POST["email"];
    $passwort = $_POST["passwort"];

    $query = "SELECT * FROM users WHERE email='" . $email . "'";
    $result = $verbindung->query($query);

    if($result->num_rows == 0)
    {
        exit(json_encode(array(
            "basarili"  => "0"
        )));
    }
    else // kullanici bulundu
    {
        $row = $result->fetch_assoc();

        if($row["passwort"] == $passwort) // sifresi de dogru
        {
            $token = $row["token"];
            $query = "UPDATE users SET token = '" . $token . "' WHERE id = " . $row["id"];
            $result2 = $verbindung->query($query);

            if($result2 === true)
            {
                echo(json_encode(array(
                    "basarili"  => "1",
                    "isim"      => $row["vorname"],
                    "id"        => $row["id"],
                    "token"     => $token
                )));
            }
        }
        else
        {
            exit(json_encode(array(
                "basarili"  => "0"
            )));
        }
    }
}
else
{
    exit(json_encode(array(
        "basarili"  => "0"
    )));
}

$verbindung->close();

?>