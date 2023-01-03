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
<form action="md5.php" method="post">
Value: <input type="text" name="name"><br>
<input type="submit">
</form>

Original value:
<?php 
    echo $_POST["name"];     
?>
<br>
Hash value:  
<?php 
    echo md5($_POST["name"]);     
?><br>
 
</body>
