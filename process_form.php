<?php
// Configurer les informations de connexion à la base de données
$servername = "localhost"; // Nom du serveur MySQL
$username = "root"; // Votre nom d'utilisateur MySQL
$password = ""; // Votre mot de passe MySQL
$dbname = "agence_immobilier"; // Votre base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Afficher un message d'erreur si la connexion échoue
}

// Récupérer les données du formulaire
$prenom = $_POST['prenom']; // Récupérer le prénom du formulaire
$nom = $_POST['nom']; // Récupérer le nom du formulaire
$tel = $_POST['tel']; // Récupérer le téléphone du formulaire
$type_bien = isset($_POST['type_bien']) ? implode(", ", $_POST['type_bien']) : ""; // Récupérer les types de biens sélectionnés et les convertir en chaîne
$message_text = $_POST['message_text']; // Récupérer le message du formulaire

// Préparer et exécuter la requête SQL
$sql = "INSERT INTO contact (prenom, nom, telephone, type_bien, message_text) VALUES (?, ?, ?, ?, ?)"; // Requête d'insertion SQL
$stmt = $conn->prepare($sql); // Préparer la requête SQL
$stmt->bind_param("sssss", $prenom, $nom, $tel, $type_bien, $message_text); // Lier les paramètres

// Exécuter la requête et vérifier le succès
if ($stmt->execute()) {
    echo "Votre message a bien été envoyé !"; // Message de succès
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error; // Message d'erreur
}

// Fermer la connexion
$stmt->close(); // Fermer le statement
$conn->close(); // Fermer la connexion
?>
