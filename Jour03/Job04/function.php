<?php
// Fonction pour appliquer une réduction de 10 % si le prix est supérieur à 100 €
function applyDiscount($price) {
    if ($price > 100) {
        return $price * 0.90; // Applique une réduction de 10 %
    }
    return $price;
}

// Fonction pour générer le tableau des produits
function generateProductTable($products) {
    $html = '<table border="1">';
    $html .= '<tr><th>Nom</th><th>Prix</th><th>Quantité</th><th>Prix après réduction</th></tr>';
    
    foreach ($products as $product) {
        $discountedPrice = applyDiscount($product['price']);
        $html .= '<tr>';
        $html .= '<td>' . htmlspecialchars($product['name']) . '</td>';
        $html .= '<td>' . number_format($product['price'], 2) . ' €</td>';
        $html .= '<td>' . intval($product['quantity']) . '</td>';
        $html .= '<td>' . number_format($discountedPrice, 2) . ' €</td>';
        $html .= '</tr>';
    }
    
    $html .= '</table>';
    return $html;
}
?>
