<!DOCTYPE html>
<html>
<title>W3.CSS</title>

<head>
<style>
    .topnav{
        overflow: hidden;
        background-color: teal;
        top:0;
        margin: 0;
        padding: 0;
        position: sticky;
        z-index: 1;
    }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="topnav">
        <h1>Header</h1>
</div>
</head>


<body>
<div class="w3-container"; name="TOC"> 
  <h2>Table of Content</h2>
  <ul>
    <li>About</li>
    <li>test 1</li>
    <li>test 1</li>
    <li>test 1</li>
  </ul>
</div>
<section class="container"; name="about"> 
  <h2>About</h2>
  <p>London is the most populous city in the United Kingdom,
  with a metropolitan area of over 9 million inhabitants.</p>
  <hr>
</section>

<article class="container"; name="test"> 
  <h2>Paris</h2>
  <?php 
  include("ajax.php");
  ?>
  <hr>
</article>

<section class="container"; name="xtra"> 
  <h2>Tokyo</h2>
  <p>Tokyo is the center of the Greater Tokyo Area,
  and the most populous metropolitan area in the world.</p>
  <hr>
</section>

</body>

<footer>
<?php 
  include('C:\xampp\htdocs\mp_project\ui\bottombar.html');
  ?>

</footer>
</html> 
