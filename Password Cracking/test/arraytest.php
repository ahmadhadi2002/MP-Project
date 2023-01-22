<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $myArray = json_decode(file_get_contents('php://input'), true);
        $_SESSION['myArray'] = $myArray;
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo json_encode($_SESSION['myArray']);
    }
?>