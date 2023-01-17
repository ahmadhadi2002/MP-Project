<?php

$words = array("apple", "banana", "cherry", "date");
$count = count($words);
$i = 0;
// while ($i < $count - 1) {
//     $words[$i] = $words[$i + 1];
//     echo $words[$i] . "<br>";
//     $i++;
// }

foreach($words as $word){
    echo $word."<br>";
}

?>