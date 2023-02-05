<?php

if(isset($_POST['scrollInput']) && isset($_POST['charList'])){


    $charList = $_POST['charList'];

    if($charList=="1"){
        $chars = "abcdefghijklmnopqrstuvwxyz";
    }
    if($charList=="2"){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }
    if($charList=="3"){
        $chars ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    }
    if($charList=="4"){
        $chars ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':,.<>/?\`~";
    }

    // echo "<br>-------------TESTING-------------<br>";
    $maxLength = 3;
    $password= $_POST["scrollInput"];  
    $found="false";
    $arrayList = [];
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

    // $file = fopen("../Password Cracking/dictattack_files/lowerCase3.txt", "w");

    foreach (range(1,3) as $i) {
        foreach (generateCombinations($chars, $i) as $combination) {

            // fwrite($file, $combination. PHP_EOL);

            $arrayList[] = $combination;

            if($combination === strval($password)){
                // echo "Password Found: ".$combination."<br>";
                $passFound = $combination;
                $found ="true";
                $passOutput = "Password Found";
            }
        }
    }



    $end = new DateTime();
                $elapsed = $end->diff($start);
                // echo "Elapsed time: " . $elapsed->format('%s.%f seconds')."<br>";
    
                $time = $elapsed->format('%s.%f seconds');

    $decoded = json_encode($arrayList);

    if ($found == "false"){
        $passOutput = "Password Not Found";
    }
}

$package = array('passFound' => $passFound, 'passOutput' => $passOutput, "time" => $time,"scrollList" => $decoded);

echo json_encode($package);
?>