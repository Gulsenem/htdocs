<?php




if(empty($_POST["email"]) || empty($_POST["passwort"]))
{
    exit("Es gibt einen Fehler");
}

$email = $_POST["email"];
$passwort = $_POST["passwort"];

include("verbinden.php");

$anfrage        = "SELECT * FROM users WHERE email='" . $email .  "' AND passwort='" . $passwort . "';";
$result         = $verbindung->query($anfrage);

if($result->num_rows == 0)
{
    echo("sie haben sich nocht nicht registriert");
}
else
{
    setcookie("eingeloggt", "1", 0, "/");
    header("Location: ../index.php");
    exit();
}










include("close.php");

?>