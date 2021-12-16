
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Anmelden</title>
            <link rel="stylesheet" href="account.css">
        </head>
        <body>
            <div class="blue_container">
                <h1>Herzlich Wilkommen </h1>
            </div>
            <div class="form_container">
                <h2>Anmelden</h2>
                <form action="login.php" method="POST" class="flex_column">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="passwort" placeholder="Passwort" required>
                    <input type="submit" value="Anmelden">
                </form>
                <span>Haben Sie kein Konto?</span> 
                <a href="RegisterPage.php">Registrieren Sie sich!</a>
            </div>

        </body>
        </html>
