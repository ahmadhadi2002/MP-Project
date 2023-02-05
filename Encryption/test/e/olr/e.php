<?php
$pp = $_REQUEST["purpose"];

if ($pp === "key") {
	$action = $_REQUEST['action'];
	if ($action === "generate") {
		$key_size = $_REQUEST['key'];
		echo $key_size;
		key_gen($key_size);
	} else if ($action === "verify") {
		echo $content;
		if (!empty($content)) {
			if (isRSAEncryption($content)) {
				echo "valid";
			} else {
				echo "invalid";
			}
		} else {
			echo "file unread";
		}
	}
} else if ($pp === "deen") {
	if ($_POST['option'] === "upload") {
		$key = $_POST['key_up'];
		$key = trim($key);

	} else if ($_POST['option'] === "input") {
		
		$key = $_POST['keyInput'];
		$key = trim($key);
		
	}
	$padding = trim($_POST['mode'], '\'"');

	if ($padding === "OPENSSL_PKCS1_PADDING") {
		echo rsa($_POST['text'], $_POST['technique'], $key, OPENSSL_PKCS1_PADDING);
	} else if ($padding === "OPENSSL_SSLV23_PADDING") {
		echo rsa($_POST['text'], $_POST['technique'], $key, OPENSSL_SSLV23_PADDING);
	} else if ($padding === "OPENSSL_NO_PADDING") {
		echo rsa($_POST['text'], $_POST['technique'], $key, OPENSSL_NO_PADDING);
	} else if ($padding === "OPENSSL_PKCS1_OAEP_PADDING") {
		echo rsa($_POST['text'], $_POST['technique'], $key, OPENSSL_PKCS1_OAEP_PADDING);
	} else {
		echo "Please check your input again";
	}
}

function isRSAEncryption($file)
{
	$content_a = trim($file);
	$content_a = stripslashes($content_a);
	$content_a = htmlspecialchars($content_a);
	if (preg_match('/-----BEGIN (PRIVATE KEY|RSA PRIVATE KEY)-----/', $content_a)) {
		if (preg_match('/-----END (PRIVATE KEY|RSA PRIVATE KEY)-----/', $content_a)) {
			$key_rsa = openssl_pkey_get_private($file);
			//echo "test $key_rsa test";
			if ($key_rsa) {
				return true;
			} else {
				return false;
			}
		}
	} else {
		return false;
	}

	if (preg_match('/-----BEGIN (PUBLIC KEY|RSA PUBLIC KEY)-----/', $content_a)) {
		if (preg_match('/-----END (PUBLIC KEY|RSA PUBLIC KEY)-----/', $content_a)) {
			$key_rsa = openssl_pkey_get_public($file);
			if ($key_rsa) {
				return true;
			} else {
				echo "here";
				return false;
			}
		}
	} else {
		echo "here2";
		return false;
	}
}

function key_gen($key_size)
{
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

	if (isset($privKey) && isset($publicKey)):
		echo "<table>
        <tr>
            <td style='text-align: center; vertical-align: middle;'>
                <h3>Private Key:</h3>
            </td>
            <td style='text-align: center; vertical-align: middle;'>
                <h3>Public Key:</h3>
            </td>
        </tr>
        <tr>
            <td style='text-align: center; vertical-align: middle;'>
                <textarea id='textarea_private_Key' name='textarea_key' value=$privKey rows='10' cols='60' disabled> $privKey</textarea>
                <br>
                <button onclick=copyToClipboard('#textarea_private_Key')>Copy</button>
				<button id='download' onclick=downloadPEMFile('private_Key')>Download</button>
            </td>
			
            <td style='text-align: center; vertical-align: middle;'>
                <textarea id='textarea_public_Key' name='textarea_key' value=$publicKey rows='10'
                    cols='60' disabled>$publicKey</textarea>
                <br>
                <button onclick=copyToClipboard('#textarea_public_Key')>Copy</button>
				<button id='download' onclick=downloadPEMFile('public_Key')>Download</button>
            </td>
        </tr>
    </table>";
	endif;
}


function rsa($str, $technique, $key, $padding)
{
	//echo "success_start <br>";

	$str = filter_var($str, FILTER_SANITIZE_STRING);
	$key = filter_var($key, FILTER_SANITIZE_STRING);

	if ($technique === 'encrypt') {
		$publicKey = openssl_pkey_get_public($key);
		if (!$publicKey) {
			throw new Exception("Failed to load public key.");
		}
		$result = openssl_public_encrypt($str, $encrypted, $publicKey, $padding);
		if (!$result) {
			throw new Exception("Failed to encrypt data.");
		}
		return base64_encode($encrypted);


	} else if ($technique === 'decrypt') {
		$privateKey = openssl_pkey_get_private($key);
		if (!$privateKey) {
			throw new Exception("Failed to load private key.");
		}
		$str = base64_decode($str);
		$result = openssl_private_decrypt($str, $decrypted, $key, $padding);
		if (!$result) {
			throw new Exception("Failed to decrypt data.");
		}
		return $decrypted;
	}
}
?>