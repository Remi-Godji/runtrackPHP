<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat de Vérification</title>
</head>
<body>

<h2>Résultat de Vérification</h2>

<?php
// Vérifie si le paramètre 'nombre' est présent dans l'URL
if (isset($_GET['nombre'])) {
    // Récupère la valeur entrée dans le champ 'nombre'
    $nombre = $_GET['nombre'];

    // Vérifie si la valeur est un nombre
    if (is_numeric($nombre)) {
        // Vérifie si le nombre est pair ou impair
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
} else {
    echo "Veuillez entrer un nombre dans le champ.";
}
?>

</body>
</html>
