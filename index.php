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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <div class="welcome">
            <h1>Sélectionnez votre Héros</h1>
            <div class="text text-center fs-2"></div>
        </div>
        <div class="row">
            <div class="col-sm card m-2 py-2" style="width: 18rem;">
                <img class="card-img-top" src="assets/img/witcher.webp" alt="The Witcher">
                <div class="card-body">
                    <h5 class="card-title">Paladin</h5>
                    <p class="card-text"> Héros des premières lignes, son rôle est de protéger ses aliés en encaissant le plus de dégâts possible.</p>
                    <a href="#" class="btn">⚔ Sélectionner ⚔</a>
                </div>
            </div>

            <div class="col-sm card m-2 py-2" style="width: 18rem;">
                <img class="card-img-top" src="assets/img/luna-lovegood-web.webp" alt="Luna lovegood">
                <div class="card-body">
                    <h5 class="card-title">Mage</h5>
                    <p class="card-text">Héros de l'arrière-ligne, son rôle est de causer le plus de dégâts possibles en invoquant de puissants sorts.</p>
                    <a href="#" class="btn">👓 Sélectionner 👓</a>
                </div>
            </div>

            <div class="col-sm card m-2 py-2" style="width: 18rem;">
                <img class="card-img-top" src="assets/img/dexter.jpg" alt="Dexter">
                <div class="card-body">
                    <h5 class="card-title">Assassin</h5>
                    <p class="card-text">Héros de l'ombre, l'Assassin se faufile dans les rangs ennemis afin d'en finir le plus rapidement possible.</p>
                    <a href="#" class="btn">🍬 Sélectionner 🍬</a>
                </div>
            </div>

            <div class="col-sm card m-2 py-2" style="width: 18rem;">
                <img class="card-img-top" src="assets/img/mr-robot.jpeg" alt="Mr Robot">
                <div class="card-body">
                    <h5 class="card-title">Développeur Web</h5>
                    <p class="card-text">Héros de support, le Développeur Web a pour but de réparer les soi-disant bugs qui ont causé la chute de son Paladin protecteur.</p>
                    <a href="#" class="btn">👨‍💻 Sélectionner 👨‍💻</a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/script.js"></script>
    <!-- Bootstrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>