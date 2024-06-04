<?php
// Déclaration de la fonction occurrences() avec deux paramètres
function occurrences($str, $char) {
    // Initialisation du compteur à 0
    $count = 0;

    // Parcours de chaque caractère de $str
    for ($i = 0; $i < strlen($str); $i++) {
        // Vérification si le caractère courant est égal à $char
        if ($str[$i] == $char) {
            // Incrémentation du compteur
            $count++;
        }
    }

    // Retour du nombre total d'occurrences de $char dans $str
    return $count;
}

// Exemple d'utilisation de la fonction occurrences()
$str = "Bonjour";
$char = "o";

// Appel de la fonction avec $str et $char comme arguments
$occurrences = occurrences($str, $char);

// Affichage du nombre d'occurrences de $char dans $str
echo "Le caractère '$char' apparaît $occurrences fois dans la chaîne '$str'.";
?>
