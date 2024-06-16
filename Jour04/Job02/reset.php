<?php
if (isset($_POST['reset'])) {
    // Réinitialiser le cookie en le supprimant
    setcookie('nbVisites', '', time() - 3600);
}

// Rediriger vers index.php pour afficher le compteur mis à jour
header('Location: index.php');
exit();
?>
