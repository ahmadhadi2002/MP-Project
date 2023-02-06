<?php
error_reporting(0);

$tech = $_REQUEST["technique"];
$str = $_REQUEST["str"];

global $output_result;

if ($tech === "iden") {
	identifier($str);
} else if ($tech === "en") {
	$output_result = aes_function($str, $tech);
	echo "PLain: $output_result";
	$option = $_REQUEST["option"];
	if ($option === "b64") {
		$base64 = base64_encode($output_result);
		echo "b64: $base64";
	} elseif ($option === "hex") {
		$hex = bin2hex($output_result);
		echo $hex;
	} elseif ($option === "text") {
		echo $output_result;
	} else {
		echo " Please check your input/parameter selection again";
	}
} else if ($tech === "de") {
	$option = $_REQUEST["option"];
	if ($option === "b64") {
		$plain = base64_decode($str);
	} elseif ($option === "hex") {
		$plain = hex2bin($str);
	} elseif ($option === "text") {
		$plain = $str;
	} else {
		echo " Please check your input/parameter selection again";
	}
	$output_result = aes_function($plain, $tech);
	echo "$output_result";
} else {
	echo " Please check your input/parameter selection again";
}



//Encrypt & Decrypt
function aes_function($str, $tech)
{
	$plaintext = $str;
	$key = $_REQUEST["key"];
	$mode = $_REQUEST["mode"];
	$iv = $_REQUEST["iv"];
	$secret = $_REQUEST["secret"];

	if ($tech === "en") {
		if (!empty($iv) || !empty($secret)) {
			$output_result = openssl_encrypt($plaintext, "aes-$key-$mode", $secret, 0, $iv);
		} else {
			$output_result = openssl_encrypt($plaintext, "aes-$key-$mode", null);
		}
	} else if ($tech === "de") {
		if (!empty($iv) || !empty($secret)) {
			$output_result = openssl_decrypt($plaintext, "aes-$key-$mode", $secret, 0, $iv);
		} else {
			$output_result = openssl_decrypt($plaintext, "aes-$key-$mode", null);
		}
	}
	return $output_result;
}

function identifier($str)
{
	$input = $_REQUEST["str"];
	if (base64_decode($input, true) !== false) {
		if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $input)) {
			echo "The string is plaintext.";
		} else {
			echo "Input is base64 encoded.";
		}
	} elseif (hex2bin($input) !== false) {
		echo "Input is hex encoded.";
	} else {
		echo "The string is plaintext.";
	}
}
?>