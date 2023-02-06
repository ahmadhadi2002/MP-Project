<?php
$pp = $_REQUEST["purpose"];
global $priv_key;
if ($pp === "key") {
	$action = $_REQUEST['action'];
	if ($action === "generate") {
		$key_size = $_REQUEST['key'];
		key_gen($key_size);
	} else if ($action === "verify") {
		// echo $content;
		// if (!empty($content)) {
		// 	if (isRSAEncryption($content, "")) {
		// 		echo "valid";
		// 	} else {
		// 		echo '<script type="text/javascript">';
		// 		echo 'alert("invalid Key file")';
		// 		echo '</script>';
		// 	}
		// } else {
		// 	echo '<script type="text/javascript">';
		// 	echo 'alert("Please Refresh your page")';
		// 	echo '</script>';
		// }
		processUploadedFile();
	}
} else if ($pp === "deen") {
	$str = $_REQUEST['text'];
	$option = $_REQUEST['option'];
	$technique = $_REQUEST['technique'];
	$key = $_REQUEST['key'];

	if (isRSAEncryption($key, $technique)) {
		if ($option === "upload") {
			$key = trim($key);

		} else if ($option === "input") {
			$key = trim($key);
		}

		$padding = trim($_REQUEST['mode'], '\'"');

		if ($padding === "OPENSSL_PKCS1_PADDING") {
			echo rsa($_REQUEST['text'], $_REQUEST['technique'], $key, OPENSSL_PKCS1_PADDING);
		} else if ($padding === "OPENSSL_SSLV23_PADDING") {
			echo rsa($_REQUEST['text'], $_REQUEST['technique'], $key, OPENSSL_SSLV23_PADDING);
		} else if ($padding === "OPENSSL_NO_PADDING") {
			echo rsa($_REQUEST['text'], $_REQUEST['technique'], $key, OPENSSL_NO_PADDING);
		} else if ($padding === "OPENSSL_PKCS1_OAEP_PADDING") {
			echo rsa($_REQUEST['text'], $_REQUEST['technique'], $key, OPENSSL_PKCS1_OAEP_PADDING);
		} else {
			echo "Please check your input again";
		}
	}
}

function isRSAEncryption($key, $technique)
{
	$key = str_replace("'", '', $key);
	$content_a = trim($key);
	$content_a = stripslashes($content_a);
	$content_a = htmlspecialchars($content_a);

	if ($technique === "decrypt") {
		//echo $key;

		if (preg_match('/-----BEGIN (PRIVATE KEY|RSA PRIVATE KEY)-----/', $content_a)) {
			if (preg_match('/-----END (PRIVATE KEY|RSA PRIVATE KEY)-----/', $content_a)) {
				$key_rsa = openssl_pkey_get_private($key);
				if ($key_rsa) {
					global $priv_key;
					$priv_key = $key;
					return true;

				} else {
					echo "tets: $key";
					echo '<script type="text/javascript">';
					echo 'alert("Wrong Key used1")';
					echo '</script>';
					return false;
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	} else if ($technique === "encrypt") {
		if (preg_match('/-----BEGIN (PUBLIC KEY|RSA PUBLIC KEY)-----/', $content_a)) {
			if (preg_match('/-----END (PUBLIC KEY|RSA PUBLIC KEY)-----/', $content_a)) {
				$key_rsa = openssl_pkey_get_public($key);
				if ($key_rsa) {
					return true;
				} else {
					echo '<script type="text/javascript">';
					echo 'alert("Wrong Key file used2")';
					echo '</script>';
					return false;
				}
			}
		} else {
			echo '<script type="text/javascript">';
			echo 'alert("Wrong Key file used3")';
			echo '</script>';
			return false;
		}
	} else {
		echo 'Public Key is invalid!';
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
                <textarea id='textarea_private_Key' name='textarea_key' value=$privKey rows='10' cols='60' disabled>$privKey</textarea>
                <br>
                <button onclick=copyToClipboard('#textarea_private_Key') id='copy'>Copy</button>
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
	if ($technique === 'encrypt') {
		$str = filter_var($str, FILTER_SANITIZE_STRING);
		$key = filter_var($key, FILTER_SANITIZE_STRING);
		$publicKey = openssl_pkey_get_public($key);
		if (!$publicKey) {
			echo "Failed to load public key.";
		}
		$result = openssl_public_encrypt($str, $encrypted, $publicKey, $padding);
		if (!$result) {
			echo "Failed to encrypt data.";
		}
		echo base64_encode($encrypted);

	} else if ($technique === 'decrypt') {
		$str = str_replace("'", '', $str);
		global $priv_key;
		$str = filter_var($str, FILTER_SANITIZE_STRING);
		$key = filter_var($key, FILTER_SANITIZE_STRING);

		$result = openssl_private_decrypt(base64_decode($str), $decrypted, $priv_key, $padding);
		if (!$result) {
			echo "Failed to decrypt data.";
		} else if ($result) {
			echo $decrypted;
		}
	} else {
		echo "error";
	}
}

function processUploadedFile()
{
	if (isset($_FILES['fileInput']['error']) && $_FILES['fileInput']['error'] == 0) {
		$file = $_FILES['fileInput']['tmp_name'];
		$fileContent = file_get_contents($file);
		if (!empty($fileContent)) {
			$status = 'File is not empty. ';
			//check validity of key
			if (preg_match('/-----BEGIN (PRIVATE KEY|RSA PRIVATE KEY)-----/', $fileContent)) {
				if (preg_match('/-----END (PRIVATE KEY|RSA PRIVATE KEY)-----/', $fileContent)) {
					$content_r = str_replace("'", '', $fileContent);
					$key_rsa = openssl_pkey_get_private($content_r);
					if ($key_rsa) {
						$status =  'Private Key is valid!';

					} else {
						$status =  'Private Key is invalid!';
					}
				} else {
					$status =  'Private Key is invalid!';
				}
			} else if (preg_match('/-----BEGIN (PUBLIC KEY|RSA PUBLIC KEY)-----/', $fileContent)) {
				if (preg_match('/-----END (PUBLIC KEY|RSA PUBLIC KEY)-----/', $fileContent)) {
					$key_rsa = openssl_pkey_get_public($fileContent);
					if ($key_rsa) {
						$status =  'Public Key is valid!';
					} else {
						$status =  'Public Key is invalid!';
					}
				}
			} else {
				echo 'Public Key is invalid!';
			}
		} else {
			$status = 'File is empty. ';
		}
	} else {
		$fileContent = '';
		$status = 'File not uploaded';
	}

	return array('fileContent' => $fileContent, 'status' => $status);
}

$response = processUploadedFile();
echo json_encode($response);
?>