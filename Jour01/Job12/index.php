<?php
// Déclaration de la fonction calcule() avec trois paramètres
function calcule(float $a, string $operation, float $b) {
    // Traitement de l'opération à effectuer
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b!= 0) {
                return $a / $b;
            } else {
                throw new Exception("Division par zéro");
            }
        case '%':
            if ($b!= 0) {
                return $a % $b;
            } else {
                throw new Exception("Modulo par zéro");
            }
        default:
            throw new Exception("Opération inconnue");
    }
}

// Exemples d'utilisation de la fonction calcule()
try {
    echo calcule(10, '+', 5). "<br>"; // Affiche 15
    echo calcule(10, '-', 5). "<br>"; // Affiche 5
    echo calcule(10, '*', 5). "<br>"; // Affiche 50
    echo calcule(10, '/', 5). "<br>"; // Affiche 2
    echo calcule(10, '%', 5). "<br>"; // Affiche 0
} catch (Exception $e) {
    echo "Erreur : ". $e->getMessage(). "<br>";
}
?>
