<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des nombres</title>
</head>
<body>
    <?php
    // Tableau des nombres à exclure
    $exclusions = [26, 37, 88, 1111];

    // Boucle pour afficher les nombres de 0 à 1337
    for ($i = 0; $i <= 1337; $i++) {
        // Vérifie si le nombre est dans le tableau des exclusions
        if (!in_array($i, $exclusions)) {
            echo "$i<br>";
        }
    }
    ?>
</body>
</html>
