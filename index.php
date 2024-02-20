<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage V. Parrot</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>

<body>
    <?php require_once(__DIR__ . '/header.php'); ?>

<div class="d-flex flex-column min-vh-100">    
    <div>
        <section class="d-flex-col">
            <div class="carImgFond"></div>
        </section></div>
    <div class="container-fluid">
        <!-- inclusion de l'entête du site -->
        

        <main class="p-5">
            <section class="hero flux">
                <h1 class="hero__title">Réparation,<br>Entretien,<br>Ventes,<br>Nous sommes là pour vous !</h1>
                <p class="hero__description">Simple • Immédiat • Parfait pour vous </p>
            </section>
</main>
<!--présentation des services-->
<section class="content-mid">
        <section class="mid">
            <div class="image-size">
                <img src="./asstes/images/entretient auto.jpg" class="rounded pic_size" alt="entertien auto"
                >
                <div class="midContent">
                    <h2>Qui sommes nous ?</h2>
                    <p>Passionner depuis tout petit par les ancienne voiture de toutes marque et nationalité je suis heureux de vous acceuilir dans mon garage.
                        Ici vous trouverez des amoureux des la vieille mécanique désireux de vous aiguiller soit dans l'aquition d'un nouveu trésor 
                        ou dans l'entretient et la réparation de votre bien mal en point.
                    </p>
                </div>
            </div>
            
            <div class="image-size">
                <img src="./asstes/images/Qui somme nous.jpg" class="rounded pic_size" alt="entertien auto">
                <div class="midContent">
                <h2>Tous le monde est le bienvenue</h2>
                <p>Nous sommes spécialisés dans l'entretien et la réparation de tous types de véhicules, 
                    qu'ils soient anciens ou récents. Notre equipe de professionnel expérimentés possède les connaissances et l'expertise nécessaires pour travailler sur une large gamme de véhicules, 
                    allant des modèles classiques aux derniers modèles sur le marché. Que vous conduisiez une voiture familiale, 
                    un véhicule utilitaire ou une voiture de collection, nous sommes là pour vous offrir un service de qualité
                </p>
            </div>
        </div>

            <div class="image-size">
                <img src="./asstes/images/reapration auto hd.png" class="rounded pic_size" alt="repartion auto">
                <div class="midContent">
                <h2>Un service personnaliser</h2>
                <p>Chez Garage V.Parrot ,nous sommes fiers de fournir des services personnalisés pour répondre aux besoins uniques de nos clients.
                    Que vous ayez besoin d'une réparation, d'un entretien régulier ou de conseils d'experts, notre équipe est là pour vous aider.
                    Nous comprenons que chaque véhicule est différent,
                    c'est pourquoi nous prenons le temps d'écouter attentivement vos préoccupations et de vous offrir des solutions adaptées.
                </p>
            </div>
        </div>
        </section>
    </section>
    </section>

    <!-- inclusion du bas de page du site -->
    <?php require_once(__DIR__ . '/footer.php'); ?></div>

</body>
</html>