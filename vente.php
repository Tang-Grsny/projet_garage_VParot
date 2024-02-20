<?php
// Informations de connexion à la base de données
$host = 'db5015388478.hosting-data.io';
$database = 'dbs12605414';
$username = 'dbu3505866';
$password = 'lemotdepassedeVincent.Parrot2024';

// Connexion à la base de données avec PDO
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Récupérer les modèles de voitures depuis la base de données
$queryModeles = "SELECT DISTINCT modele_car FROM usedCar";
$stmtModeles = $pdo->query($queryModeles);
$modelesCars = $stmtModeles->fetchAll(PDO::FETCH_COLUMN);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage V.Parrot</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <div class="d-flex justify-content-center">
    <div class="occasion_car">
        <div class="container">
            <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="6" aria-label="Slide 0"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="7" aria-label="Slide 0"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/images/imgCarSold/pexels-aaron-curtis-119435.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Toutes les marques</h5>
                            <p>Nous proposons à nos clients une myriade de marque</p>
                        </div>
                    </div>
                    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-alex-amorales-909907.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Toutes sortes de réparation</h5>
        <p>De la plus petite égratignure à la plus grosse tôle froissée nous pouvons tout réparer</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-mike-bird-116675.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Un nouvel achat en prévision</h5>
        <p>On vous conseille on vous guide on est là pour ça</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-mike-bird-170811.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Des sportives pour les amoureux de la vitesse</h5>
        <p>automatique manuelle traction propulsion</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-mike-bird-810357.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>De la très bonne occasion</h5>
        <p>Aller voir les avis</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-mike-bird-977003.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Parfois des voitures de collection</h5>
        <p>Rien que pour vous les amoureux des belles voitures</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-nordic-overdrive-1082655.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Ancien nouvelle à vous de voir</h5>
        <p>Avec nos réparations elles sont de toute façon comme neuf</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-sebastian-pichard-6894428.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Et même des japonaise comme dans initiale d</h5>
        <p>On vous voit les amoureux du drift</p>
        </div>
    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

    <div class="container">
    <h2>Voitures disponibles</h2>
    <!-- Formulaire de filtre -->
    <form method="GET" action="">
        <div class="row">
            <!-- Champ de sélection pour le modèle -->
            <div class="col">
                <label for="modele">Modèle :</label>
                <select id="modele" name="modele">
                    <option value="">Tous les modèles</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Bmw">Bmw</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Audi">Audi</option>
                    <option value="Jeep">Jeep</option>
                </select>
            </div>
            <!-- Champ de sélection pour le carburant -->
            <div class="col">
                <label for="carburant">Carburant :</label>
                <select id="carburant" name="carburant">
                    <option value="">Tous les carburants</option>
                    <option value="Essence">Essence</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Hybride">Hybride</option>
                    <option value="Électrique">Électrique</option>
                </select>
            </div>
            <!-- Champ de sélection pour le prix -->
            <div class="col">
                <label for="prix">Prix maximum :</label>
                <select id="prix" name="prix">
                    <option value="">Tous les prix</option>
                    <option value="1000">De 0 à 1000 €</option>
                    <option value="5000">De 1000 à 5000 €</option>
                    <option value="10000">De 5000 à 10000 €</option>
                    <option value="25000">De 10000 à 25000 €</option>
                    <option value="50000">De 25000 à 50000 €</option>
                    <option value="100000">De 50000 à 100000 €</option>
                    <option value="150000">De 50000 à 150000 €</option>
                    <option value="150000">De 150000 à 200000 €</option> 
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Filtrer</button>
            </div>
        </div>
    </form>

        <!-- Affichage des voitures filtrées -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            // Construction de la requête SQL en fonction des valeurs sélectionnées dans le formulaire
            $query = "SELECT * FROM usedCar WHERE 1";

            if (isset($_GET['modele']) && !empty($_GET['modele'])) {
                $query .= " AND modele_car = '" . $_GET['modele'] . "'";
            }

            if (isset($_GET['carburant']) && !empty($_GET['carburant'])) {
                $query .= " AND fuel_car = '" . $_GET['carburant'] . "'";
            }

            if (isset($_GET['prix']) && !empty($_GET['prix'])) {
                $query .= " AND price_car <= " . $_GET['prix'];
            }

            // Exécution de la requête SQL
            $stmt = $pdo->query($query);
            $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Parcourir les voitures et les afficher
            foreach ($cars as $car) {
                ?>
                <div class="col">
                    <div class="card">
                        <?php
                        // Convertir les données de l'image en URL
                        $imageData = base64_encode($car['image_data']);
                        $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                        ?>
                        <img src="<?= $imageSrc ?>" class="card-img-top car-image" alt="<?= $car['modele'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $car['modele_car'] ?></h5>
                            <p class="card-text">Prix : <?= $car['price_car'] ?> €</p>
                            <p class="card-text">Carburant : <?= $car['fuel_car'] ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
        </div>
    </div>


    <?php require_once(__DIR__ . '/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>






<div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-alex-amorales-909907.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-mike-bird-116675.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-mike-bird-170811.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-mike-bird-810357.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-mike-bird-977003.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-nordic-overdrive-1082655.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Four slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./asstes/images/imgCarSold/pexels-sebastian-pichard-6894428.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Five slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        </div>
    </div>