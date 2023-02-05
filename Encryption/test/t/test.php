<?php
$config = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 4096,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
   
// Create the private and public key
$res = openssl_pkey_new($config);

// Extract the private key from $res to $privKey
openssl_pkey_export($res, $privKey);

// Extract the public key from $res to $pubKey
$pubKey = openssl_pkey_get_details($res);
$pubKey = $pubKey["key"];

$data = 'plaintext data goes here';

// Encrypt the data to $encrypted using the public key
openssl_public_encrypt($data, $encrypted, $pubKey);

// Decrypt the data using the private key and store the results in $decrypted
openssl_private_decrypt($encrypted, $decrypted, $privKey);
echo "success" .$encrypted . "/n";
echo "success" .$decrypted;

// Generate a new private and public key
// $privateKey = openssl_pkey_new(array(
//     "private_key_bits" => 2048,
//     "private_key_type" => OPENSSL_KEYTYPE_RSA,
// ));

// // Extract the private key from $privateKey
// openssl_pkey_export($privateKey, $privateKeyString);

// // Extract the public key from $privateKey
// $publicKey = openssl_pkey_get_details($privateKey)["key"];

// // Encrypt the data using the public key
// $data = "This is the data to encrypt";
// openssl_public_encrypt($data, $encryptedData, $publicKey);

// // Decrypt the data using the private key
// openssl_private_decrypt($encryptedData, $decryptedData, $privateKeyString);

// echo "Decrypted data: " . $decryptedData;



?>