<?php

$file = fopen("../Password Cracking/rainbow_files/sha1hash/sha1com.txt", "r");
$new_file = fopen("../Password Cracking/rainbow_files/sha1hash/newsha1com.txt", "w");

while (!feof($file)) {
    $line = fgets($file);
    $new_line = str_replace("=>", "\": \"", $line);
    $new_line = "\"" . trim($new_line) . "\"";
    fwrite($new_file, $new_line .",");
}

fclose($file);
fclose($new_file);

?>