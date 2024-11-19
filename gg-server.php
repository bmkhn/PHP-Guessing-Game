<?php
session_start();

if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand(1, 100);
}

$response = "Make a Guess!";

if (isset($_POST['guess'])) {
    $guess = intval($_POST['guess']);
    $random_number = $_SESSION['random_number'];

    if ($guess > $random_number) {
        $response = "Too high! <button onclick='history.back()'>Try Again</button>";
    } elseif ($guess < $random_number) {
        $response = "Too low! <button onclick='history.back()'>Try Again</button>";
    } else {
        $response = "Correct! The number was $random_number. Game reset.";
        unset($_SESSION['random_number']);
    }
}


if (isset($_POST['reset'])) {
    unset($_SESSION['random_number']);
    $_SESSION['random_number'] = rand(1, 100);
    echo "Game reset. A new number has been generated. <button onclick='history.back()'>Go Back</button>";
    exit;
}


echo $response;
?>
