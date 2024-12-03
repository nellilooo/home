<?
session_start();

require_once("gamechange.php");
require_once("loggame.php");

if (isset($_POST['game'])) {
    $_SESSION['current_game'] = $_POST['game'];
}

if (isset($_POST['play'])) {
    $bet = isset($_POST['bet']) ? (float)$_POST['bet'] : 0;
    $balance = isset($_SESSION['balance']) ? $_SESSION['balance'] : 0;

    if ($bet <= 0) {
        $error_message = "Ставка должна быть больше нуля.";
    } elseif ($bet > $balance) {
        $error_message = "Ставка не может превышать Ваш баланс.";
    } else {
        $game = isset($_SESSION['current_game']) ? $_SESSION['current_game'] : 'game';

        $winChance = getWinChance($game);
        if (rand(1,100) <= $winChance) {
            $result = "Выигрыш";
            $_SESSION['balance'] += $bet;
            logGame($game, 'win', $bet);
        } else {
            $result = "Проигрыш";
            $_SESSION['balance'] -= $bet;
            logGame($game, 'lose', $bet);
        }
    }

    
}

require_once ("playgame.html");

