<?php
// Boucle pour parcourir les nombres de 0 à 100
for ($i = 0; $i <= 100; $i++) {
    // Vérification si le nombre est 42 pour afficher "La Plateforme_"
    if ($i == 42) {
        echo "<p>La Plateforme_</p><br>";
    } else {
        // Vérification si le nombre est entre 0 et 20 pour l'afficher en italique
        if ($i >= 0 && $i <= 20) {
            echo "<p style='font-style: italic;'>$i</p><br>";
        }
        // Vérification si le nombre est entre 25 et 50 pour le souligner
        elseif ($i >= 25 && $i <= 50) {
            echo "<p style='text-decoration: underline;'>$i</p><br>";
        }
        // Pour tous les autres nombres, affichage normal
        else {
            echo "<p>$i</p><br>";
        }
    }
}
?>
