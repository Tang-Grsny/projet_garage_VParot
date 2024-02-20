<?php
// Informations de connexion à la base de données
$host = 'db5015388478.hosting-data.io';
$database = 'dbs12605414';
$username = 'dbu3505866';
$password = 'lemotdepassedeVincent.Parrot2024';

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu']; 

    try {
        // Connexion à la base de données avec PDO
        $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        
        // Définition du mode d'erreur PDO à exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparer la requête SQL pour insérer les données dans la table articleReparation
        $query = "INSERT INTO articleReparation (title_repa, content_repa) VALUES (:titre, :contenu)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(':titre' => $titre, ':contenu' => $contenu));

        // Redirection vers la page d'accueil ou une autre page après l'envoi des données
        header('Location: rhome_admin.php');
        exit();
    } catch (PDOException $e) {
        // En cas d'erreur, afficher un message d'erreur
        echo "Erreur : " . $e->getMessage();
    }
}
?>

