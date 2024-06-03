
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 01</title>
</head>
<body>
    <?php
    // Créer une variable contenant la chaîne de caractères "LaPlateforme"
    $plateforme = "LaPlateforme";
    // Afficher le contenu de la variable
    echo $plateforme . "<br>";

    // Créer deux autres variables contenant "Vive" et "!"
    $vive = "Vive";
    $exclamation = "!";

    // Afficher "Vive LaPlateforme !" en concaténant les variables
    echo $vive . " " . $plateforme . " " . $exclamation . "<br>";

    // Créer une variable contenant le chiffre 6
    $chiffre = 6;
    // Afficher son contenu
    echo $chiffre . "<br>";

    // Ajouter 4 à la variable et afficher à nouveau le contenu
    $chiffre += 4;
    echo $chiffre . "<br>";

    // Créer une dernière variable et affecter "true"
    $boolean = true;
    // Afficher son contenu
    echo $boolean . "<br>"; // Affichera 1 car true est évalué à 1

    // Affecter "false" et afficher à nouveau le contenu
    $boolean = false;
    echo $boolean . "<br>"; // N'affichera rien car false est évalué à 0
    ?>
</body>
</html>
