<?php
// Vérifie si des arguments ont été transmis via GET
if ($_GET) {
    // Compte le nombre d'arguments dans $_GET
    $num_arguments = count($_GET);
    
    // Affiche le nombre d'arguments
    echo "Le formulaire contient " . $num_arguments . " argument(s) GET.";
} else {
    // Affiche un message si aucun argument n'a été transmis
    echo "Aucun argument GET n'a été transmis.";
}
?>
