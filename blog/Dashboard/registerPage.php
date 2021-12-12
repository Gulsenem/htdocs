<?php
    include("dashboard_header.php");
?>
    <div class="container"> 
        <h1>Konto erstellen</h1>
        <form method="POST" action="register.php">
            <input type="text" placeholder="Benutzername" name="benutzername" required>  
            <input type="email" placeholder="Email"  name="mail" required>    
            <input type="password" placeholder="Passwort"  name="passwort" required> 
            <input type="submit" id="submit" value="Registrieren" required>
        </form>

        <?php
            if(isset($_GET["fehler"]) && $_GET["fehler"] == "1")
            {
                ?>
                <div class="errorBox">
                    <?php echo("Diese E-Mail-Adresse existiert bereits."); ?>
                </div>
                <?php
            }
        ?>

    </div>

<?php
    include("dashboard_footer.php");
?>