<?php

$hashOption = "1";

if($hashOption == "1"){
    // $inputHash = md5($hashInput);
    $inputFolderPath = '../Password Cracking/rainbow_files/md5hash';
    echo "Md5";
}

if($hashOption == "2"){
    // $inputHash = sha1($hashInput);
    $inputFolderPath = '../Password Cracking/rainbow_files/sha1hash';
    echo "Sha1";
}


echo $inputFolderPath;
$files = scandir($inputFolderPath);

?>