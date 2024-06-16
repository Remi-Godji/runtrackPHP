<?php
session_start();

// Si le bouton reset est cliqué, réinitialiser le compteur
if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
}

// Rediriger vers index.php pour afficher le compteur mis à jour
header('Location: index.php');
exit();
?>

