<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!empty($_GET)) {
    echo '<table>';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';
    foreach ($_GET as $key => $value) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($key) . '</td>';
        echo '<td>' . htmlspecialchars($value) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<p>Aucun argument GET n\'a été passé dans l\'URL.</p>';
}
?>
