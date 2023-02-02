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
}

.overlay {
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
    margin:20px 0px 20px 400px;
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

.sha1algo_img{

box-sizing: border-box;
text-align: center;
margin: auto;
width: 400px;
height: 180px;
background-image: url("../ui/img/sha1algo.png");
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

</style>

</head>

<body>
<?php
    require "../ui/navbar.html";
?>
</head>

<body>
<div class="header">
  <h1>SHA1</h1>
</div>

<div style="border: 1px solid black"
    class="content">
    <h2>Content title<h2>
    <hr>
    <p>General information<p>
    <p>Weakness<p>
    <p>Algorithm<p>
    <p>Try it out<p>
</div>

<div class="header2">
    <h1>What is SHA1</h1>
</div>
    <hr>
    <div class="container2 card1">
  <img src="../ui/img/hash2.png" class="image">
  <div class="overlay" onclick="nextImg()">
    <div class="texd">SHA-1 is a cryptographically broken but still widely used hash function which takes an input and produces a 160-bit hash value known as message-digest typically rendered as 40 hexadecimal digits. It was designed by the United States National Security Agency, and is a U.S. Federal Information Processing Standard. Since 2005, SHA-1 has not been considered secure against well-funded opponents as of 2010 many organizations have recommended its replacement. NIST formally deprecated use of SHA-1 in 2011 and disallowed its use for digital signatures in 2013 and declared that it should be phased out by 2030.
</div>
  </div>
</div>

<br>

<div class="header2">
    <h1>Weakness</h1>
    <hr>
    <div class="container2 card1">
  <img src="../ui/img/weakness2.jpg" class="image">
  <div class="overlay" onclick="nextImg()">
    <div class="texd">SHA-1 is weak to collision attacks, so an attacker has to be able to produce two messages (which, with current attacks, are of a certain form) that hash to the same value, and it would be hard to do that in an online manner without the assistance of the server. SHA-1 does not have collision resistance where it is difficult to find 2 messages with the same hash within a reasonable amount of time which makes the SHA-1 unreliable.
</div>
  </div>
</div>

<div class="header2">
    <h1>Algorithm</h1>
    <hr>
    <div class="container2 card1">
  <img src="../ui/img/algo.png" class="image">
  <div class="overlay" onclick="nextImg()">
    <div class="texd">First, we break our message into ’n’ number of parts which we are depicting as X, each of size of 448 bits and then we add 64 bits of padding to each of them which converts their total length to 512 bits. These 512 bits are then put in the compression function along with the 160 bits of compressed output, for the first time we carry this out we have a predefined value for the 160-bit value. This process keeps on going on ’n’ number of times repeatedly till the last 160 bit of the message is produced and that is the hash depicted as H(x)
</div>
    </div>
</div>
        <div class="sha1algo_img">
        </div>


<div class="header2">
    <h1>Try it out</h1>
    <hr>
        <div class="try_img">
        </div>
</div>

<form action="sha1.php" method="post">
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
    echo sha1($_POST["name"]);     
?><br>
 
 <?php
    require "../ui/bottombar.html";
?>
 
</body>