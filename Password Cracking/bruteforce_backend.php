<?php

if (isset($_POST["brute_input"])){

    $chars = <<<EOD
abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:'",.<>/?\\~
EOD;
    $maxLength = 4;
    $password=$_POST["brute_input"];  
    $found="false";

    $start = new DateTime();

    function generateCombinations($chars, $length) {
        if ($length == 0) {
            yield "";
        } else {
            foreach (str_split($chars) as $char) {
                foreach (generateCombinations($chars, $length - 1) as $combination) {
                    yield $char . $combination;
                }
            }
        }
    }

    foreach (range(1,$maxLength) as $i) {
        foreach (generateCombinations($chars, $i) as $combination) {
            if($combination == strval($password)){
                $bruteFound = $combination;
                unset($combination);
                unset($password);
                $found ="true";
                $foundStatus  ="Password Found";
                break 2;
            }
            unset($combination);
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


