<?php
session_start();
require_once("index.html");



/*session_start();

// Инициализация баланса при первом запуске ////////////////////////////////////////////
if (!isset($_SESSION['balance'])) {
    $_SESSION['balance'] = 0;
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['set_balance'])) {
        // Установить баланс
        $_SESSION['balance'] = (float)$_POST['balance'];
    } elseif (isset($_POST['play'])) {
        // Игровой процесс
        $game = $_POST['game'];
        $bet = (float)$_POST['bet'];

        if ($bet > 0 && $bet <= $_SESSION['balance']) {
            // Определение шанса выигрыша в зависимости от игры
            $winChance = getWinChance($game);
            $isWin = (mt_rand(0, 100) < $winChance); // Определение выигрыша

            // Вычисление результата
            if ($isWin) {
                $winningAmount = $bet * 2; // Условный выигрыш (2x ставку)
                $_SESSION['balance'] += $winningAmount;
                logGame($game, 'выиграл', $winningAmount);
            } else {
                $_SESSION['balance'] -= $bet;
                logGame($game, 'проиграл', $bet);
            }
        } else {
            echo "Ставка должна быть больше нуля и не превышать Ваш баланс.";
        }
    }
}

// Функция для получения шанса выигрыша /////////////////////////////////////////////////////////
function getWinChance($game) {
    switch ($game) {
        case 'game1':
            return 50; // 50% шанс выигрыша
        case 'game2':
            return 30; // 30% шанс выигрыша
        case 'game3':
            return 20; // 20% шанс выигрыша
        default:
            return 0;
    }
}

// Функция для логирования игры /////////////////////////////////////////
function logGame($game, $status, $amount) {
    $balance = $_SESSION['balance'];
    $date = date('Y-m-d H:i:s');
    $logEntry = "$date $status $amount $balance" . PHP_EOL;
    file_put_contents('game_log.txt', $logEntry, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Казино</title>
</head>
<body>
    <h1>Казино</h1>
    <form method="post">
        <label for="balance">Введите начальный баланс:</label>
        <input type="number" name="balance" id="balance" required>
        <button type="submit" name="set_balance">Установить баланс</button>
    </form>

    <h2>Баланс: <?= $_SESSION['balance'] ?></h2>

    <form method="post">
        <label for="game">Выберите игру:</label>
        <select name="game" id="game" required>
            <option value="game1">Игра 1</option>
            <option value="game2">Игра 2</option>
            <option value="game3">Игра 3</option>
        </select>

        <label for="bet">Введите ставку:</label>
        <input type="number" name="bet" id="bet" required>

        <button type="submit" name="play">Сыграть</button>
    </form>
</body>
</html> */

