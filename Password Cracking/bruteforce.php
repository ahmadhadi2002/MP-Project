<?php

$password = "ab"; //the password to be cracked
$charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; //the characters to use in the guessing
$passwordLength = 8; //the maximum length of the password

$start = new DateTime();

for ($i = 1; $i <= $passwordLength; $i++) {
    $passwords = buildPasswords($i, $charset);
    foreach ($passwords as $guess) {
        if (password_verify($guess, $password)) {
            echo "The password is: " . $guess;
            exit;
        }
    }
}
echo "Password not found";

$end = new DateTime();
$elapsed = $end->diff($start);
echo "Elapsed time: " . $elapsed->format('%s.%f seconds');

function buildPasswords($length, $charset) {
    $passwords = array();
    $temp = array();
    for ($i = 0; $i < $length; $i++) {
        $temp[] = 0;
    }
    while (!isMax($temp, strlen($charset) - 1)) {
        $passwords[] = toString($temp, $charset);
        $temp = increment($temp, strlen($charset) - 1);
    }
    $passwords[] = toString($temp, $charset);
    return $passwords;
}

function isMax($array, $maxValue) {
    for ($i = count($array) - 1; $i >= 0; $i--) {
        if ($array[$i] != $maxValue) {
            return false;
        }
    }
    return true;
}

function increment($array, $maxValue) {
    $array[count($array) - 1]++;
    for ($i = count($array) - 1; $i >= 0; $i--) {
        if ($array[$i] > $maxValue) {
            $array[$i] = 0;
            if (isset($array[$i - 1])) {
                $array[$i - 1]++;
            }
        } else {
            break;
        }
    }
    return $array;
}

function toString($array, $charset) {
    $string = "";
    for ($i = 0; $i < count($array); $i++) {
        $string .= $charset[$array[$i]];
    }
    return $string;

}
