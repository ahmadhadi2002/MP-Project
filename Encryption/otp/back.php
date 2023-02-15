<?php
error_reporting(0);
header('Content-Type: application/json');
$iden = $_REQUEST["iden"];
$tech = $_POST["technique"];
$str = $_POST["str"];
$secret = $_POST["secret"];

global $output_result;

if ($iden === "iden") {
	$str = $_POST["value"];
	identifier($str);
} else if ($tech === "en") {
	$output_result = otp_encrypt($str, $secret);
	$option = $_POST["option"];
	if ($option === "b64") {
		$base64 = base64_encode($output_result);
		$table = display_table_en($str, $secret, $output_result);
		echo json_encode(array("output" => $base64, "table" => $table));
	} elseif ($option === "hex") {
		$hex = bin2hex($output_result);
		$table = display_table_en($str, $secret, $output_result);
		echo json_encode(array("output" => $hex, "table" => $table));
	} else {
		echo " Please check your input/parameter selection again";
	}

} else if ($tech === "de") {
	$option = $_POST["option"];
	if ($option === "b64") {
		$plain = base64_decode($str);
		$output_result = otp_decrypt($plain, $secret);
		$table = display_table_de($plain, $secret, $output_result);
		echo json_encode(array("output" => $output_result, "table" => $table));
	} elseif ($option === "hex") {
		$plain = hex2bin($str);
		$output_result = otp_decrypt($plain, $secret);
		$table = display_table_de($plain, $secret, $output_result);
		echo json_encode(array( "output" => $output_result, "table" => $table));
	} else {
		echo " Please check your input/parameter selection again";
	}
} else {
	echo " Please check your input/parameter selection again";
}



//Encrypt & Decrypt

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

function display_table_en($plaintext, $key, $ciphertext)
{
	$result = "";

	$option = $_POST["option"];
	if ($option === "b64") {
		$ciphertext = "";
		for ($i = 0; $i < strlen($plaintext); $i++) {
			$ciphertext .= chr(ord($plaintext[$i]) ^ ord($key[$i % strlen($key)]));
		}

		$result .= "Encryption Visual Representation (base64):\n";
		$result .= "<table border='1'>";
		$result .= "<tr>";
		$result .= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext</th>";
		$result .= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key</th>";
		$result .= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext </th>";
		$result .= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Base64</th>";
		$result .= "</tr>";

		for ($i = 0; $i < strlen($plaintext); $i++) {
			$plaintextBin = str_pad(decbin(ord($plaintext[$i])), 8, "0", STR_PAD_LEFT);
			$keyBin = str_pad(decbin(ord($key[$i % strlen($key)])), 8, "0", STR_PAD_LEFT);
			$ciphertextBin = str_pad(decbin(ord($ciphertext[$i])), 8, "0", STR_PAD_LEFT);
			$ciphertextBase64 = base64_encode($ciphertext[$i]);
			$ciphertextHex = bin2hex($ciphertext[$i]);

			$result .= "<tr>";
			$result .= "<td>" . $plaintext[$i] . " (" . $plaintextBin . " / " . ord($plaintext[$i]) . ")" . "</td>";
			$result .= "<td>" . $key[$i % strlen($key)] . " (" . $keyBin . " / " . ord($key[$i % strlen($key)]) . ")" . "</td>";
			$result .= "<td>" . $ciphertext[$i] . "(" . $ciphertextBin . " / " . ord($ciphertext[$i]) . ")" . "</td>";
			$result .= "<td>" . $ciphertextBase64 . "</td>";
			$result .= "</tr>";
		}
		$result .= "</table>";

	} elseif ($option === "hex") {
		$ciphertext = "";
		$result .= "Encryption Visual Representation (hex):\n";
		$result .= "<table border='1'>";
		$result .= "<tr>";
		$result .= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext</th>";
		$result .= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key</th>";
		$result .= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext</th>";
		$result .= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Hex</th>";
		$result .= "</tr>";

		for ($i = 0; $i < strlen($plaintext); $i++) {
			$plaintextBin = str_pad(decbin(ord($plaintext[$i])), 8, "0", STR_PAD_LEFT);
			$keyBin = str_pad(decbin(ord($key[$i % strlen($key)])), 8, "0", STR_PAD_LEFT);
			$ciphertextBin = str_pad(decbin(ord($ciphertext[$i])), 8, "0", STR_PAD_LEFT);
			$ciphertextBase64 = base64_encode($ciphertext[$i]);
			$ciphertextHex = bin2hex($ciphertext[$i]);

			$result .= "<tr>";
			$result .= "<td>" . $plaintext[$i] . " (" . $plaintextBin . " / " . ord($plaintext[$i]) . ")" . "</td>";
			$result .= "<td>" . $key[$i % strlen($key)] . " (" . $keyBin . " / " . ord($key[$i % strlen($key)]) . ")" . "</td>";
			$result .= "<td>" . $ciphertext[$i] . "(" . $ciphertextBin . " / " . ord($ciphertext[$i]) . ")" . "</td>";
			$result .= "<td>" . $ciphertextHex . "</td>";
			$result .= "</tr>";
		}

		$result .= "</table>";
	}
	return $result;
}


