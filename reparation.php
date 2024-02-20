<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laissez-nous vos avis</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <div class="d-flex flex-column min-vh-100">
        <h1>Liste des réparations</h1>
        <?php
        // Informations de connexion à la base de données
        $host = 'db5015388478.hosting-data.io';
        $database = 'dbs12605414';
        $username = 'dbu3505866';
        $password = 'lemotdepassedeVincent.Parrot2024';
        
        try {
            // Connexion à la base de données avec PDO
            $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // Récupération des réparations depuis la base de données
            $query = "SELECT * FROM articleReparation";
            $stmt = $pdo->query($query);
            $reparations = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            // Affichage de chaque réparation dans un encadré
            foreach ($reparations as $reparation) {
        ?>
        <div class="midContent">
            <h2 class="titre"><?php echo $reparation['title_repa']; ?></h2>
            <div class="commentaire"><?php echo $reparation['content_repa']; ?></div>
        </div>
        <?php
            }
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        ?>
    </div>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>



