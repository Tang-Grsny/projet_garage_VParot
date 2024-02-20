
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
<body>
<?php require_once(__DIR__ . '/header.php'); ?>

<div class="d-flex flex-column min-vh-100">
    <h1>Connexion</h1>
    <form method="POST" action="login_post.php">
        <label for="email">Email:</label>
        <input type="email" name="email" ><br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" ><br>
        <input type="submit" value="Se connecter">
    </form>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</div>

</body>
</html>
