<?php
// Informations de connexion à la base de données
$host = 'db5015388478.hosting-data.io';
$database = 'dbs12605414';
$username = 'dbu3505866';
$password = 'lemotdepassedeVincent.Parrot2024';

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Connexion à la base de données avec PDO
        $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        
        // Définition du mode d'erreur PDO à exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Préparation de la requête de suppression
        $query = "DELETE FROM times_day WHERE day = :day AND hours = :hours";
        $stmt = $pdo->prepare($query);
        
        // Liaison des paramètres
        $stmt->bindParam(':day', $_POST['day']);
        $stmt->bindParam(':hours', $_POST['hours']);
        
        // Exécution de la requête
        $stmt->execute();
        
        // Redirection vers la page d'administration après la suppression
        header('Location: home_admin.php');
    } catch (PDOException $e) {
        // En cas d'erreur de connexion
        echo "Erreur de connexion: " . $e->getMessage();
    }
}
?>

