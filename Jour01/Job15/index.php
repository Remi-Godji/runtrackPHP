<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Transformation</title>
</head>
<body>

<form action="" method="post">
    <label for="texte">Texte :</label><br>
    <input type="text" id="texte" name="texte"><br>
    
    <label for="operation">Opération :</label><br>
    <select id="operation" name="operation">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select><br>
    
    <input type="submit" value="Valider">
</form>

<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texte = $_POST['texte'];
    $operation = $_POST['operation'];

    function rendre_gras($texte) {
        global $texte;
        // Utilisation de la fonction explode() pour diviser le texte en mots
        $mots = explode(" ", $texte);
        $texteModifie = "";
        foreach ($mots as $mot) {
            // Vérification si le mot commence par une majuscule
            if (ctype_upper(substr($mot, 0, 1))) {
                // Enveloppement du mot avec des tags <strong> pour le mettre en gras
                $texteModifie.= '<strong>'. $mot. '</strong> ';
            } else {
                $texteModifie.= $mot. ' ';
            }
        }
        return nl2br(str_replace("\n", "<br>", $texteModifie));
    }
    

    // Fonction pour appliquer le décalage César
    function decalage_cesar($texte, $decalage = 2) {
        global $texte;
        $resultat = '';
        for ($i = 0; $i < strlen($texte); $i++) {
            $code = ord(substr($texte, $i, 1)) + $decalage;
            if (ord(substr($texte, $i, 1)) >= ord('A') && ord(substr($texte, $i, 1)) <= ord('Z')) {
                if ($code > ord('Z')) $code -= 26;
                else if ($code < ord('A')) $code += 26;
            } elseif (ord(substr($texte, $i, 1)) >= ord('a') && ord(substr($texte, $i, 1)) <= ord('z')) {
                if ($code > ord('z')) $code -= 26;
                else if ($code < ord('a')) $code += 26;
            }
            $resultat.= chr($code);
        }
        return $resultat;
    }

    // Fonction pour remplacer "_me" par "_"
    function remplacer_plateforme($texte) {
        global $texte;
        return preg_replace('/\bme\b/', '_', $texte);
    }

    switch ($operation) {
        case 'gras':
            echo rendre_gras($texte);
            break;
        case 'cesar':
            echo decalage_cesar($texte);
            break;
        case 'plateforme':
            echo remplacer_plateforme($texte);
            break;
        default:
            echo "Aucune opération sélectionnée.";
    }
}
?>

</body>
</html>
