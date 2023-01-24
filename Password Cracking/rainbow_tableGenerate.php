<?php

// Pre-computed hash values and plaintext values
$table = array(
    '098f6bcd4621d373cade4e832627b4f6' => 'test',
    '21232f297a57a5a743894a0e4a801fc3' => 'admin',
    '5f4dcc3b5aa765d61d8327deb882cf99' => 'password',
);

$plaintext = "p@assw0rd"

$hashed = md5($plaintext);

// Look up the hash within the database

$cycleLibrary = lookup($hashed);

function lookup($hashed){
    global $table;

    if(array_key_exists($hashed, $table)){

    }

}

?>