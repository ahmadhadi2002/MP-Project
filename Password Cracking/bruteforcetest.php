<?php

$password = "c"; //the password you are trying to crack
$possibleChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; //possible characters in the password

$start = new DateTime();

function bruteForce($password, $possibleChars) {
    $found = false;
    $passwordLength = strlen($password); //the length of the password
    $totalCombinations = pow(strlen($possibleChars), $passwordLength); //total number of possible combinations

    for($i = 0; $i < $totalCombinations; $i++) {
        $attempt = "";
        for($j = 0; $j < $passwordLength; $j++) {
            $attempt .= $possibleChars[$i % strlen($possibleChars)];
            $i /= strlen($possibleChars);
        }
        if($attempt == $password) {
            $found = true;
            echo "The password is: " . $attempt."<br>";
            break;
        }
    }
    if(!$found) {
        echo "Sorry, the password could not be found.";
    }
}

bruteForce($password, $possibleChars);

$end = new DateTime();
$elapsed = $end->diff($start);
echo "Elapsed time: " . $elapsed->format('%s.%f seconds');

?>