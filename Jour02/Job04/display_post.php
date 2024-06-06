<?php
// Vérifie si des données POST ont été soumises
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Vérifie si des arguments POST ont été envoyés
    if (!empty($_POST)) {
        echo '<h2>Tableau des Arguments $_POST</h2>';
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        // Parcours des arguments $_POST
        foreach ($_POST as $key => $value) {
            echo '<tr>';
            // Affichage de la clé (nom de l'argument)
            echo '<td>' . htmlspecialchars($key) . '</td>';
            // Affichage de la valeur associée à l'argument
            echo '<td>' . htmlspecialchars($value) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        // Si aucun argument POST n'a été envoyé
        echo '<p>Aucun argument POST n\'a été passé dans le formulaire.</p>';
    }
} else {
    // Si le formulaire n'a pas encore été soumis
    echo '<p>Veuillez soumettre le formulaire.</p>';
}
?>
