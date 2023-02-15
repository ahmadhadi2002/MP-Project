<?php
error_reporting(0);
$tech = $_REQUEST['technique'];
$str = $_REQUEST['q'];



if ($tech === "bf") {
	$p_key = $_REQUEST["p_key"];
	vigDE_BF($str, $p_key);
} else if ($tech === "de" || $tech === "en") {
	$key = $_REQUEST["key"];
	$list = $_REQUEST["list"];
	$result = vigCipher($str, $key, $tech, $list);
	echo $result;
} else {
	echo " Please check your input again";
}

function vigCipher($str, $key, $tech, $list){
	$result = "";
	if ($tech === "en") {
		for ($i = 0; $i < strlen($str); $i++) {
			$char = $str[$i];
			$index = strpos($list, $char);
			$shift = strpos($list, $key[$i % strlen($key)]);
			$result .= $list[($index + $shift) % strlen($list)];
		  }
		  return $result;
	} else if ($tech === "de") {
		for ($i = 0; $i < strlen($str); $i++) {
			$char = $str[$i];
			$index = strpos($list, $char);
			$shift = strpos($list, $key[$i % strlen($key)]);
			$result .= $list[($index - $shift + strlen($list)) % strlen($list)];
		  }
		  return $result;
	}
}



function vigDE_BF($str, $p_key){
	$list = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
	$result = array();


	//Key
	generateKey("", $list, $result);
	
	$count = count($result); // total count of the array books
    $half = $count/2; // half of the total count
    $result1 = array_slice($result, 0, $half);      // returns first half
    $result2 = array_slice($result, $half);  // returns second half


    echo "<div class='column'>
	<table>
	<tr>
	<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Input</th>
	<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key</th>
	<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ouput</th>
	</tr>";
	foreach ($result1 as $key => $value) {
		$gen_key = $p_key . $value;
		$list_s = implode("", $list);
		$result=vigCipher($str, $gen_key, "de", $list_s);
		echo "
		<tr>
		<td>$str</td><td>$gen_key</td><td>$result</td>
		</tr>";
	}
	echo "</table></div>";

    echo "<div class='column'>
	<table>
	<tr>
	<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Input</th>
	<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key</th>
	<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ouput</th>
	</tr>";
	foreach ($result2 as $key => $value) {
		$gen_key = $p_key . $value;
		$list_s = implode("", $list);
		$result=vigCipher($str, $gen_key, "de", $list_s);
		echo "
		<tr>
		<td>$str</td><td>$gen_key</td><td>$result</td>
		</tr>";
	}
	echo "</table></div>";
}

function generateKey($currentString, $alphabets, &$result) {
	$p_key = $_REQUEST["p_key"];
	$k_len=$_REQUEST["key_length"];
	$len = (int)$k_len - strlen($p_key);
	if ($len >5){
		echo "Unable to run due to the difference is 5.";
	} else {
		if (strlen($currentString) == $len) {
			$result[] = $currentString;
			return;
		}
		for ($i = 0; $i < count($alphabets); $i++) {
			generateKey($currentString . $alphabets[$i], $alphabets, $result);
		}
	}
}


?>