<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login formular</title>

    <link rel="stylesheet" href="login_style.css">
</head>
<body>
    <div class="container"> 
        <h2>Konto erstellen</h2>
        <form method="POST" action="register.php">
            <input type="text" placeholder="vorname" name="vorname" required>  
            <input type="text" placeholder="nachname"  name="nachname"required> 
            <input type="email" placeholder="Email"  name="mail" required>    
            <input type="password" placeholder="Passwort"  name="passwort" required> 
            <input type="submit" id="submit" value="Registrieren" required>
        </form>


    </div>

    <script src="script.js"></script>
</body>
</html>