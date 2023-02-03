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

.container2 {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 900px;
  height: 400px;
  margin-left:auto;
  margin-right:auto;
}

.overlay {
  display: block;
  margin-left:auto;
  margin-right:auto;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 400px;
  width: 900px;
  opacity: 0;
  transition: .5s ease;
  background-color: #252525;
  
}

.container2:hover .overlay {
  opacity: 1;
}

.texd {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.hide{
    display: none;
}

.card1{
    margin:20px 0px 20px 300px;
}

.card2{
    margin: 0px 364px 20px auto;
}

.card3{
    margin:20px 0px 20px 400px;
}

.information{
        padding: 10px 398px 10px 398px;
        text-align: justify;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
}

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
  text-align: center;
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
    <h1>What is Salt & Pepper</h1>
</div>
    <hr>
    <div class="container2 card1">
  <img src="../ui/img/hash2.png" class="image">
  <div class="overlay" onclick="nextImg()">
    <div class="texd">A salt is a random string of characters added to your password to make the hash outcome completely different. So a hacker can't simply look up the hash value for a password “greentrees”, since a salt would turn it into something like “greentreesF&i$#u”. The criminal would have to use brute-force— guess every possible combination for each password, significantly slowing down the hacking process.
A pepper is like a salt — a random bit of data added to the password before it’s hashed through an algorithm. But unlike a salt, it’s not kept in the database along with the hash value. Instead, it’s usually hardcoded into the website’s source code.
</div>
  </div>
</div>

<br>

<div class="header2">
    <h1>Strength</h1>
    <hr>
    <div class="container2 card1">
  <img src="../ui/img/strength.jpg" class="image">
  <div class="overlay" onclick="nextImg()">
    <div class="texd">The biggest advantage of a pepper is the fact that it’s not kept in the database. So in the case of a data breach, even with access to all the hashed passwords, the attacker would still need to brute-force the database. salt are indispensable for the protection of data and building long-lasting consumer trust and loyalty.
</div>
  </div>
</div>

<div class="header2">
    <h1>Weakness</h1>
    <hr>
    <div class="container2 card1">
  <img src="../ui/img/weakness2.jpg" class="image">
  <div class="overlay" onclick="nextImg()">
    <div class="texd">However, since the pepper is hardcoded, it’s usually the same bit of data for each password, and it can’t be changed. So, following a data breach, the pepper might be more trouble than it’s worth. Additionally, most advanced hashing algorithms are intended to be used with salts. So, the implementation of peppers might be a bit impractical. Because salt is typically stored with the hashed password, so if the user selects simple password such as ‘’123456’, the cracker just selects a dictionary with this password and then add the salt, and compares it, making it useless.
</div>
  </div>
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