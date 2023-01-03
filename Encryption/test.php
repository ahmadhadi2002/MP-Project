<?php
$str="test,qwert";
printf($str);
echo "<br>";

echo str_rot13($str);

//ROT13
$plaintext=$_POST['plaintext'];
$ciphertext=$_POST['ciphertext'];


if(isset($plaintext)){
    $ciphertext=str_rot13($plaintext);
}elseif(isset($ciphertext)){
    $plaintext=str_rot13($ciphertext); 
}else{
    echo "please check and ensure that only 1 box is filled";
}

?>