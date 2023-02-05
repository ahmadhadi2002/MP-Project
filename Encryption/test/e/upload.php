<?php
  if (!empty($_POST["content"])) {
    $content = $_POST["content"];
    if (preg_match("/-----BEGIN PRIVATE KEY-----/", $content)) {
      echo "valid";
    } else {
      echo "invalid";
    echo $content;
    }
  }else {
  echo "unsuccessful";
  }

  if (isset($_FILES["file"])) {
    $file = $_FILES["file"]["tmp_name"];
    if (isRSAEncryption($file)) {
    echo "valid";
    }
  } else {
    echo "file unread";
  }
?>
