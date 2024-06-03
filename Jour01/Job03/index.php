<?php
// Déclaration de variables de types primitifs
$intVar = 42;                // Entier
$floatVar = 3.14;            // Flottant
$stringVar = "Hello, World!"; // Chaîne de caractères
$boolVar = true;             // Booléen
$nullVar = null;             // Null

// Tableau des variables avec leurs types, noms et valeurs
$variables = [
    ["type" => "Entier", "nom" => "\$intVar", "valeur" => $intVar],
    ["type" => "Flottant", "nom" => "\$floatVar", "valeur" => $floatVar],
    ["type" => "Chaîne de caractères", "nom" => "\$stringVar", "valeur" => $stringVar],
    ["type" => "Booléen", "nom" => "\$boolVar", "valeur" => $boolVar ? 'true' : 'false'],
    ["type" => "Null", "nom" => "\$nullVar", "valeur" => "null"]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Variables</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <h2>Tableau des Variables</h2>
        <table class="striped">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($variables as $variable): ?>
                    <tr>
                        <td><?php echo $variable["type"]; ?></td>
                        <td><?php echo $variable["nom"]; ?></td>
                        <td><?php echo $variable["valeur"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
