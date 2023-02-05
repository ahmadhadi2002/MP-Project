<?php


if ($_POST['action']==="action"){
    $file = $_POST['file'];
    function verify_rsa_key($file) {
        $key = openssl_pkey_get_public(file_get_contents($file));
        if (!$key) {
            return false;
        }
        $details = openssl_pkey_get_details($key);
        if (!isset($details['key']) || strpos($details['key'], 'RSA PUBLIC KEY') === false) {
            return false;
        }
        return true;
    }
    $is_valid = verify_rsa_key($file);
    echo $is_valid;
    
}else if (isset($_POST['generate'])) {
    $key_size = $_POST['key'];
    echo $key_size;
    $config = array(
        "private_key_bits" => $key_size,
        "private_key_type" => OPENSSL_KEYTYPE_RSA,
    );
    // Generate a new private key
    $privateKey = openssl_pkey_new($config);

    // Extract the private key from $res to $privKey
    openssl_pkey_export($privateKey, $privKey);

    // Generate the public key for the private key
    $publicKey = openssl_pkey_get_details($privateKey)["key"];
} 
?>

<?php if (isset($privKey) && isset($publicKey)): ?>
    <table>
        <tr>
            <td style="text-align: center; vertical-align: middle;">
                <h3>Private Key:</h3>
            </td>
            <td style="text-align: center; vertical-align: middle;">
                <h3>Public Key:</h3>
            </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle;">
                <textarea id="textarea_privKey" name="textarea_key" rows="10" cols="60" disabled><?php echo $privKey; ?></textarea>
                <br>
                <button onclick="copyToClipboard('#textarea_privKey')">Copy</button>

            </td>
            <td style="text-align: center; vertical-align: middle;">
                <textarea id="textarea_publicKey" name="textarea_key" rows="10"
                    cols="60" disabled><?php echo $publicKey; ?></textarea>
                <br>
                <button onclick="copyToClipboard('#textarea_publicKey')">Copy</button>
            </td>
        </tr>
    </table>
<?php endif; ?>