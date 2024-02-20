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

    // Requête pour sélectionner tous les enregistrements de la table accountEmployer
    $query = "SELECT * FROM accountEmployer";
    
    // Exécution de la requête
    $stmt = $pdo->query($query);
    
    // Affichage des résultats
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Prénom: " . $row['firstname'] . "<br>";
        echo "Nom: " . $row['lastname'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Mot de passe: " . $row['password_log'] . "<br>";
        echo "Rôle: " . $row['role_log'] . "<br>";
        echo "Statut: " . $row['statut'] . "<br>";
        echo "<hr>";
    }
} catch (PDOException $e) {
    // En cas d'erreur de connexion
    echo "Erreur de connexion: " . $e->getMessage();
}
?>
