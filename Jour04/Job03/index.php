<?php
session_start();

// Ajouter un prénom à la session
if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
    $_SESSION['prenoms'][] = $prenom;
}

// Afficher les prénoms stockés dans la session
$prenoms = isset($_SESSION['prenoms']) ? $_SESSION['prenoms'] : [];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Prénoms</title>
</head>
<body>

    <h1>Ajouter un prénom</h1>
    <form action="" method="post">
        <input type="text" name="prenom" required>
        <button type="submit">Ajouter</button>
    </form>

    <h2>Liste des prénoms</h2>
    <ul>
        <?php foreach ($prenoms as $p): ?>
            <li><?php echo htmlspecialchars($p); ?></li>
        <?php endforeach; ?>
    </ul>

    <form action="reset.php" method="post">
        <button type="submit">Réinitialiser</button>
    </form>

</body>
</html>
