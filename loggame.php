<?

function logGame($game, $status, $amount ) {
    $balance = $_SESSION['balance'];
    $date = date('Y-m-d H:i:s');
    $logEntry = [
        'date' => $date,
        'game' => $game,
        'status' => $status,
        'amount' => $amount,
        'balance' => $balance
    ];

    $logFile = 'game_log.json';
    if (file_exists($logFile)) {
        $currentLogs = json_decode(file_get_contents($logFile), true);
    } else {
        $currentLogs = [];
    }

    $currentLogs[] = $logEntry;

    file_put_contents($logFile, json_encode($currentLogs, JSON_PRETTY_PRINT));
}