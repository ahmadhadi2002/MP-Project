<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $myArray = json_decode(file_get_contents('php://input'), true);
        $_SESSION['myArray'] = $myArray;
        file_put_contents('my_array.txt', json_encode($myArray));
    }
?>