<link rel="stylesheet" type="text/css" href="btm.css" />
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php error_reporting(0); ?> 
<meta name="viewport" content="width=device-width,initial-scale=1">
<title></title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.header {
  padding: 5px;
  text-align: right;
  background: #EBF1F5;
  color: black;
  font-size: 15px;
}

.header2 {
  padding: 5px;
  background: #EBF1F5;
  color: black;
  font-size: 15px;
}

.content {
    padding: 5px;
    color: black;
    font-size: 10px;
    line-height: 5px;
    background: #EBF1F5;
    text-align: left;
    margin:0;
}

.general_img{

    box-sizing: border-box;
    text-align: center;
    margin: auto;
    width: 800px;
    height: 400px;
    background-image: url("../ui/img/hash2.png");
    border: 0.3px solid #000000;
    border-radius: 20px 20px 0px 0px;

}

.weakness_img{

box-sizing: border-box;
text-align: center;
margin: auto;
width: 800px;
height: 400px;
background-image: url("../ui/img/weakness2.jpg");
border: 0.3px solid #000000;
border-radius: 20px 20px 0px 0px;

}

.try_img{

box-sizing: border-box;
text-align: center;
margin: auto;
width: 600px;
height: 400px;
background-image: url("../ui/img/try.jpg");
border: 0.3px solid #000000;
border-radius: 20px 20px 0px 0px;

}

.algo_img{

box-sizing: border-box;
text-align: center;
margin: auto;
width: 750px;
height: 400px;
background-image: url("../ui/img/algo.png");
border: 0.3px solid #000000;
border-radius: 20px 20px 0px 0px;

}

.md5algo_img{

box-sizing: border-box;
text-align: center;
margin: auto;
width: 400px;
height: 180px;
background-image: url("../ui/img/md5algo.png");
border: 0.3px solid #000000;
border-radius: 20px 20px 0px 0px;

}

.text{

    text-align: left;
    color: black;
    background: #EBF1F5;
    font-size:20px;
    padding:5px;

}

.strength_img{

box-sizing: border-box;
text-align: center;
margin: auto;
width: 800px;
height: 400px;
background-image: url("../ui/img/strength.jpg");
border: 0.3px solid #000000;
border-radius: 20px 20px 0px 0px;

}

</style>

</head>

<body>
<?php
    require "../ui/navbar.html";
?>
</head>

<body>
<div class="header">
  <h1>Salt & Pepper</h1>
</div>

<div style="border: 1px solid black"
    class="content">
    <h2>Content title<h2>
    <hr>
    <p>General information<p>
    <p>Strength<p>
    <p>Weakness<p>
    <p>Try it out<p>
</div>

<div class="header2">
    <h1>What is Salt & Pepper<h1>
    <hr>
        <div class="general_img">
        </div>
</div>

<div class="text">
    <p>A salt is a random string of characters added to your password to make the hash outcome completely different. So a hacker can't simply look up the hash value for a password “greentrees”, since a salt would turn it into something like “greentreesF&i$#u”. The criminal would have to use brute-force— guess every possible combination for each password, significantly slowing down the hacking process.
A pepper is like a salt — a random bit of data added to the password before it’s hashed through an algorithm. But unlike a salt, it’s not kept in the database along with the hash value. Instead, it’s usually hardcoded into the website’s source code.
<p>
</div>

<br>

<div class="header2">
    <h1>Strength<h1>
    <hr>
        <div class="strength_img">
        </div>
</div>

<div class="text">
    <p>The biggest advantage of a pepper is the fact that it’s not kept in the database. So in the case of a data breach, even with access to all the hashed passwords, the attacker would still need to brute-force the database. salt are indispensable for the protection of data and building long-lasting consumer trust and loyalty.<p>
</div>

<div class="header2">
    <h1>Weakness<h1>
    <hr>
        <div class="weakness_img">
        </div>
</div>

<div class="text">
    <p>However, since the pepper is hardcoded, it’s usually the same bit of data for each password, and it can’t be changed. So, following a data breach, the pepper might be more trouble than it’s worth. Additionally, most advanced hashing algorithms are intended to be used with salts. So, the implementation of peppers might be a bit impractical. Because salt is typically stored with the hashed password, so if the user selects simple password such as ‘’123456’, the cracker just selects a dictionary with this password and then add the salt, and compares it, making it useless.<p>
</div>

<div class="header2">
    <h1>Try it out<h1>
    <hr>
        <div class="try_img">
        </div>
</div>

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