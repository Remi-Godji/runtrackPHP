<?php
// Incrémenter le cookie nbVisites à chaque visite
if (isset($_COOKIE['nbVisites'])) {
    $nbVisites = $_COOKIE['nbVisites'] + 1;
} else {
    $nbVisites = 1;
}
setcookie('nbVisites', $nbVisites, time() + 3600 * 24 * 365); // Le cookie expire dans 1 an

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Nombre de visites : <?php echo $nbVisites; ?></h1>
    <form method="post" action="reset.php">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
