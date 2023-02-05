<?php

if (isset($_POST["brute_input"])){

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':,.<>/?\`~";
    $maxLength = 5;
    $password=$_POST["brute_input"];  
    $found="false";

    $start = new DateTime();

    function generateCombinations($chars, $length, $password, $found) {
        if ($length == 0) {
            return;
        } else {
            foreach (str_split($chars) as $char) {
                $combination = $char . generateCombinations($chars, $length - 1, $password, $found);
                if ($combination == strval($password)) {
                    $bruteFound = $combination;
                    $found = true;
                    return;
                }
            }
        }
    }
    
    for ($i = 1; $i <= $maxLength; $i++) {
        generateCombinations($chars, $i, $password,$found);
        if ($found) {
            $foundStatus = "Password Found";
            break;
        }
    }

    $end = new DateTime();
                $elapsed = $end->diff($start);
    $bruteTime = $elapsed->format('%s.%f seconds')."<br>";

    if ($found == "false"){
        $foundStatus = "Password not Found";
    }

$brutePackage = array("bruteFound" => $bruteFound, "foundStatus" => $foundStatus, "bruteTime" => $bruteTime);
echo json_encode($brutePackage);
}
?>


