<?php
$plaintext = 'Hello World!';
$key = hex2bin('000102030405060708090a0b0c0d0e0f');
$iv = hex2bin('101112131415161718191a1b1c1d1e1f');
$additionalData = 'Additional data';

$ciphertext = openssl_encrypt(
    $plaintext,
    'aes-128-gcm',
    $key,
    OPENSSL_RAW_DATA,
    $iv,
    $tag,
    $additionalData
);

// Store the ciphertext, IV, and tag together
$ciphertext = $ciphertext . $iv . $tag;

// Decryption
$plaintext = openssl_decrypt(
    $ciphertext,
    'aes-128-gcm',
    $key,
    OPENSSL_RAW_DATA,
    $iv,
    $tag,
    $additionalData
);

echo "success $plaintext";
