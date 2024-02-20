<?php
// Informations de connexion à la base de données
$host = 'db5015388478.hosting-data.io';
$database = 'dbs12605414';
$username = 'dbu3505866';
$password = 'lemotdepassedeVincent.Parrot2024';

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $modele_car = $_POST['modele'];
    $prix_car = $_POST['prix'];
    $carburant_car = $_POST['carburant'];
    
    // Récupérer l'image téléchargée
    $imageData = file_get_contents($_FILES['image']['tmp_name']);

    try {
        // Connexion à la base de données avec PDO
        $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Préparer la requête SQL pour insérer les données dans la table
        $query = "INSERT INTO usedCar (modele_car, price_car, fuel_car, image_data) VALUES (:modele_car, :prix_car, :carburant_car, :imageData)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':modele_car', $modele_car);
        $stmt->bindParam(':prix_car', $prix_car);
        $stmt->bindParam(':carburant_car', $carburant_car);
        $stmt->bindParam(':imageData', $imageData, PDO::PARAM_LOB);
        $stmt->execute();
        
        // Redirection vers une page de confirmation ou une autre page après l'ajout des données
        header('Location: vente.php');
        exit();
    } catch (PDOException $e) {
        // En cas d'erreur, afficher un message d'erreur
        echo "Erreur : " . $e->getMessage();
    }
}
?>
