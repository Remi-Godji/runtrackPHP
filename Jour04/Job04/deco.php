<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur se déconnecte
if (isset($_POST['deco'])) {
    // Supprimer le cookie en le définissant avec une date d'expiration passée
    setcookie('prenom', '', time() - 3600, "/");
    // Rediriger vers la page principale pour actualiser l'affichage
    header("Location: index.php");
    exit();
}
