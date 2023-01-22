<?php
if (isset($_POST["passInput"])){
    $pass = $_POST["passInput"];

    echo "Test Success <br>".$pass;
}else{
    echo "Test Failed";
}
?>