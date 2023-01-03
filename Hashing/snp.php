<link rel="stylesheet" type="text/css" href="btm.css" />
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title></title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>

</head>

<body>
<form action="snp.php" method="post">
Value: <input type="text" name="name"><br>
<input type="submit">
</form>

Original value:
<?php 
$salt = "2023";
$pepper = "2022";
$string = $_POST["name"];
$hash = hash('sha256', $string, $salt);
echo $string;
?>
<br>

hashed value after salt added: 
<?php
echo $hash;
?>
<br>

 value after pepper added: 
 <?php
 echo $hash,$pepper;
 ?>
 <br>

 value after hashing salt & pepper to value: 
 <?php
 $hash2 = hash('sha256', $hash, $pepper);
 echo $hash2;
 ?>
 
</body>