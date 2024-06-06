<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat de Connexion</title>
</head>
<body>

<h2>Résultat de Connexion</h2>

<?php
// Vérifie si des données POST ont été soumises
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Vérifie si les champs username et password sont définis et non vides
    if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        // Récupère les valeurs soumises
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Vérifie les identifiants
        if ($username === "John" && $password === "Rambo") {
            echo "Ce n'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    } else {
        // Si les champs sont vides ou non définis
        echo "Veuillez saisir un nom d'utilisateur et un mot de passe.";
    }
} else {
    // Si le formulaire n'a pas encore été soumis
    echo "Veuillez soumettre le formulaire de connexion.";
}
?>

</body>
</html>
