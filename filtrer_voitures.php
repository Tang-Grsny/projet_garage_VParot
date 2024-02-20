<!DOCTYPE html>
<html>
<head>
    <title>Résultats de recherche</title>
</head>
<body>

<h2>Résultats de recherche</h2>

<?php
// Récupérer la plage de prix sélectionnée depuis le formulaire
$prix_range = $_POST['prix'];

// Convertir la plage de prix en valeurs min et max
switch ($prix_range) {
    case '1000':
        $prix_min = 0;
        $prix_max = 1000;
        break;
    case '5000':
        $prix_min = 1000;
        $prix_max = 5000;
        break;
    case '10000':
        $prix_min = 5000;
        $prix_max = 10000;
        break;
    case '25000':
        $prix_min = 10000;
        $prix_max = 25000;
        break;
    case '50000':
        $prix_min = 25000;
        $prix_max = 50000;
        break;
    case '50000':
        $prix_min = 25000;
        $prix_max = 50000;
        break;
    case '100000':
        $prix_min = 50000;
        $prix_max = 100000;
        break;
    case '150000':
        $prix_min = 100000;
        $prix_max = 150000;
        break;
    case '200000':
        $prix_min = 150000;
        $prix_max = 200000;
        break;
    default:
        // Valeurs par défaut si aucune plage n'est sélectionnée
        $prix_min = 0;
        $prix_max = 150000;
}

// Récupérer les autres critères de recherche depuis le formulaire
$prix=$_POST['prix'];
$modele = $_POST['modele'];
$carburant = $_POST['carburant'];

$voitures = [
    ['modele' => 'BMW', 'prix' => 25000, 'carburant' => 'diesel','image' => 'BMW.jpg', 'description' => 'Une voiture fiable et économique.'],
    ['modele' => 'Toyota good', 'prix' => 150000, 'carburant' => 'essence' ,'image' => 'toyota.jpg', 'description' => 'Une voiture fiable et économique.'],
    ['modele' => 'Toyota nul', 'prix' => 5000, 'carburant' => 'essence','image' => 'toyota.jpg', 'description' => 'Une voiture fiable et économique.'],
    ['modele' => 'BMW', 'prix' => 25000, 'carburant' => 'diesel', 'image' => 'toyota.jpg', 'description' => 'Une voiture fiable et économique.'],
    ['modele' => 'Audi', 'prix' => 60000, 'carburant' => 'electrique', 'image' => 'toyota.jpg', 'description' => 'Une voiture fiable et économique.'],
    ['modele' => 'Mercedes', 'prix' => 18000, 'carburant' => 'hybride','image' => 'toyota.jpg', 'description' => 'Une voiture fiable et économique.'],
];

// Variable pour vérifier si au moins un résultat correspond aux critères
$au_moins_un_resultat = false;

// Filtrer les voitures en fonction des critères
foreach ($voitures as $voiture) {
    if ($voiture['prix'] >= $prix_min &&
        $voiture['prix'] <= $prix_max &&
        ($modele === '' || strpos(strtolower($voiture['modele']), strtolower($modele)) !== false) &&
        $voiture['carburant'] === $carburant) {
        $au_moins_un_resultat = true;
        echo "<div>";
        echo "<img src=\"{$voiture['image']}\" alt=\"{$voiture['modele']}\">";
        echo "<p><strong>{$voiture['modele']}</strong></p>";
        echo "<p>{$voiture['description']}</p>";
        echo "<p>Prix : {$voiture['prix']} €</p>";
        echo "<p>Carburant : {$voiture['carburant']}</p>";
        echo "</div>";
    }
}

// Afficher un message si aucun résultat ne correspond
if (!$au_moins_un_resultat) {
    echo "Aucun résultat trouvé.";
}
?>

</body>
</html>

