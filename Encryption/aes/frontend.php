<!DOCTYPE html>
<html>
<title>Advanced Encryption Standard</title>

<?php
require "../../ui/navbar.html";
?>

<body>
  <?php
  require "description.php";
  ?>

  <section class="container" ; name="test">
    <h2><u>Hand's On Experience!</u></h2>
    <?php
    include("index.php");
    ?>
    <hr>
  </section>

  <div>
    <?php
    include('../quiz/aes_quiz.php');
    ?>
    <hr>
  </div>


  <div>

    <?php
    require "terminal.php";
    ?>

  </div>
</body>

<footer>
  <?php
  include('C:\xampp\htdocs\mp-project\ui\bottombar.html');
  ?>
</footer>

</html>