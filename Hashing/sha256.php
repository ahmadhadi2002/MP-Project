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

.shadiff_img{

box-sizing: border-box;
text-align: center;
margin: auto;
width: 900px;
height: 450px;
background-image: url("../ui/img/shadiff.png");
border: 0.3px solid #000000;
border-radius: 20px 20px 0px 0px;

}

.difference_img{

box-sizing: border-box;
text-align: center;
margin: auto;
width: 800px;
height: 450px;
background-image: url("../ui/img/difference.jpg");
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
  <h1>SHA256</h1>
</div>

<div style="border: 1px solid black"
    class="content">
    <h2>Content title<h2>
    <hr>
    <p>General information<p>
    <p>Strength<p>
    <p>Difference between SHA1 & SHA2<p>
    <p>Try it out<p>
</div>

<div class="header2">
    <h1>What is SHA256<h1>
    <hr>
        <div class="general_img">
        </div>
</div>

<div class="text">
    <p>SHA 256 is a part of the SHA 2 family of algorithms, where SHA stands for Secure Hash Algorithm. Published in 2001, it was a joint effort between the NSA and NIST to introduce a successor to the SHA 1 family, which was slowly losing strength against brute force attacks. SHA-256 is one of the most popular hash algorithms around. It is often referred to as a ‘digest’, ‘fingerprint’ or ‘signature’ as those are unique and often never the same. It is almost a perfect unique string of character that is generated from a separate piece of input text, SHA-256 generates a 256-bit signature.<p>
</div>

<br>

<div class="header2">
    <h1>Strength<h1>
    <hr>
        <div class="strength_img">
        </div>
</div>

<div class="text">
    <p>SHA-256 is one of the most secure hashing functions on the market. The US government requires its agencies to protect certain sensitive information using SHA-256. Three properties make SHA-256 this secure. First, it is almost impossible to reconstruct the initial data from the hash value. A brute-force attack would need to make 2256  attempts to generate the initial data. Second, having two messages with the same hash value (called a collision) is extremely unlikely. With 2256  possible hash values, the likelihood of two being the same is infinitesimally, unimaginably small. Finally, a minor change to the original data alters the hash value so much that it’s not apparent the new hash value is derived from similar data; this is known as the avalanche effect.<p>
</div>

<div class="header2">
    <h1>Difference between SHA1 & SHA2<h1>
    <hr>

    <div class="difference_img">
        </div>

</div>

<div class="text">
    <p>The primary difference between SHA-1 and SHA-2 is the length of the hash. While SHA-1 is the more basic version of the hash providing a shorter code with fewer possibilities for unique combinations, SHA-2 or SHA-256 creates a longer, and thus more complex, hash. In 2015, new SSL certificates with SHA-1 were phased out. By 2016, it became mandatory for SHA-2 to be used for all new certificates. However, some old certificates remain, which is why SHA-1 is still being used to this day.<p>
</div>

<div class="shadiff_img">
        </div>

<div class="header2">
    <h1>Try it out<h1>
    <hr>
        <div class="try_img">
        </div>
</div>

<form action="sha256.php" method="post">
Value: <input type="text" name="name"><br>
<input type="submit">
</form>

Original value:
<?php 
$string = $_POST["name"];
$hash = hash('sha256', $string);
echo $hash;
?>
<br>
 
</body>