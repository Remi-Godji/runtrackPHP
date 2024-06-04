<?php
// Boucle pour parcourir les nombres de 1 à 100
for ($i = 1; $i <= 100; $i++) {
    // Initialisation d'une variable pour stocker la sortie
    $output = '';

    // Vérification si le nombre est un multiple de 3
    if ($i % 3 == 0) {
        $output.= 'Fizz';
    }

    // Vérification si le nombre est un multiple de 5
    if ($i % 5 == 0) {
        $output.= 'Buzz';
    }

    // Si aucune condition ci-dessus n'est vraie, afficher simplement le nombre
    if ($output == '') {
        $output = $i;
    }

    // Afficher la sortie suivie d'un saut de ligne
    echo $output. "\n";
}
?>

