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
        <h2>Anmelden</h2>
        <form method="POST" action="login.php">
            <input type="email" placeholder="Email" name="email" required>    
            <input type="password" placeholder="Passwort" name="pass" required> 
            <input type="submit" id="submit" value="Einloggen" >
        </form>
        <p>Haben Sie kein Konto? <br> <a href="registerPage.php">Registrieren sie sich jetzt!</a></p>

 
    </div>

    <script src="script.js"></script>
</body>
</html>