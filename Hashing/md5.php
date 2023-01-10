<link rel="stylesheet" type="text/css" href="btm.css" />
<!DOCTYPE html>
<html>
<head>
<?php error_reporting(0); ?> 
<meta charset="utf-8">
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

</style>
<?php
    require "../ui/navbar.html";
?>
</head>

<body>
<div class="header">
  <h1>MD5</h1>
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
    <h1>What is MD5<h1>
    <hr>
        <div class="general_img">
        </div>
</div>

<div class="text">
    <p>The MD5 message—digest algorithm is a widely used hash function producing  a 128-bit hash value. MD5 was designed by Ronald Rivest in 1991 to replace MD4. MD5 can be used as a checksum to verify data integrity against unintentional corruption. Historically it was widely used as a cryptographic hash function; however it has been found to suffer from extensive vulnerabilities. It remains suitable for other non-cryptographic purposes.<p>
</div>

<br>

<div class="header2">
    <h1>Weakness<h1>
    <hr>
        <div class="weakness_img">
        </div>
</div>

<div class="text">
    <p>A basic requirement of any cryptographic hash function is that it should be computationally infeasible to find 2 distinct messages that hash to the same value and MD5 fails that requirement catastrophically. It has been exploited in the field, most infamously by the flame malware. The malware authors identified a Microsoft Terminal server licensing service certificate that inadvertently was enabled for code signing and that still used the MD5 hashing algorithm which made the operation successful. However, MD5 continues to be widely used, despite its well-known weaknesses.<p>
</div>

<div class="header2">
    <h1>Algorithm<h1>
    <hr>
        <div class="algo_img">
        </div>
</div>

<div class="text">
    <p>The main MD5 algorithm operates on a 128-bit state, divided into four 32-bit words, denoted A, B, C, and D. These are initialized to certain fixed constants. The main algorithm then uses each 512-bit message block in turn to modify the state. The processing of a message block consists of four similar stages, termed rounds; each round is composed of 16 similar operations based on a non-linear function F, modular addition, and left rotation. There are four possible functions; a different one is used in each round:<p>
</div>
        <div class="md5algo_img">
        </div>


<div class="header2">
    <h1>Try it out<h1>
    <hr>
        <div class="try_img">
        </div>
</div>

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


<?php
    require "../ui/bottombar.html";
?>
 

</body>
