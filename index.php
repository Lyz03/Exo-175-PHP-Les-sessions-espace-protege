<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>exo 175</title>
</head>
<body>

<h1>Home</h1>

<form action="/form.php" method="post">
    <div>
        <label for="password">Mot de Passe :</label>
        <input id="password" type="password" name="password">
    </div>
    <input type="submit" name="submit">
</form>



</body>
</html>