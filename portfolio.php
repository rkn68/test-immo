<?php
try {
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $bdd = new PDO('mysql:host=localhost;dbname=agence_immobilier', 'root', '', $options);
} catch (Exception $err) {
    die('Erreur connexion MySQL : ' . $err->getMessage());
}

$reponse = $bdd->query("SELECT * FROM bien_immobilier");

$table = $reponse->fetchAll(PDO::FETCH_ASSOC);

$bdd = null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISIK Agency</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="menu">
        <h2 class="titre-menu">Menu</h2>
        <ul class="liste-menu">
            <li class="item-nav"><a href="index.php">Accueil</a></li>
            <li class="item-nav"><a href="informations.php">Informations</a></li>
            <li class="item-nav"><a href="portfolio.php">Tous nos biens</a></li>
            <li class="item-nav"><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="immobilier">
        <?php foreach ($table as $maisons) : ?>
            <div class="maisons-details">
                <img src="<?php echo htmlspecialchars($maisons['images']); ?>.jpg" alt="<?php echo htmlspecialchars($maisons['images']); ?>" class="maison-image">
                <div><span class="label">Type :</span> <?php echo htmlspecialchars($maisons['Type_de_bien']); ?></div>
                <div><span class="label">Adresse :</span> <?php echo htmlspecialchars($maisons['Adresse']); ?></div>
                <div><span class="label">Description :</span> <?php echo htmlspecialchars($maisons['Descriptions']); ?></div>
                <div><span class="label">Prix :</span> <?php echo htmlspecialchars($maisons['Prix']); ?></div>
                <div><span class="label">Surface :</span> <?php echo htmlspecialchars($maisons['Surface']); ?></div>
                <div><span class="label">Statut :</span> <?php echo htmlspecialchars($maisons['Statut']); ?></div>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="script/portfolio.js"></script>
</body>
</html>
