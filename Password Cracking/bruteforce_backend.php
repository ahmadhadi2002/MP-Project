<?php

if (isset($_POST["brute_input"])){

    echo "<br>-------------TESTING-------------<br>";

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
        foreach (generateCombinations("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789", $i) as $combination) {
            if($combination == $password){
                echo "Password Found: ".$combination."<br>";
                $found ="true";
                // $password="";
                // $_POST["brute_input"] = "";
            }
        }
    }

    $end = new DateTime();
                $elapsed = $end->diff($start);
                echo "Elapsed time: " . $elapsed->format('%s.%f seconds')."<br>";

    if ($found == "false"){
        echo "Password not Found<br>";
    }
}
?>


