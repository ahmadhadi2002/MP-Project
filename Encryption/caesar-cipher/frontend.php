<!DOCTYPE html>
<html>
<title>Caesar Cipher</title>
<?php
require "../../ui/navbar.html";
?>


<body>

  <?php
  include("description.php");
  ?>



  <br>
  <br>
  <article class="container" ; name="test">
    <h2>Let's Try it Out!</h2>
    <?php
    include("index.php");
    ?>
    <hr>
  </article>

  <div>
    <?php
    include('../quiz/cs_quiz.php');
    ?>
    <hr>
  </div>


  <div>
    <center>
    <iframe style='max-width:100%; border: none; height: 800px; width: 1000px;' height=800 width=1000
      src=https://www.interviewbit.com/embed/snippet/ec79d7cc037292e28d27
      title='Interviewbit Ide snippet/ec79d7cc037292e28d27' loading="lazy" allow="clipboard-write" allowfullscreen
      referrerpolicy="unsafe-url"
      sandbox="allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation allow-popups-to-escape-sandbox"></iframe>
    </center>
  </div>

</body>

<footer>
  <?php
  include('C:\xampp\htdocs\mp-project\ui\bottombar.html');
  ?>

</footer>

</html>