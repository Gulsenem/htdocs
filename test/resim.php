<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form
        {
            width: 500px;
            display:flex;
            flex-direction: column;
        }
        form>*
        {
            margin-bottom: 25px;
            font-size: 1.2em;
        }
    </style>
</head>
<body> 
    <h2>konto erstellen</h2>

    <form action="register.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="vorname" name="vorname">
        <input type="text" placeholder="nachname" name="nachname">
        
        <input type="email" placeholder="email" name="email">
        <input type="date" value="Geburstdatum" name="geburstdatum">
        <input type="password" placeholder="passwort" name="passwort">
        <input type="text" placeholder="benutzername" name="username">
        
        <input type="file" name="user_img">
            
        <input type="submit" value="Registrieren">
        
    </form>



</body>
</html>