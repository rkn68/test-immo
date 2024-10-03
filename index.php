<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8"> <!-- Définition de l'encodage des caractères -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Compatibilité avec Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Paramètres de mise en page responsive -->
    <link rel="stylesheet" href="reset.css"> <!-- Lien vers le fichier CSS de réinitialisation -->
    <link rel="stylesheet" href="index.css"> <!-- Lien vers le fichier CSS principal -->
    <title>Site Immobilier</title> <!-- Titre de la page -->
</head>
<body>
    <div class="grille-accueil"> <!-- Conteneur principal utilisant une grille CSS -->
        
        <nav class="menu"> <!-- Menu de navigation -->
            <h2 class="titre-menu">Menu</h2> <!-- Titre du menu -->
            <ul class="liste-menu"> <!-- Liste des éléments de navigation -->
                <li class="item-nav"><a href="#">Accueil</a></li> <!-- Lien vers la page d'accueil -->
                <li class="item-nav"><a href="informations.php">Informations</a></li> <!-- Lien vers la page d'informations -->
                <li class="item-nav"><a href="portfolio.php">Tous nos biens</a></li> <!-- Lien vers la page portfolio -->
                <li class="item-nav"><a href="contact.php">Contact</a></li> <!-- Lien vers la page de contact -->
            </ul>
        </nav>
        <img src="img" alt="">
        <section class="presentation"> <!-- Section de présentation -->
            <img src="image isik agency.png" alt="Image ISIK Agency"> <!-- Logo de l'agence -->
            <h1>ISIK Agency</h1> <!-- Titre principal -->
            <p>Votre maison de rêve à un prix exceptionnel.</p> <!-- Slogan ou description -->
            <a href="informations.php">En Savoir plus</a> <!-- Lien pour en savoir plus -->
        </section>
        
        <section class="slider"> <!-- Section du slider d'images -->
            <div class="container-slides"> <!-- Conteneur des slides -->
                <img src="maison1.jpg" class="active"> <!-- Image active du slider -->
                <img src="maison2.jpg"> <!-- Image du slider -->
                <img src="maison3.jpg"> <!-- Image du slider -->
                <img src="maison4.jpg"> <!-- Image du slider -->
            </div>
            <div class="cont-btn"> <!-- Conteneur des boutons de navigation du slider -->
                <button class="btn-nav left"> <!-- Bouton de navigation gauche -->
                    <img src="chevron-gauche.svg" alt="Chevron Gauche"> <!-- Icône du chevron gauche -->
                </button>
                <button class="btn-nav right"> <!-- Bouton de navigation droite -->
                    <img src="chevron-droit.svg" alt="Chevron Droit"> <!-- Icône du chevron droit -->
                </button>
            </div>
        </section>
        
        <section class="choix"> <!-- Section des choix -->
            <h2 class="titre-choix">
                Votre maison de rêve,<br>
                à un prix exceptionnel.
            </h2> <!-- Titre des choix -->
            <a href="portfolio.php" class="go-galerie">Découvrez nos biens.</a> <!-- Lien vers le portfolio -->
            <div class="cont-medias"> <!-- Conteneur des icônes de médias sociaux -->
                <a href="https://x.com/rkn_68" target="_blank"> <!-- Lien vers Twitter -->
                    <img src="twitter.svg" alt="Twitter"> <!-- Icône Twitter -->
                </a>
                <a href="https://www.facebook.com/erkan.isik.5264?locale=fr_FR" target="_blank"> <!-- Lien vers Facebook -->
                    <img src="facebook.svg" alt="Facebook"> <!-- Icône Facebook -->
                </a>
            </div>
        </section>
        
        <section class="contact"> <!-- Section de contact -->
            <h3>Envoyez<br>Nous Un<br>Message</h3> <!-- Titre de la section contact -->
            <a href="contact.php" class="go-contact"> <!-- Lien vers la page de contact -->
                <img src="chevron-droit.svg" alt="Chevron Droit"> <!-- Icône du chevron droit -->
            </a>
        </section>
    </div>
    
    <script>
        // Script pour le fonctionnement du slider
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.container-slides img');
            let currentIndex = 0;

            // Fonction pour mettre à jour les slides
            const updateSlide = (index) => {
                slides.forEach((slide, i) => slide.classList.toggle('active', i === index));
            };

            // Événement pour le bouton de navigation droite
            document.querySelector('.btn-nav.right').addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % slides.length;
                updateSlide(currentIndex);
            });

            // Événement pour le bouton de navigation gauche
            document.querySelector('.btn-nav.left').addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                updateSlide(currentIndex);
            });

            // Changement automatique des slides toutes les 3 secondes
            setInterval(() => {
                currentIndex = (currentIndex + 1) % slides.length;
                updateSlide(currentIndex);
            }, 3000);
        });
    </script>
</body>
</html>
