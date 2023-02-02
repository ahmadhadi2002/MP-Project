<!-- <link rel="stylesheet" type="text/css" href="btm.css" /> -->
<!DOCTYPE html>
<html>
<head>
    <style>
        .html {min-height: 100vh;}
        body { min-height: 100vh; }
    
        .title{
            text-align: center;
            font-size: 27px;
            padding: 22px;
        }

        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .textcenter{
            text-align:justify;
            padding: 0px 120px 10px 120px;
        }

        .information{
            text-align: left;
            padding: 27px 16px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            margin-left:120px;
            margin-right: 120px;
        }

        .collapsible {
            background-color: #777;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 49.9%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            margin-left: auto;
            margin-right: auto;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            border-radius: 15px;
            margin-bottom: 8px;
            }

        .active, .collapsible:hover {
            background-color: #555;
            }

        .content {
            text-align: justify;
            padding:0px 18px 30px 18px;
            width: 45%;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
            margin-left: auto;
            margin-right: auto;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
        }

        .scencenter{
            text-align: center; 
        }

        .scenimg{
            padding-top: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .tryitbutton{
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            padding: 10px 30px 10px 30px;
            text-align: center;
            text-decoration: none;
            /* display: inline-block; */
            font-size: 16px;
            cursor: pointer;
            border-radius: 20px;
            float:right;
        }

        .a{
            text-decoration: none;
        }
    </style>

</head>

<body>

<div>
    <?php 
        require "../ui/navbar.html";
    ?>
        <div class="title">
            <h1>Hashing</h1>
        </div>

        <div>
        <div class="image">
            <img src="../ui/img/hashmain.jpg"; class="center">
        </div>
        <div class="information">
            <p class="textcenter">Hashing is the process of transforming any given key or a string of characters into another value. This is usually represented by a shorter, fixed-length value or key that represents and makes it easier to find or employ the original string. In this exercise, we will be learning about the different hashes and performing the hashes. </p>
        </div>
    </div>

</div>

<div>
<div class="scencenter">
<button type="button" class="collapsible">Scenario 1 (MD5)</button>
<div class="content">
  <img src="../ui/img/MD5.jpg" class="scenimg">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <a href="../Hashing/md5.php"><button class="tryitbutton">Investigate!</button></a>
</div>
<br>
<button type="button" class="collapsible">Scenario 2 (SHA1)</button>
<div class="content">
  <img src="../ui/img/SHA1.png" class="scenimg">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <a href="../Hashing/sha1.php"><button class="tryitbutton">Investigate!</button></a>
</div>
<br>
<button type="button" class="collapsible">Scenario 3 (SHA256)</button>
<div class="content">
  <img src="../ui/img/SHA256.jpg" class="scenimg">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <a href="../Hashing/sha256.php"><button class="tryitbutton">Investigate!</button></a>
</div>
<br>
<button type="button" class="collapsible">Scenario 3 (Salt & Pepper)</button>
<div class="content">
  <img src="../ui/img/SNP.jpg" class="scenimg">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <a href="../Hashing/snp.php"><button class="tryitbutton">Investigate!</button></a>
</div>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
    <br><br>
</div>

<div>
    <?php
        include "../ui/bottombar.html";
    ?>
</div>

</body>
</html>
