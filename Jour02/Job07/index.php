<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de maison</title>
    <style>
        pre {
            font: 1em monospace;
            line-height: 1em;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="largeur">Largeur:</label>
        <input type="number" id="largeur" name="largeur" required>
        <br>
        <label for="hauteur">Hauteur:</label>
        <input type="number" id="hauteur" name="hauteur" required>
        <br>
        <input type="submit" value="Créer la maison">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largeur = intval($_POST['largeur']);
        $hauteur = intval($_POST['hauteur']);
        dessinerMaison($largeur, $hauteur);
    }

    function dessinerMaison($largeur, $hauteur) {
        echo "<pre>";

        // Dessin du toit
        for ($i = 0; $i < 5; $i++) {
            echo str_repeat(" ", 4 - $i);
            echo "/";
            echo str_repeat("_", 2 * $i);
            echo "\\\n";
        }

        // Dessin du corps de la maison
        for ($j = 0; $j < $hauteur; $j++) {
            echo "|";
            echo str_repeat(" ", 9); // Réduire l'espace pour rapprocher la ligne de droite
            echo "|\n";
        }

        // Dessin de la base de la maison
        echo "|";
        echo str_repeat("_", 9); // Réduire la largeur pour correspondre à la modification ci-dessus
        echo "|";

        echo "</pre>";
    }
    ?>
</body>
</html>
