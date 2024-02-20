<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@500&display=swap" rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <h1>Nos services d'entretien de véhicules</h1>

    <?php
    
    $articles = array(
        array(
            'titre' => 'Service de vidange',
            'contenu' => 'Notre service de vidange assure un remplacement efficace de l\'huile de votre véhicule, ainsi que du filtre à huile.',
        ),
        array(
            'titre' => 'Réparation de freins',
            'contenu' => 'Nous proposons des services de réparation et de remplacement de freins pour assurer la sécurité et la performance de votre véhicule.',
        ),
        array(
            'titre' => 'Diagnostic électronique',
            'contenu' => 'Notre service de diagnostic électronique utilise des équipements modernes pour détecter et résoudre les problèmes électroniques de votre véhicule.',
        )
    );

    foreach ($articles as $article) {
        ?>
        <div class="midContent ">
            <h2><?= $article['titre'] ?></h2>
            <p><?= $article['contenu'] ?></p>
        </div>
        <?php
    }
    ?>

    <?php require_once(__DIR__ . '/footer.php'); ?>
    </div>

</body>
</html>