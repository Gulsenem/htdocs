<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="login.php">
        <input type="text" placeholder="Vorname" name="vorname" required>
        <input type="text" placeholder="Nachname" name="nachname" required>
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Passwort" name="pass" required>
        <input type="submit" value="login">
    </form>
</body>
</html>