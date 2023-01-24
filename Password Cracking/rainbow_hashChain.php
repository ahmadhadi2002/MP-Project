<?php

if(isset($_POST["chainHash"]) && isset($_POST["chainChoice"])){

    $passHash = $_POST["chainHash"];
    $hashChoice = $_POST["chainChoice"];
    $iterations = 50;
    $chainArray = [];


    if ($hashChoice == "1"){
        $hashedVal = md5($passHash);
            for ($i = 0; $i < $iterations; $i++) {
                $reduced = substr($hashedVal, 0, 8);
                $hashedVal = md5($reduced);
                echo "Iteration $i: Hash = $hashedVal , Reduced = $reduced <br>";
            }
    }

    if ($hashChoice == "2"){
        $hashedVal = sha1($passHash);

        for ($i = 0; $i < $iterations; $i++) {
            $reduced = substr($hashedVal, 0, 8);
            $hashedVal = sha1($reduced);
            echo "Iteration $i: Hash = $hashedVal , Reduced = $reduced <br>";
        }
    }

}

?>