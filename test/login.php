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
            $token = bin2hex(random_bytes(20)); // täze token generate edyas
            $query = "UPDATE users SET token='" . $token . "' WHERE id=" . $row["id"]; // onki tokene taze token beryas
            
            $result2 = $verbindung->query($query);

            if($result2 === true)
            {
                setcookie("eingeloggt", $token, time()+86400*30, "/" ); //önki cookien yerine taze cookie beryas

                echo(json_encode(array(
                    "basarili"        => "1",
                    "vorname"         => $row["vorname"],
                    "nachname"        => $row["nachname"],
                    "geurstag"        => $row["geburstdatum"],
                    "username"        => $row["username"],
                    "email"           => $row["email"],
                    "user_content"    => $row["usercontent"],
                    "joined"          => $row["user_kayitTarihi"],
                ))); //home.page gelyar
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