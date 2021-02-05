<?php
spl_autoload_register(function ($class) {
    include 'models/' . $class . '.php';
});
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à la POO - TP Warcraft</title>
</head>

<body>

</body>

</html>