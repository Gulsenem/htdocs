<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="account.css">
</head>
<body>
    <div class="blue_container">
        <h1>Herzlich Wilkommen!</h1>
    </div>
    <div class="form_container">
        <h2>Erstellen Sie Account</h2>
        <form action="register.php" method="POST" class="flex_column">
            <input type="text" placeholder="Vorname" name="vorname" required>
            <input type="text" placeholder="Nachname" name="nachname" required >
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Passwort" name="passwort" required>
            <input type="submit" value="Registrieren">
        </form>
    </div>

</body>
</html>