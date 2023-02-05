<?php

if(isset($_POST["chainHash"]) && isset($_POST["chainChoice"])){

    $passHash = $_POST["chainHash"];
    $hashChoice = $_POST["chainChoice"];
    $iterations = 20;
    $chainArray = [];
    $iteration = [];
    $hashedList = [];
    $plaintext = [];


    if ($hashChoice == "1"){
        $hashedVal = md5($passHash);
        $results = array();
            for ($i = 0; $i < $iterations; $i++) {
                $reduced = substr($hashedVal, 0, 8);
                $hashedVal = md5($reduced);
                $result = array($i+1 => array($hashedVal, $reduced));
                $results[] = $result;
            }
    }

    if ($hashChoice == "2"){
        $hashedVal = sha1($passHash);

        for ($i = 0; $i < $iterations; $i++) {
            $reduced = substr($hashedVal, 0, 8);
            $hashedVal = sha1($reduced);
            $result = array($i+1 => array($hashedVal, $reduced));
            $results[] = $result;
        }
    }

    echo json_encode($results);

}

?>