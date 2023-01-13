<?php

if ($str)
echo "<!DOCTYPE html>
<html>
<body>

<h1>Encryption & Decryption Low-Fi</h1>

<form action='./caesar_cipher.php' method='post'>
<table border size >
  <tr>
    <td>
        <p>Plaintext</p>
        <input type='text' id='Plaintext' name='Plaintext' value=plaintext><br><br>
    </td>
    <td>  
        <input type='radio' id='html' name='action' value='Encrypt'>
            <label for='Encrypt'>Encrypt</label><br>
        <input type='radio' id='html' name='action' value='Decrypt'>
            <label for='Decrypt'>Decrypt</label><br>
    <td>
        <p>Ciphertext</p>
        <input type='text' id='Ciphertext' name='Ciphertext' value=Ciphertext><br><br>
    </td>
  </tr>
  <tr>
    <td>
    Shift Key:
    </td>
  	<td colspan=2>
    <input type='text' id='shift_key' name='shift_key' value=amount>
    </td>
   </tr>
  <tr>
  	<td colspan=3>
    <input type='submit' value='Submit' text-align: center;>
    </td>
   </tr>
</table>
</form>

</body>
</html>

";

$str=$_POST['plaintext'];
$Ciphertext=$_POST['Ciphertext'];
$amount=$_POST['amount'];


global $forward;
global $backwards;
function caesarCipher($str, $amount) {
    $output = [];
	$output1 = [];

	if ($amount < 0) {
		return caesarCipher($str, $amount + 26);
	}
	
    //Caesar Cipher - Shift Forwards
	for ($i = 0; $i < strlen($str); $i++) {
		$c = $str[$i];
		if (preg_match("/[a-z]/i", $c)) {
			$code = ord($str[$i]);
			if ($code >= 65 && $code <= 90) {
				$c = chr((($code - 65 + $amount) % 26) + 65);
			} elseif ($code >= 97 && $code <= 122) {
				$c = chr((($code - 97 + $amount) % 26) + 97);
			}
		}
        $output[]=$c;
	}
    $forward=implode('', $output);
	unset($output);
	$output1["foward $amount"]=$forward ;

    //Caesar Cipher - Shift Backwards
    for ($i = 0; $i < strlen($str); $i++) {
        $c = $str[$i];
		if (preg_match("/[a-z]/i", $c)) {
			$code = ord($str[$i]);
			if ($code >= 65 && $code <= 90) {
                $c = chr((($code - 65 - $amount) % 26) + 65);
			} elseif ($code >= 97 && $code <= 122) {
                $c = chr((($code - 97 - $amount) % 26) + 97);
			}
		}
        $output[]=$c;
	}
    $backwards=implode('', $output);
	$output1["Backward $amount"]=$backwards;
	$a=implode(' ', $output1);
	
}



if (isset($_POST['action'])){
if ($_POST['action']==='Encrypt'){
    $str=$_POST['Plaintext'];
    $amount=$_POST['shift_key'];
    echo CaesarCipher($str, $amount);
    $cipher=CaesarCipher($str, $amount);
    echo "test: $cipher";
}


}
?>
