<?php
function encryptOTP($plaintext, $key) {
    $ciphertext = "";
    for ($i = 0; $i < strlen($plaintext); $i++) {
        $ciphertext .= chr(ord($plaintext[$i]) ^ ord($key[$i % strlen($key)]));
    }
    return $ciphertext;
}

function decryptOTP($ciphertext, $key) {
    $plaintext = "";
    for ($i = 0; $i < strlen($ciphertext); $i++) {
        $plaintext .= chr(ord($ciphertext[$i]) ^ ord($key[$i % strlen($key)]));
    }
    return $plaintext;
}

$plaintext = "HELLO";
$key = "XYZXY";


$encrypted = encryptOTP($plaintext, $key);


$ciphertext=$encrypted ;
$plaintext = decryptOTP($ciphertext, $key);


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

//Hex
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





$plaintext = "HELLO";
$key = "XYZXY";

// Encrypt the plaintext
$ciphertext = "";
for ($i = 0; $i < strlen($plaintext); $i++) {
    $ciphertext .= chr(ord($plaintext[$i]) ^ ord($key[$i % strlen($key)]));
}

$result.= "Encryption Visual Representation (base64):\n";
$result.= "<table border='1'>";
$result.= "<tr>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext </th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Base64</th>";
$result.= "</tr>";

for ($i = 0; $i < strlen($plaintext); $i++) {
    $plaintextBin = str_pad(decbin(ord($plaintext[$i])), 8, "0", STR_PAD_LEFT);
    $keyBin = str_pad(decbin(ord($key[$i % strlen($key)])), 8, "0", STR_PAD_LEFT);
    $ciphertextBin = str_pad(decbin(ord($ciphertext[$i])), 8, "0", STR_PAD_LEFT);
    $ciphertextBase64 = base64_encode($ciphertext[$i]);
    $ciphertextHex = bin2hex($ciphertext[$i]);
    
    $result.= "<tr>";
    $result.= "<td>" . $plaintext[$i] . " (" . $plaintextBin . " / " . ord($plaintext[$i]) . ")" . "</td>";
    $result.= "<td>" . $key[$i % strlen($key)] . " (" . $keyBin . " / " . ord($key[$i % strlen($key)]) . ")" . "</td>";
    $result.= "<td>" .$ciphertext[$i] . "(" . $ciphertextBin . " / " . ord($ciphertext[$i]) .")". "</td>";
    $result.= "<td>" . $ciphertextBase64 . "</td>";  
    $result.= "</tr>";
}
$result.= "</table>";

$result.= "Encryption Visual Representation (hex):\n";
$result.= "<table border='1'>";
$result.= "<tr>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Plaintext</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Key</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext</th>";
$result.= "<th style='position: -webkit-sticky; position: sticky; top: 0; background: green; border: 1px solid black;'>Ciphertext Hex</th>";
$result.= "</tr>";

for ($i = 0; $i < strlen($plaintext); $i++) {
    $plaintextBin = str_pad(decbin(ord($plaintext[$i])), 8, "0", STR_PAD_LEFT);
    $keyBin = str_pad(decbin(ord($key[$i % strlen($key)])), 8, "0", STR_PAD_LEFT);
    $ciphertextBin = str_pad(decbin(ord($ciphertext[$i])), 8, "0", STR_PAD_LEFT);
    $ciphertextBase64 = base64_encode($ciphertext[$i]);
    $ciphertextHex = bin2hex($ciphertext[$i]);
    
    $result.= "<tr>";
    $result.= "<td>" . $plaintext[$i] . " (" . $plaintextBin . " / " . ord($plaintext[$i]) . ")" . "</td>";
    $result.= "<td>" . $key[$i % strlen($key)] . " (" . $keyBin . " / " . ord($key[$i % strlen($key)]) . ")" . "</td>";
    $result.= "<td>" .$ciphertext[$i] . "(" . $ciphertextBin . " / " . ord($ciphertext[$i]) .")". "</td>";
    $result.= "<td>" . $ciphertextHex . "</td>";
    $result.= "</tr>";
}

$result.= "</table>";

