<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Formular</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"> 
        <h1>Anmelden</h1>
        <form method="POST" action="login.php">
            <input type="email" placeholder="Email" name="email" required>    
            <input type="password" placeholder="Passwort" name="pass" required> 
            <input type="submit" id="submit" value="Einloggen" >
        </form>

        <?php
            if(isset($_GET["fehler"]) && $_GET["fehler"] == "1")
            {
                ?>
                <div class="errorBox">
                    <?php echo("Es gibt einen Fehler"); ?>
                </div>
                <?php
            }
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>