<?php
    include("dashboard_header.php");
?>
    <div class="container"> 
        <h1>Anmelden</h1>
        <form method="POST" action="login.php">
            <input type="email" placeholder="Email" name="email" required>    
            <input type="password" placeholder="Passwort" name="pass" required> 
            <input type="submit" id="submit" value="Einloggen" >

            <p class="registerLink">Haben Sie kein Konto? <a href="registerPage.php">Jetzt registrieren Sie sich</a></p>
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

<?php
    include("dashboard_footer.php");
?>