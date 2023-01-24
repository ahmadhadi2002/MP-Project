<?php

// Pre-computed hash values and plaintext values
$table = array(
    '098f6bcd4621d373cade4e832627b4f6' => 'test',
    '21232f297a57a5a743894a0e4a801fc3' => 'admin',
    '5f4dcc3b5aa765d61d8327deb882cf99' => 'password',
);

// Target plaintext value and its corresponding hash value
$plaintext = "p@ssw0rd";

// Hash is always known and is require to exist within the library, we are conducting a password crack of hash into plaintext.
$hash = md5($plaintext);

// Perform initial lookup
$result = lookup($hash);

// If plaintext value not found, use reduction function to generate new plaintext values
$iterations = 0;
while ($result === false && $iterations < 200) {
    $result = lookup(reduce($hash, $iterations));
    $iterations++;
}

// Display the plaintext value
if ($result !== false) {
    echo "Plaintext value: $result";
} else {
    echo "Plaintext value not found";
}

// Function to perform a lookup in the table
function lookup($hash) {
    global $table;
    if (array_key_exists($hash, $table)) {
        return $table[$hash];
    } else {
        return false;
    }
}

// Function to generate a new plaintext value from a hash value and index
function reduce($hash, $index) {
    echo substr(md5($hash . $index), 0, 8)."<br>";
    return substr(md5($hash . $index), 0, 8);
}

?>