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

    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating']; 

    // Requête SQL pour insérer le commentaire dans la base de données
    $query = "INSERT INTO comment (visitor_name, comment_text, rating) VALUES (:visitor_name, :comment_text, :rating)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':visitor_name', $email);
    $stmt->bindParam(':comment_text', $comment);
    $stmt->bindParam(':rating', $rating);
    $stmt->execute();

    // Rediriger vers la page principale après l'ajout du commentaire
    header('Location: avis.php');
    exit();

} catch (PDOException $e) {
    // Gérer les erreurs de connexion à la base de données
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
