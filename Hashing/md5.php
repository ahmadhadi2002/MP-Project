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
<hr>

<?php
  require "../Hashing/md5_slides.html";
?>


<div class="header2">
    <h1>Try it out</h1>
    <hr>

    <div class="try_img">
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
