<?php
session_start();

// Initialisation de la grille
if (!isset($_SESSION['grid'])) {
    reset_game();
}

// Réinitialiser le jeu
if (isset($_POST['reset'])) {
    reset_game();
    header("Location: morpion.php");
    exit();
}

// Gestion des clics sur les cases
if (isset($_POST['cell'])) {
    $cell = $_POST['cell'];
    $player = $_SESSION['player'];

    // Marquer la case si elle est vide
    if ($_SESSION['grid'][$cell] === '-') {
        $_SESSION['grid'][$cell] = $player;
        // Vérifier s'il y a un gagnant ou un match nul
        if (check_winner($_SESSION['grid'], $player)) {
            $_SESSION['message'] = "$player a gagné!";
            reset_game(false);
        } elseif (check_draw($_SESSION['grid'])) {
            $_SESSION['message'] = "Match nul!";
            reset_game(false);
        } else {
            // Changer de joueur
            $_SESSION['player'] = $player === 'X' ? 'O' : 'X';
        }
    }
}

// Réinitialiser la grille de jeu
function reset_game($clear_message = true) {
    $_SESSION['grid'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
    if ($clear_message) {
        $_SESSION['message'] = '';
    }
}

// Vérifier s'il y a un gagnant
function check_winner($grid, $player) {
    $winning_combinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Lignes
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Colonnes
        [0, 4, 8], [2, 4, 6]             // Diagonales
    ];

    foreach ($winning_combinations as $combination) {
        if ($grid[$combination[0]] === $player && $grid[$combination[1]] === $player && $grid[$combination[2]] === $player) {
            return true;
        }
    }
    return false;
}

// Vérifier s'il y a un match nul
function check_draw($grid) {
    return !in_array('-', $grid);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 60px;
            height: 60px;
            text-align: center;
            vertical-align: middle;
            font-size: 24px;
        }
        .cell-button {
            width: 100%;
            height: 100%;
            font-size: 24px;
        }
        .message {
            text-align: center;
            font-size: 24px;
            margin: 20px;
        }
        .reset-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="message">
    <?php echo $_SESSION['message']; ?>
</div>

<form method="post">
    <table border="1">
        <?php for ($i = 0; $i < 3; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 3; $j++): ?>
                    <?php $index = $i * 3 + $j; ?>
                    <td>
                        <button class="cell-button" type="submit" name="cell" value="<?php echo $index; ?>">
                            <?php echo $_SESSION['grid'][$index]; ?>
                        </button>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <button class="reset-button" type="submit" name="reset">Réinitialiser la partie</button>
</form>

</body>
</html>
