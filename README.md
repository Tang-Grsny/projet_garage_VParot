# projet_garage_VParot
Projet de site web vitrine d'un garage ECF pour monsieur Vincent Parrot 

Voici les instructions pour exectuer mon projet en local

dans ce guide je vais vous expliquer comment exécuter l'application "Garage V. Parrot" localement.

** Pré-requis **

pour commencer, assurez-vous d'avoir ces éléments  installés sur votre système :

# PHP
# MySQL (ou un autre système de gestion de base de données compatible avec PHP)
# Logiciel pour créer un serveur local (ex:WampServer/XAMPP/MAMP/...)

** Installation **

 Clonez le dépôt sur votre machine locale

** Base de donnée **

Configurez la base de donnée :

-Créez une nouvelle base de données MySQL

-Importez le fichier SQL fourni cela vas créer les tables [projetSiteWebGarage.sql](https://github.com/Tang-Grsny/projet_garage_VParot/blob/main/projetSiteWebGarage.sql)

-Modifiez les variables $host, $dbname, $username et $password pour qu'elles soient senblabes à vos informations de connexion à la base de donné.

** Execution **

-Ouvrer votre terminal pour accéder de répertoire de l'application 
(cd chemin/vers/garage-v-parrot)

-Lancer votre logiciel de création de server local

-Dans votre terminal taper la commande (php -S localhost:8000) pour ouvrir un serveur PHP local

-Ouvrez votre navigateur web en tappant http://localhost:8000 

-L'application web "Garage V. Parrot" devrait souvrire 

** Création d'un administrateur pour le back-office **

Accéder à la base de données :

-Dans votre terminal SQL ou une interface de gestion de base de données comme phpMyAdmin.

-Sélectionner la base de données dans laquelle vous avec souvegarder les données

-Vous pouvez ensuite taper :INSERT INTO accountEmployer (firstname, lastmane, email, password, role, staut
                           :VALUES('votre firstname', 'votre lastmane', 'votre email', 'un mot de passe', 'admin', 'active' )

-Vous pourrez ainsi accédez au paramètre admin





Ce projet a été developper par Tanguy Grosshenny

