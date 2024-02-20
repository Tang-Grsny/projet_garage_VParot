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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body">
<div class="container">
    <?php
    // Connexion à la base de données
    $dsn = 'mysql:host=db5015388478.hosting-data.io;dbname=dbs12605414';
    $username = 'dbu3505866';
    $password = 'lemotdepassedeVincent.Parrot2024';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL pour récupérer les données de la base de données
        $query = "SELECT * FROM times_day";
        $stmt = $pdo->query($query);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Affichage des données dans le footer
        echo '<footer>';
        echo '<ul>';
        foreach ($data as $row) {
            echo '<li>' . $row['day'] . ': ' . $row['hours'] . '</li>'; 
        }
        echo '</ul>';
        // Ajout de l'adresse, du numéro de téléphone et de l'email
        echo '<address>';
        echo '15 Av. de la Garonnette, Toulouse<br>';
        echo 'Téléphone : 06.**.**.**.**<br>';
        echo 'Email : v.parrot@exemple.com';
        echo '</address>';
        echo '</footer>';
    } catch (PDOException $e) {
        // En cas d'erreur de connexion à la base de données
        echo "Erreur de connexion: " . $e->getMessage();
    }
    ?>
    </div>
</body>
</html>







