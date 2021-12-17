<?php




if(empty($_POST["email"]) || empty($_POST["passwort"]))
{
    exit("Es gibt einen Fehler");
}

$email = $_POST["email"];
$passwort = $_POST["passwort"];

include("verbinden.php");

$anfrage        = "SELECT * FROM users WHERE email='" . $email .  "';";
$result         = $verbindung->query($anfrage);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        if(password_verify($passwort, $row["passwort"]))
        {
            $email = $row["email"];
            setcookie("eingeloggt", "1", 0, "/");
            header("Location: ../index.php");
            exit();
        }
        else {
            echo("passwort verify elsi" .$row["passwort"]);
        }
    }
}
else
{
    echo("birinji if.in elsi");
}










include("close.php");

?>