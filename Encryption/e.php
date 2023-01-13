<?php
//error_reporting(0);
// get the q parameter from URL
$str = $_REQUEST["q"];
$tech = $_REQUEST["technique"];


if ($tech === "bf") {
	caesarDecryptBF($str);
} else if ($tech === "en") {
	caesarCipher($str, $amount);
} else if ($tech === "de") {
	caesarCipher($str, $amount);
}

function caesarCipher($str, int $amount)
{
	$dir = $_REQUEST["dir"];

	global $forward;
	global $backwards;
	$output = [];
	$output1 = [];

	if ($amount < 0) {
		return caesarCipher($str, $amount + 26);
	}

	if ($dir === "forward") {
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
	} else if ($dir === "backward") {

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
}

function caesarDecryptBF($str)
{
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
					$c = chr((($code - 65 + (26-$amount)) % 26) + 65);
				} elseif ($code >= 97 && $code <= 122) {
					$c = chr((($code - 97 + (26-$amount)) % 26) + 97);
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