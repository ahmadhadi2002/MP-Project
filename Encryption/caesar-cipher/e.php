<?php
//error_reporting(0);
// get the q parameter from URL

$tech = $_REQUEST["technique"];
$str = $_REQUEST["q"];


global $forward;
global $backwards;
$output = [];
$output1 = [];

if ($tech === "bf") {
	caesarDecryptBF($str);
} else if ($tech === "deen") {
	$amount = $_REQUEST["key"];
	$list = $_REQUEST["list"];
	if ($list === "normal") {
		caesarCipher_option1($str, $amount);
	} elseif ($list === "ASCII") {
		caesarCipher_option2($str, $amount);
	} elseif ($list === "custom") {
		$list = str_split($list);
		caesarCipher_option3($str, $amount, $list);
	}
} else {
	echo " Please check your input again";
}

function caesarCipher($str, $amount)
{
	if ($amount < 0) {
		return caesarCipher_option1($str, $amount + 26);
	}
}
//option 1
function caesarCipher_option1($str, $amount)
{
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
		$output[] = $c;
	}
	$forward = implode('', $output);
	unset($output);
	$output1["foward $amount"] = $forward;
	//Caesar Cipher - Shift Backwards
	for ($i = 0; $i < strlen($str); $i++) {
		$c = $str[$i];
		if (preg_match("/[a-z]/i", $c)) {
			$code = ord($str[$i]);
			if ($code >= 65 && $code <= 90) {
				$c = chr((($code - 65 + (26 - $amount)) % 26) + 65);
			} elseif ($code >= 97 && $code <= 122) {
				$c = chr((($code - 97 + (26 - $amount)) % 26) + 97);
			}
		}
		$output[] = $c;
	}
	$backwards = implode('', $output);
	$output1["Backward $amount"] = $backwards;
	foreach ($output1 as $key => $value) {
		echo "<tr><td>$key</td><td>$value</td></tr>";
	}
}

//option 2
function caesarCipher_option2($str, $amount)
{
	//Caesar Cipher - Shift Forwards
	for ($i = 0; $i < strlen($str); $i++) {
		$c = $str[$i];
		if (preg_match("/[a-z]/i", $c)) {
			$code = ord($str[$i]);
			if ($code >= 65 && $code <= 90) {
				$c = chr($code - $amount);
			} elseif ($code >= 97 && $code <= 122) {
				$c = chr($code - $amount);
			}
		}
		$output[] = $c;
	}
	$forward = implode('', $output);
	unset($output);
	$output1["foward $amount"] = $forward;
	//Caesar Cipher - Shift Backwards
	for ($i = 0; $i < strlen($str); $i++) {
		$c = $str[$i];
		if (preg_match("/[a-z]/i", $c)) {
			$code = ord($str[$i]);
			if ($code >= 65 && $code <= 90) {
				$c = chr($code - $amount);
			} elseif ($code >= 97 && $code <= 122) {
				$c = chr($code - $amount);
			}
		}
		$output[] = $c;
	}
	$backwards = implode('', $output);
	$output1["Backward $amount"] = $backwards;
	foreach ($output1 as $key => $value) {
		echo "<tr><td>$key</td><td>$value</td></tr>";
	}
} //option 3 

function caesarCipher_option3($str, $amount, $list)
{
	function custom_caesar_cipher($str, $amount, $list)
	{
		$chars = str_split($str);
		foreach ($chars as $char) {
			$index = (array_search($char, $list) + $amount) % count($list);
			$ciphertext .= $list[$index];
		}
		return $ciphertext;
	}
}



function caesarDecryptBF($str)
{
	$str = $_REQUEST["q"];
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
			$output[] = $c;
		}
		$forward = implode('', $output);
		unset($output);
		$output1["$amount"] = $forward;
	}
	echo "<div class='column'>
	<table>
	<tr>
	<th>Direction</th><th>Shift Key</th><th>Ciphertext</th>
	</tr>";
	foreach ($output1 as $key => $value) {
		echo "
		<tr>
		<td>Forward</td><td>$key</td><td>$value</td>
		</tr>";
	}
	echo "</table></div>";

	for ($amount = 1; $amount < 26; $amount++) {
		//Caesar Cipher - Shift Forwards
		for ($i = 0; $i < strlen($str); $i++) {
			$c = $str[$i];
			if (preg_match("/[a-z]/i", $c)) {
				$code = ord($str[$i]);
				if ($code >= 65 && $code <= 90) {
					$c = chr((($code - 65 + (26 - $amount)) % 26) + 65);
				} elseif ($code >= 97 && $code <= 122) {
					$c = chr((($code - 97 + (26 - $amount)) % 26) + 97);
				}
			}
			$output[] = $c;
		}
		$forward = implode('', $output);
		unset($output);
		$output1["$amount"] = $forward;
	}
	echo "<div class='column'>
	<table>
	<tr>
	<th>Direction</th><th>Shift Key</th><th>Ciphertext</th>
	</tr>";
	foreach ($output1 as $key => $value) {
		echo "<tr>
		<td>Backward</td><td>$key</td><td>$value</td>
		</tr>";
	}
	echo "</table></div>";

}
?>