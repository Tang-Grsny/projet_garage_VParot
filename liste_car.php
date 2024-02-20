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

<?php
// Informations de connexion à la base de données
$host = 'db5015388478.hosting-data.io';
$database = 'dbs12605414';
$username = 'dbu3505866';
$password = 'lemotdepassedeVincent.Parrot2024'; 

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Définition du mode d'erreur PDO à exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête pour sélectionner tous les enregistrements de la table usedCar
    $query = "SELECT * FROM usedCar";
    
    // Exécution de la requête
    $stmt = $pdo->query($query);
    
    // Affichage des résultats
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Modèle: " . $row['modele_car'] . "<br>";
        echo "Prix: " . $row['price_car'] . "<br>";
        echo "Carburant: " . $row['fuel_car'] . "<br>";
        echo "<img src='data:image/jpeg;base64," . base64_encode($row['image_data']) . "' alt='Image voiture' class='car-image'><br>";
        echo "<hr>";
    }
} catch (PDOException $e) {
    // En cas d'erreur de connexion
    echo "Erreur de connexion: " . $e->getMessage();
}
?>



