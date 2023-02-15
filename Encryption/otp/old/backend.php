<?php
//error_reporting(0);
header('Content-Type: application/json');

$tech = $_REQUEST["technique"];
$str = $_REQUEST["str"];
$secret = $_REQUEST["secret"];

global $output_result;

if ($tech === "iden") {
	identifier($str);
} else if ($tech === "en") {
	$output_result = otp_encrypt($str, $secret);
	$option = $_REQUEST["option"];
	if ($option === "b64") {
		$base64 = base64_encode($output_result);
		$table = display_table_en($str, $secret, $output_result);
		echo json_encode(array("output success" => $base64, "table" => $table));
	} elseif ($option === "hex") {
		$hex = bin2hex($output_result);
		$table = display_table_en($str, $secret, $output_result);
		echo json_encode(array("output" => $hex, "table" => $table));
	} else {
		echo " Please check your input/parameter selection again";
	}

} else if ($tech === "de") {
	$option = $_REQUEST["option"];
	if ($option === "b64") {
		$plain = base64_decode($str);
		$output_result = otp_decrypt($plain, $secret);
		$table = display_table_de($plain, $secret, $output_result);
		echo json_encode(array("output" => $output_result, "table" => $table));
	} elseif ($option === "hex") {
		$plain = hex2bin($str);
		$output_result = otp_decrypt($plain, $secret);
		$table = display_table_de($plain, $secret, $output_result);
		echo json_encode(array("output" => $output_result, "table" => $table));
	} else {
		echo " Please check your input/parameter selection again";
	}
} else {
	echo " Please check your input/parameter selection again";
}



//Encrypt & Decrypt

function otp_encrypt($plain, $secret)
{
	$ciphertext = '';
	for ($i = 0; $i < strlen($plain); $i++) {
		$ciphertext .= $plain[$i] ^ $secret[$i % strlen($secret)];
	}
	return $ciphertext;
}

function otp_decrypt($cipher, $secret)
{
	$plaintext = '';
	for ($i = 0; $i < strlen($cipher); $i++) {
		$plaintext .= $cipher[$i] ^ $secret[$i % strlen($secret)];
	}
	return $plaintext;
}

function display_table_en($plaintext, $key, $ciphertext)
{
	$result = "";

	$option = $_REQUEST["option"];
	if ($option === "b64") {
		$b64 = base64_encode($ciphertext);
		$result.= "<center><table><tr><td>Plaintext: $plaintext</td><td>Key: $key</td><td>Ciphertext: $ciphertext</td></tr><tr>Ciphertext(b64): $b64</tr></table></center>";
		$result .= "<table border='1'> 
		<tr>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Index</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext Character</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Character</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Character</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Character (base64)</th>
				</tr>";
		for ($i = 0; $i < strlen($plaintext); $i++) {
			$plaintext_bin = decbin(ord($plaintext[$i]));
			$key_bin = decbin(ord($key[$i % strlen($key)]));
			$ciphertext_bin = decbin(ord($ciphertext[$i]));
			$b64 = base64_encode($ciphertext[$i]);
			$result .= "<tr>";
			$result .= "<td>$i</td>";
			$result .= "<td>{$plaintext[$i]}</td>";
			$result .= "<td>{$key[$i % strlen($key)]}</td>";
			$result .= "<td>$plaintext_bin</td>";
			$result .= "<td>$key_bin</td>";
			$result .= "<td>$ciphertext_bin</td>";
			$result .= "<td>{$ciphertext[$i]}</td>";
			$result .= "<td>{$b64}</td>";
			$result .= "</tr>";
		}
	} elseif ($option === "hex") {
		$hex = bin2hex($ciphertext);
		$result.= "<center><table><tr><td>Plaintext: $plaintext</td><td>Key: $key</td><td>Ciphertext: $ciphertext</td></tr><tr>Ciphertext(hex): $hex</tr></table></center>";
		$result .= "<table border='1'>";
		$result .= "<tr>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Index</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext Character</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Character</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Character</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Character (Hex)</th>
				</tr>";
		for ($i = 0; $i < strlen($plaintext); $i++) {
			$plaintext_bin = decbin(ord($plaintext[$i]));
			$key_bin = decbin(ord($key[$i % strlen($key)]));
			$ciphertext_bin = decbin(ord($ciphertext[$i]));
			$hex = bin2hex($ciphertext[$i]);
			$result .= "<tr>";
			$result .= "<td>$i</td>";
			$result .= "<td>{$plaintext[$i]}</td>";
			$result .= "<td>{$key[$i % strlen($key)]}</td>";
			$result .= "<td>$plaintext_bin</td>";
			$result .= "<td>$key_bin</td>";
			$result .= "<td>$ciphertext_bin</td>";
			$result .= "<td>{$ciphertext[$i]}</td>";
			$result .= "<td>{$hex}</td>";
			$result .= "</tr>";
		}
	}
	$result .= "</table>";
	return $result;
}

function display_table_de($ciphertext, $key, $plaintext)
{
	$str = $_REQUEST["str"];
	$result = "";
	$option = $_REQUEST["option"];
	if ($option === "b64") {
		$result.= "<center><table><tr><td>ciphertext(b64): $str</td><td>Ciphertext: $ciphertext</td><td>Key: $key</td><td>plaintext: $plaintext</td></tr></table></center>";

		$result .= "<table border='1'>";
		$result .= "<tr>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Index</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Character (base64)</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Character</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Character</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext Character</th>
				</tr>";
		for ($i = 0; $i < strlen($ciphertext); $i++) {
			$ciphertext_bin = decbin(ord($ciphertext[$i]));
			$key_bin = decbin(ord($key[$i % strlen($key)]));
			$plaintext_bin = decbin(ord($plaintext[$i]));
			$b64 = base64_encode($ciphertext[$i]);
			$result .= "<tr>";
			$result .= "<td>$i</td>";
			$result .= "<td>{$b64}</td>";
			$result .= "<td>{$ciphertext[$i]}</td>";
			$result .= "<td>{$key[$i % strlen($key)]}</td>";
			$result .= "<td>$ciphertext_bin</td>";
			$result .= "<td>$key_bin</td>";
			$result .= "<td>$plaintext_bin</td>";
			$result .= "<td>{$plaintext[$i]}</td>";
			$result .= "</tr>";
		}
	} elseif ($option === "hex") {
		
		$result.= "<center><table><tr><td>ciphertext(hex): $str</td><td>ciphertext: $ciphertext</td><td>Key: $key</td><td>plaintext: $plaintext</td></tr></table></center>";
		$result .= "<table border='1'>";
		$result .= "<tr>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Index</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Character (Hex)</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Character</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Character</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext Binary</th>
				<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext Character</th>
				</tr>";
		for ($i = 0; $i < strlen($ciphertext); $i++) {
			$ciphertext_bin = decbin(ord($ciphertext[$i]));
			$key_bin = decbin(ord($key[$i % strlen($key)]));
			$plaintext_bin = decbin(ord($plaintext[$i]));
			$hex = bin2hex($ciphertext[$i]);
			$result .= "<tr>";
			$result .= "<td>$i</td>";
			$result .= "<td>{$hex}</td>";
			$result .= "<td>{$ciphertext[$i]}</td>";
			$result .= "<td>{$key[$i % strlen($key)]}</td>";
			$result .= "<td>$ciphertext_bin</td>";
			$result .= "<td>$key_bin</td>";
			$result .= "<td>$plaintext_bin</td>";
			$result .= "<td>{$plaintext[$i]}</td>";
			$result .= "</tr>";
		}
	}
	$result .= "</table>";
	return $result;
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