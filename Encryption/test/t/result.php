<?php
if (isset($_POST['generate'])) {
    $config = array(
        "private_key_bits" => 2048,
        "private_key_type" => OPENSSL_KEYTYPE_RSA,
    );
  
    // Generate a new private key
    $privateKey = openssl_pkey_new($config);
  
    // Extract the private key from $res to $privKey
    openssl_pkey_export($privateKey, $privKey);
  
    // Generate the public key for the private key
    $publicKey = openssl_pkey_get_details($privateKey)["key"];
  
    echo '<h3>Private Key:</h3>
    <textarea rows="10" cols="60">'.$privKey.'</textarea>
    <h3>Public Key:</h3>
    <textarea rows="10" cols="60">'.$publicKey.'</textarea>';
}