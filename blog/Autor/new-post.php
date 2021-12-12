<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <h2>Neuen Beitrag erstellen</h2>

    <form method="POST" action="request.php">
        <input type="text" placeholder="Titel" name="post_titel"> <br> <br>
        <textarea type="text" placeholder="Inhalt" name="post_inhalt"></textarea> <br> <br>
        <input type="submit" name="new_post" value="Erstellen">
    </form>
</body>
</html>