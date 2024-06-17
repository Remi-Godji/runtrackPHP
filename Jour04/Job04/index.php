<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur se connecte
if (isset($_POST['connexion'])) {
    $prenom = $_POST['prenom'];
    // Créer un cookie pour le prénom
    setcookie('prenom', $prenom, time() + (86400 * 30), "/"); // 86400 = 1 jour
    // Rediriger vers la même page pour actualiser l'affichage
    header("Location: index.php");
    exit();
}

// Vérifier si le prénom est stocké dans le cookie
$prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

<?php if ($prenom): ?>
    <h1>Bonjour <?php echo htmlspecialchars($prenom); ?> !</h1>
    <form action="deco.php" method="post">
        <button type="submit" name="deco">Déconnexion</button>
    </form>
<?php else: ?>
    <h1>Connexion</h1>
    <form action="" method="post">
        <input type="text" name="prenom" required>
        <button type="submit" name="connexion">Connexion</button>
    </form>
<?php endif; ?>

</body>
</html>