function display_table_de($ciphertext, $key, $plaintext)
{
	$result = "";
	$option = $_POST["option"];
	if ($option === "b64") {
		//Base64
$result.= "Decryption Visual Representation (base64):\n";
$result.= "<table border='1'>";
$result.= "<tr>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Binary</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Base64</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Binary</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Base64</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>plaintext Binary</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>plaintext Base64</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Character</th>";
$result.= "</tr>";
for ($i = 0; $i < strlen($plaintext); $i++) {
    $ciphertextBin = str_pad(decbin(ord($ciphertext[$i])), 8, "0", STR_PAD_LEFT);
    $ciphertextBase64 = base64_encode($ciphertext[$i]);
    $keyBin = str_pad(decbin(ord($key[$i % strlen($key)])), 8, "0", STR_PAD_LEFT);
    $keyBase64 = base64_encode($key[$i % strlen($key)]);
    $plaintextBin = str_pad(decbin(ord($plaintext[$i])), 8, "0", STR_PAD_LEFT);
    $plaintextBase64 = base64_encode($plaintext[$i]);
    $result.= "<tr>";
    $result.= "<td>" . $ciphertextBin . "</td>";
    $result.= "<td>" . $ciphertextBase64 . "</td>";
    $result.= "<td>" . $keyBin . "</td>";
    $result.= "<td>" . $keyBase64 . "</td>";
    $result.= "<td>" . $plaintextBin . "</td>";
    $result.= "<td>" . $plaintextBase64 . "</td>";
    $result.= "<td>" . $plaintext[$i] . "</td>";
    $result.= "</tr>";
}
$result.= "</table>";
	} elseif ($option === "hex") {
		$result.= "Decryption Visual Representation (hex):\n";
		$result.= "<table border='1'>";
		$result.= "<tr>";
		$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Binary</th>";
		$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Hex</th>";
		$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Binary</th>";
		$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Hex</th>";
		$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>plaintext Binary</th>";
		$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>plaintext Hex</th>";
		$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Character</th>";
		$result.= "</tr>";
		for ($i = 0; $i < strlen($plaintext); $i++) {
			$ciphertextBin = str_pad(decbin(ord($ciphertext[$i])), 8, "0", STR_PAD_LEFT);
			$ciphertextHex = dechex(ord($ciphertext[$i]));
			$keyBin = str_pad(decbin(ord($key[$i % strlen($key)])), 8, "0", STR_PAD_LEFT);
			$keyHex = dechex(ord($key[$i % strlen($key)]));
			$plaintextBin = str_pad(decbin(ord($plaintext[$i])), 8, "0", STR_PAD_LEFT);
			$plaintextHex = dechex(ord($plaintext[$i]));
			$result.= "<tr>";
			$result.= "<td>" . $ciphertextBin . "</td>";
			$result.= "<td>" . $ciphertextHex . "</td>";
			$result.= "<td>" . $keyBin . "</td>";
			$result.= "<td>" . $keyHex . "</td>";
			$result.= "<td>" . $plaintextBin . "</td>";
			$result.= "<td>" . $plaintextHex . "</td>";
			$result.= "<td>" . $plaintext[$i] . "</td>";
			$result.= "</tr>";
		}
		$result.= "</table>";
	}
	return $result;
}

function identifier($str)
{
	$input = $_POST["str"];
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