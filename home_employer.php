<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un commentaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Supprimer un commentaire</h1>
    <form action="delet_comment.php" method="post">
        <label for="comment_id">Sélectionner un commentaire à supprimer :</label>
        <select id="comment_id" name="comment_id">
            <?php
            // Connexion à la base de données
            $host = 'db5015388478.hosting-data.io';
            $database = 'dbs12605414';
            $username = 'dbu3505866';
            $password = 'lemotdepassedeVincent.Parrot2024';

            try {
                $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Récupérer les commentaires depuis la base de données
                $query = "SELECT id, comment_text FROM comment";
                $stmt = $pdo->query($query);

                // Afficher les commentaires dans le menu déroulant
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['id'] . " - " . $row['comment_text'] . "</option>";
                }
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
        </select>
        <button type="submit">Supprimer</button>
    </form>

    <h1>Ajouter une voiture d'occasion</h1>
    <form action="add_car_used.php" method="POST" enctype="multipart/form-data">
        <label for="modele">Modèle :</label><br>
        <input type="modele" id="modele" name="modele" required><br><br>
        
        <label for="prix">Prix :</label><br>
        <input type="number" id="prix" name="prix" required><br><br>
        
        <label for="carburant">Carburant :</label><br>
        <input type="carburant" id="carburant" name="carburant" required><br><br>
        
        <label for="image">Image de la voiture :</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>
        
        <button type="submit">Ajouter la voiture</button>
    </form>
</body>
</html>

