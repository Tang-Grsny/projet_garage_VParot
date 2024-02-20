<?php
$dsn = 'mysql:host=db5015388478.hosting-data.io;dbname=dbs12605414';
$username = 'dbu3505866';
$password = 'lemotdepassedeVincent.Parrot2024';

// Récupérer les données soumises par le formulaire employer
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password_log = $_POST['password_log'];
$role_log = $_POST['role_log'];
$statut = $_POST['statut'];


try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer la requête d'insertion
    $query = "INSERT INTO accountEmployer (firstname, lastname, email, password_log, role_log, statut) VALUES (:prenom, :nom, :email, :password_log, :role_log, :statut)";
    $stmt = $pdo->prepare($query);

    // Exécuter la requête
    $stmt->execute(array(':prenom' => $prenom, ':nom' => $nom, ':email' => $email, ':password_log' => $password_log, ':role_log' => $role_log, ':statut' => $statut));

    echo "Utilisateur ajouté avec succès.";
} catch (PDOException $e) {
    echo "Erreur lors de l'ajout de l'utilisateur : " . $e->getMessage();
}
?>
