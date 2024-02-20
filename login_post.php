<?php
session_start();

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

    // Récupérer les données du formulaire de connexion
    $emailForm = $_POST['email'];
    $passwordForm = $_POST['password'];

    // Requête SQL pour récupérer l'utilisateur par email et mot de passe
    $query = "SELECT * FROM accountEmployer WHERE email = :email AND password_log = :password_log";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $emailForm);
    $stmt->bindParam(':password_log', $passwordForm);
    $stmt->execute();

    // Récupérer le résultat de la requête
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Authentification réussie
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Vérifier si l'utilisateur est Vincent Parrot
        if ($emailForm === 'v.parrot@exemple.com' && $passwordForm === 'vincentparrotmdpad1234') {
            $_SESSION['admin'] = true;
            // Redirection spécifique pour Vincent Parrot
            header('Location: home_admin.php');
            exit();
        } else {
            // Redirection vers la page d'accueil ou autre page autorisée
            header('Location: home_employer.php');
            exit();
        }
    } else {
        // Informations de connexion incorrectes
        $error_message = "Nom d'utilisateur ou mot de passe incorrect.";
    }

} catch (PDOException $e) {
    // Erreur de connexion à la base de données
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>


