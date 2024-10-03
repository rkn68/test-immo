<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"> <!-- Définition de l'encodage des caractères -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Paramètres de mise en page responsive -->
    <title>Contact</title> <!-- Titre de la page -->
    <link rel="stylesheet" href="reset.css"> <!-- Lien vers le fichier CSS de réinitialisation -->
    <link rel="stylesheet" href="index.css"> <!-- Lien vers le fichier CSS principal -->
</head>
<body>
    <div class="menu"> <!-- Menu de navigation -->
        <h2 class="titre-menu">Menu</h2> <!-- Titre du menu -->
        <ul class="liste-menu"> <!-- Liste des éléments de navigation -->
            <li class="item-nav"><a href="index.php">Accueil</a></li> <!-- Lien vers la page d'accueil -->
            <li class="item-nav"><a href="informations.php">Informations</a></li> <!-- Lien vers la page d'informations -->
            <li class="item-nav"><a href="portfolio.php">Tous nos biens</a></li> <!-- Lien vers la page portfolio -->
            <li class="item-nav"><a href="contact.php">Contact</a></li> <!-- Lien vers la page de contact -->
        </ul>
    </div>

    <h1 class="titre-contact">Entrons en contact !</h1> <!-- Titre principal de la page de contact -->
    <p class="contact-sous-titre">Contactez-nous par mail, téléphone ou par la poste.</p> <!-- Sous-titre de contact -->

    <div class="trois-contacts"> <!-- Section des informations de contact -->
        <div class="box"> <!-- Boîte contenant l'adresse -->
            <img src="placeholder.svg" alt="Adresse"> <!-- Icône de l'adresse -->
            <span>8 rue des muriers, 68210 Retzwiller</span> <!-- Adresse -->
        </div>
        <div class="box"> <!-- Boîte contenant le téléphone -->
            <img src="phone-call.svg" alt="Téléphone"> <!-- Icône du téléphone -->
            <span>06.01.49.24.88</span> <!-- Numéro de téléphone -->
        </div>
        <div class="box"> <!-- Boîte contenant l'email -->
            <img src="email.svg" alt="Email"> <!-- Icône de l'email -->
            <span>erkanpro@gmail.com</span> <!-- Adresse email -->
        </div>
    </div>

    <form id="contactForm" action="process_form.php" method="POST" target="hidden_iframe" onsubmit="submitted=true;">
        <!-- Formulaire de contact -->
        <h2>Parlez-nous de vos envies.</h2> <!-- Titre du formulaire -->
        
        <label for="prenom" class="label-input">Votre prénom</label> <!-- Label pour le champ prénom -->
        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required> <!-- Champ de saisie du prénom -->
        
        <label for="nom" class="label-input">Votre nom</label> <!-- Label pour le champ nom -->
        <input type="text" id="nom" name="nom" placeholder="Votre nom" required> <!-- Champ de saisie du nom -->
        
        <label for="tel" class="label-input">Votre téléphone</label> <!-- Label pour le champ téléphone -->
        <input type="text" id="tel" name="tel" placeholder="Votre téléphone" required> <!-- Champ de saisie du téléphone -->
        
        <p class="titre-check">Type de bien :</p> <!-- Titre pour les cases à cocher -->
        
        <div class="groupe-check"> <!-- Groupe de cases à cocher pour le type de bien -->
            <label for="louer" class="labels-check">Louer</label> <!-- Label pour la case à cocher louer -->
            <input type="checkbox" id="louer" name="type_bien[]" value="Louer"> <!-- Case à cocher louer -->
        </div>
        
        <div class="groupe-check"> <!-- Groupe de cases à cocher pour le type de bien -->
            <label for="acheter" class="labels-check">Acheter</label> <!-- Label pour la case à cocher acheter -->
            <input type="checkbox" id="acheter" name="type_bien[]" value="Acheter"> <!-- Case à cocher acheter -->
        </div>
        
        <label for="txt">Message</label> <!-- Label pour le champ message -->
        <textarea id="txt" name="message_text" placeholder="Votre message" required></textarea> <!-- Champ de saisie du message -->
        
        <button type="submit">Envoyer</button> <!-- Bouton d'envoi du formulaire -->
    </form>
    
    <div id="formMessage"></div> <!-- Div pour afficher le message de réponse -->
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) { showResponse(); }"></iframe>
    <!-- Iframe cachée pour traiter le formulaire sans recharger la page -->
    
    <script>
        var submitted = false; // Variable pour suivre l'état de soumission du formulaire

        function showResponse() {
            var iframe = document.getElementById('hidden_iframe'); // Récupération de l'iframe
            var messageDiv = document.getElementById('formMessage'); // Récupération de la div du message de réponse

            if (iframe.contentDocument) {
                var content = iframe.contentDocument.body.innerHTML; // Contenu de l'iframe
                messageDiv.innerHTML = content; // Affichage du contenu dans la div de réponse
            }

            document.getElementById('contactForm').reset(); // Réinitialisation du formulaire
            submitted = false; // Réinitialisation de la variable de soumission
        }
    </script>
</body>
</html>
