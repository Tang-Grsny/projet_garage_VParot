

<?php
// Informations de connexion à la base de données
$host = 'db5015388478.hosting-data.io';
$database = 'dbs12605414';
$username = 'dbu3505866';
$password = 'lemotdepassedeVincent.Parrot2024';

// Connexion à la base de données avec PDO
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Récupérer les commentaires depuis la base de données
$query = "SELECT visitor_name, comment_text, rating FROM comment";
$stmt = $pdo->query($query);
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

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
        <div class="contnaire carImglFond">
            <div class="center_element">
                <h1 class="mx-auto p-2">Nous sommes à votre écoute</h1>
                <form action="traitement_commentaire.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Commentaire</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Note (de 1 à 5)</label>
                        <input type="number" class="form-control" id="exampleFormControlInput2" name="rating" min="1" max="5">
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
            <div class="comments-section midContent">
            <h2>Commentaires des clients :</h2>
            <?php foreach ($comments as $comment) : ?>
                <div class="comment midContent">
                            <p><strong><?= $comment['visitor_name'] ?>:</strong> <?= $comment['comment_text'] ?></p>
                            <p>Note : <?= $comment['rating'] ?>/5</p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>



    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>