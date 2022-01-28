<?php session_start() ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>exo 175</title>
</head>
<body>

<h1>Admin page</h1>

<?php

if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] === 'true') {

        echo "<p class='green'>Bienvenu sur l'espace admin</p>";

    } else {

        echo "<p class='red'>Vous n'êtes pas autoriser à voir ce contenu</p><br><a href='index.php'>Retour</a>";

    }
}

?>

</body>
</html>