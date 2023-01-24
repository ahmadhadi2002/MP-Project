<?php

if (isset($_POST["brute_input"])){

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
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

    foreach (range(1,4) as $i) {
        foreach (generateCombinations($chars, $i) as $combination) {
            if($combination == strval($password)){
                // echo "Password Found: ".$combination."<br>";
                $bruteFound = $combination;
                $found ="true";
                $foundStatus  ="Password Found";
            }
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


