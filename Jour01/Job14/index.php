<?php
// Fonction pour convertir une chaîne en leet speak
function toLeetSpeak($str) {
    // Tableau de substitutions
    $substitutions = [
        'a' => '4',
        'e' => '3',
        'g' => '9',
        'i' => '1',
        'o' => '0',
        's' => '5',
        'z' => '2'
    ];

    // Conversion de la chaîne en leet speak
    $leetStr = '';
    foreach ($str as $char) {
        // Vérification si le caractère doit être remplacé
        if (array_key_exists($char, $substitutions)) {
            // Remplacement du caractère
            $leetStr.= $substitutions[$char];
        } else {
            // Caractère non remplacé
            $leetStr.= $char;
        }
    }

    // Retour de la chaîne convertie
    return $leetStr;
}

// Exemple d'utilisation de la fonction
$originalString = "Hello World!";
$leetSpeakString = toLeetSpeak($originalString);

// Affichage de la chaîne originale et de la chaîne en leet speak
echo "Original: $originalString<br>";
echo "Leet Speak: $leetSpeakString<br>";
?>
