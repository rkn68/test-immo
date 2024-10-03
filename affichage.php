<?php

function connexionBDD() {
    try {
        // Connexion à la base de données avec les options
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // Initialiser les caractères en UTF-8
            PDO::ATTR_ERRMODE => true, // Activer les erreurs PDO
            PDO::ERRMODE_EXCEPTION => true // Activer les exceptions PDO
        );
        $database = new PDO('mysql:host=localhost;dbname=agence_immobilier', 'root', '', $options); // Connexion à la base de données
    } catch (Exception $err) {
        die('Erreur connexion MySQL : ' . $err->getMessage()); // Afficher une erreur en cas de problème de connexion
    }

    return $database; // Retourner l'objet de connexion à la base de données
}

function ecritureBDD($requete) {
    $bdd = connexionBDD(); // Connexion à la base de données
    $nb = $bdd->exec($requete); // Exécution de la requête SQL
    return $nb; // Retourner le nombre de lignes affectées
}

function lectureBDD($requete) {
    $bdd = connexionBDD(); // Connexion à la base de données
    $stmt = $bdd->prepare($requete); // Préparation de la requête SQL
    $stmt->execute(); // Exécution de la requête
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retourner les résultats sous forme de tableau associatif
}

// Requête pour récupérer les informations des biens immobiliers
$requete_immo = "SELECT Id_du_bien, type_de_bien, adresse, descriptions, prix, surface, nombre_de_chambres, nombre_de_salles_de_bains, statut FROM bien_immobilier";
$bien_immobilier = lectureBDD($requete_immo);

// Requête pour récupérer les informations des catégories
$requete_catégorie = "SELECT Id_categorie, nom_categorie, descriptions, surface_moyenne, prix_moyen FROM catégorie";
$catégorie = lectureBDD($requete_catégorie);

// Requête pour récupérer les informations des clients
$requete_clients = "SELECT Id_utilisateur, nom, prenom, adresse_mail, numero_de_telephone, autres_infos FROM clients";
$clients = lectureBDD($requete_clients);

?>
