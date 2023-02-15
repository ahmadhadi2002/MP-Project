<?php
function otp_encrypt($plaintext, $key)
{
	$ciphertext = '';
	for ($i = 0; $i < strlen($plaintext); $i++) {
		$ciphertext .= $plaintext[$i] ^ $key[$i % strlen($key)];
	}
	return $ciphertext;
}

function otp_decrypt($ciphertext, $key)
{
	$plaintext = '';
	for ($i = 0; $i < strlen($ciphertext); $i++) {
		$plaintext .= $ciphertext[$i] ^ $key[$i % strlen($key)];
	}
	return $plaintext;
}

$key = 'test';
$plaintext = 'test';

// Encrypt the plaintext
$ciphertext = otp_encrypt($plaintext, $key);
echo 'Ciphertext: ' . bin2hex($ciphertext) . "\n";

// Decrypt the ciphertext
$decrypted_plaintext = otp_decrypt($ciphertext, $key);
echo 'Decrypted plaintext: ' . $decrypted_plaintext . "\n";



?>