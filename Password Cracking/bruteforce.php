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
                $password="";
                $_POST["brute_input"] = "";
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


<html>
<head>
<style>
</style>
</head>
<body>
<div id="passinputbox">
    <form action="../Password Cracking/bruteforce.php" method="post">
        <label for="brute_input">Password (4 Letter Input Only)</label><br>
        <input type="text" id="brute_input" name="brute_input">

        <br><input type="submit" value="Submit">
    </form>
</div>


</body>
</html>
