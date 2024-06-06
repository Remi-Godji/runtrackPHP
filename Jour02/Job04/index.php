<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Formulaire POST</h2>

<form action="display_post.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom"><br><br>
    <label for="age">Âge:</label>
    <input type="text" id="age" name="age"><br><br>
    <label for="ville">Ville:</label>
    <input type="text" id="ville" name="ville"><br><br>
    <input type="submit" value="Envoyer">
</form>

<?php include 'display_post.php'; ?>

</body>
</html>
