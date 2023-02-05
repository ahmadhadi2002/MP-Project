<?php
$pp = $_REQUEST["purpose"];

if ($pp === "key") {
  $action = $_REQUEST['action'];
  if ($action === "verify") {
		if (!empty($_POST["content"])) {
		$content = $_POST["content"];
		  if (isRSAEncryption($content)) {
        echo "File is a valid RSA encryption.";
      } else {
        echo "File is not a valid RSA encryption.";
      }
    }
  }
}


function isRSAEncryption($file){
  $content = file_get_contents($file);
  $content = trim($content);
  $content = stripslashes($content);
  $content = htmlspecialchars($content);
  try {
    if (preg_match('/-----BEGIN (PRIVATE KEY|RSA PRIVATE KEY)-----/', $content)) {
      if (preg_match('/-----END (PRIVATE KEY|RSA PRIVATE KEY)-----/', $content)) {
        $key_rsa = openssl_pkey_get_private($content);
        if ($key_rsa) {
          return true;
        }
      }
      return false;
    }

    if (preg_match('/-----BEGIN (PUBLIC KEY|RSA PUBLIC KEY)-----/', $content)) {
      if (preg_match('/-----END (PUBLIC KEY|RSA PUBLIC KEY)-----/', $content)) {
        $key_rsa = openssl_pkey_get_public($content);
        if ($key_rsa) {
          return true;
        }
        return false;
      }
    }

    return false;
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    return false;
  }
}

?>