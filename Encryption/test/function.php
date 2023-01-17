<?php
$str="test,qwert";
$amount=3;

//echo $_POST['submit'];

printf($str);
echo "<br>";
echo $amount;
echo "<br>";

echo caesarCipher($str, $amount);

//echo $forward;
//echo $backwards;


function caesarCipher($str, $amount) {
    global $forward;
    global $backwards;
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
	echo $a;
}

//Caesar Cipher Bruteforce 
function caesarDecryptBF($str){
    global $forward;
    global $backwards;
    $output = [];
    $output1 = [];
    for ($amount = 1; $amount < 26; $amount++) {
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
    }
    print_r($output1);
}


//ROT13
//$plaintext=$_POST['plaintext'];
//$ciphertext=$_POST['ciphertext'];


if(isset($plaintext)){
    $ciphertext=str_rot13($plaintext);
}elseif(isset($ciphertext)){
    $plaintext=str_rot13($ciphertext); 
}else{
    echo "please check and ensure that only 1 box is filled";
}

//Vigenere Cipher
// The key for encoding and decoding the message
$key = 'secret';

// The message to be encoded
$message = 'Hello, World!';

// Encode the message using the Vigenère cipher
$encodedMessage = '';
for ($i = 0, $j = 0; $i < strlen($message); $i++) {
    $encodedMessage .= chr(ord($message[$i]) + ord($key[$j]) % 26);
    $j = ($j + 1) % strlen($key);
}

echo "Encoded message: $encodedMessage\n";

// Decode the message using the Vigenère cipher
$decodedMessage = '';
for ($i = 0, $j = 0; $i < strlen($encodedMessage); $i++) {
    $decodedMessage .= chr(ord($encodedMessage[$i]) - ord($key[$j]) % 26);
    $j = ($j + 1) % strlen($key);
}

echo "Decoded message: $decodedMessage\n";

?>