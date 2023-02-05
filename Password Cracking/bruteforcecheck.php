<?php

if (isset($_POST["brute_input"])){

    echo "<br>-------------TESTING-------------<br>";

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    // $maxLength = 5;
    $password=$_POST["brute_input"];  
    $foundStatus = "Password Not Found";
    $found = "false";

    $start = new DateTime();
    
    for ($length = 1; $length <= 4; $length++) {
      for ($j = 0; $j <= strlen($chars) - $length; $j++) {
        $combination = substr($chars, $j, $length);
        if ($combination === $password) {
          echo "Password: $combination<br>".
          $found = "true";
          $foundStatus = "Password Found<br>";
          unset($combination);
          break 2;
        }
        unset($combination);
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
    <form action="../Password Cracking/bruteforcecheck.php" method="post">
        <label for="brute_input">Password (4 Letter Input Only)</label><br>
        <input type="text" id="brute_input" name="brute_input">

        <br><input type="submit" value="Submit">
    </form>
</div>


</body>
</html>
