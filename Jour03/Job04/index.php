<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Produits</title>
</head>
<body>

<h2>Liste des Produits</h2>

<?php
include 'function.php';

// Liste des produits
$products = [
    ['name' => 'Produit A', 'price' => 120, 'quantity' => 2],
    ['name' => 'Produit B', 'price' => 80, 'quantity' => 5],
    ['name' => 'Produit C', 'price' => 150, 'quantity' => 1],
    ['name' => 'Produit D', 'price' => 200, 'quantity' => 10]
];

// Génère et affiche le tableau des produits
echo generateProductTable($products);
?>

</body>
</html>
