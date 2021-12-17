<?php

$password = 123;
$string = "mystring";
$string_crypt = crypt($string, );

echo($pass = password_hash($password, PASSWORD_DEFAULT));
echo($string_crypt);
if($pass_verify = password_verify($password, $pass))
{
    echo("PAssword verify" . $pass_verify);
}
?>