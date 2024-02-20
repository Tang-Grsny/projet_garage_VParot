<?php
session_start();

// Vérifier l'authentification de l'utilisateur
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas authentifié
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
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
<body>
<?php require_once(__DIR__ . '/header.php'); ?>

<div class="d-flex flex-column min-vh-100">    
    <h2>Bienvenue sur la page d'accueil</h2>
    
    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>

    <nav>
        <ul>
            <li><a href="liste_worker">Gestion des utilisateurs</a></li>
            <li><a href="#">Gestion des réparations</a></li>
            <li><a href="#">Déconnexion</a></li>
        </ul>
    </nav>

    <h3>Création de compte</h3>
    <form method="post" action="add_employer_serve.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required><br><br>

        <label for="role">Rôle :</label>
        <input type="text" name="role" id="role" required><br><br>

        <label for="statut">Statut :</label>
        <input type="text" name="statut" id="statut" required><br><br>

        <input type="submit" value="Ajouter utilisateur">
    </form>

    <h2>Ajouter un horaire</h2>
    <form method="post" action="add_times.php">
        <label for="day">Jour :</label>
        <input type="text" name="day" id="day" required><br><br>

        <label for="hours">Heures :</label>
        <input type="text" name="hours" id="hours" required><br><br>

        <input type="submit" value="Ajouter horaire">
    </form>

    <h2>supprmier un horaire</h2>
    <form method="post" action="delet_times.php">
    <label for="day">Jour :</label>
    <input type="text" name="day" id="day" required><br><br>

    <label for="hours">Heures :</label>
    <input type="text" name="hours" id="hours" required><br><br>

    <input type="submit" value="Supprimer données">
</form>

<h2>Ajouter des réparations</h2>
    <form method="post" action="add_repa.php">
        <label for="titre">Titre :</label><br>
        <input type="titre" id="titre" name="titre"><br><br>

        <label for="contenu">Contenu :</label><br>
        <textarea id="contenu" name="contenu" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php } else { ?>

    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Produits</a></li>
            <li><a href="#">Déconnexion</a></li>
        </ul>
    </nav>

    <p>Vous êtes connecté en tant qu'<?php echo $_SESSION['username']?></p>

    <?php } ?>
</div>
<?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>



