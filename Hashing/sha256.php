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

<?php
    require "../hashing/sha256_slides.html";

  ?>

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