<?php
require 'tt.php';
if (isset($_POST['action'])){
if ($_POST['action']==='Encrypt'){
    $str=$_POST['Plaintext'];
    $amount=$_POST['shift_key'];
    echo CaesarCipher($str, $amount);
    $cipher=CaesarCipher($str, $amount);
    echo "test: $cipher";

    
}
}

echo "<!DOCTYPE html>
<html>
<body>

<h1>Encryption & Decryption Low-Fi</h1>

<form action='./encryption.php' method='post'>
<table border size >
  <tr>
    <td>
        <p>Plaintext</p>
        <input type='text' id='Plaintext' name='Plaintext' value=$str><br><br>
    </td>
    <td>  
        <input type='radio' id='html' name='action' value='Encrypt'>
            <label for='Encrypt'>Encrypt</label><br>
        <input type='radio' id='html' name='action' value='Decrypt'>
            <label for='Decrypt'>Decrypt</label><br>
    <td>
        <p>Ciphertext</p>
        <input type='text' id='Ciphertext' name='Ciphertext' value=$cipher><br><br>
    </td>
  </tr>
  <tr>
    <td>
    Shift Key:
    </td>
  	<td colspan=2>
    <input type='text' id='shift_key' name='shift_key' value=$amount>
    </td>
   </tr>
  <tr>
  	<td colspan=3>
    <input type='submit' value='Submit' text-align: center;>
    </td>
   </tr>
</table>
</form>

</body>
</html>

";


?>
