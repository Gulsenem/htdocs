<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body
    {
        background-color: rgb(247, 234, 211);
        height: 100vh;
        display:flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
    }
    form
    {
        width: 500px;
        display:flex;
        flex-direction:column;
    }
    form>*
    {
        margin-bottom: 10px;
        border:none;
        outline:none;
        padding: 6px 18px;
        border-radius: 6px;
    }
    form>input[type=submit]
    {
        background-color: rgb(253, 166, 4);
        cursor:pointer;
        font-weight:bold;
    }
    
</style>
<body>
    <h2>Rezepte erstellen</h2>
    <form method="POST" action="new_post.php">
        <input type="text" placeholder="Rezepte name" name="name" required>
        <textarea type="text" placeholder="Rezepte Beschreibung"  name="content" cols="30" rows="10"></textarea>
        <input type="text" placeholder="Arbeitzeit" name="arbeitzeit" required>
        <input type="text" placeholder="Niveau" name="niveau" required> 
        <select name="category" id="category">
            <option value="1">Schnelle Rezepte</option>
            <option value="2">Herbst</option>
            <option value="3">Mittagessen im Homeoffice </option>
            <option value="4"> Lieblingssuppen </option>
        </select>
        <input type="submit" value="Erstellen">
    </form>

</body>
</html>