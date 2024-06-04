<?php
// Déclaration de la fonction bonjour() avec un paramètre booléen $jour
function bonjour(bool $jour) {
    // Vérification de la valeur de $jour
    if ($jour === true) {
        // Affichage de "Bonjour" si $jour est true
        echo "Bonjour";
    } else {
        // Affichage de "Bonsoir" si $jour est false
        echo "Bonsoir";
    }
}

// Appels de la fonction bonjour() avec différents arguments
bonjour(true); // Affiche "Bonjour"
echo "<br>"; // Saut de ligne pour une meilleure lisibilité dans le navigateur
bonjour(false); // Affiche "Bonsoir"
?>
