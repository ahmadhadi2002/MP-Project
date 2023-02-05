<?php

if(isset($_POST["passHash"]) && isset($_POST["hashChoice"])){

    $passHash = $_POST["passHash"];

    $hashChoice = $_POST["hashChoice"];

    if ($hashChoice == "1"){
        $hashedVal = md5($passHash);
    }

    if ($hashChoice == "2"){
        $hashedVal = sha1($passHash);
    }

    echo $hashedVal;
}


?>