<?php

session_start();

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $balanceAdd = (float)$_POST['balance'];
    
    if ($balanceAdd <= 0) {
        $error_message = "Баланс должен быть больше нуля.";
    } else {
        $_SESSION['balance'] = isset($_SESSION['balance']) ? $_SESSION['balance'] + $balanceAdd : $balanceAdd;
    }

    

    header("Location: balance.php");
exit();
    
}

require_once('balance.html');



