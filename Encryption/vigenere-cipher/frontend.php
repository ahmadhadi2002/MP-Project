<!DOCTYPE html>
<html>
<title>Vigenère Cipher</title>
<?php
require "../../ui/navbar.html";
?>

<body>
  <?php
  include("description.php");
  ?>

  <article class="container" ; name="test">
    <h2><u>Let's Try it Out!</u></h2>
    <?php
    include("index.php");
    ?>
    <hr>
  </article>
  <div>
    <?php
    include('../quiz/vg_quiz.php');
    ?>
    <hr>
  </div>

  <div>
    <center>
      <iframe style='max-width:100%; border: none; height: 375px; width: 700px;' height=375 width=700
        src=https://www.interviewbit.com/embed/snippet/c82915252b47afca29dc
        title='Interviewbit Ide snippet/c82915252b47afca29dc' loading="lazy" allow="clipboard-write" allowfullscreen
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