<!DOCTYPE html>
<html>
<link rel="icon" type="image/x-icon" href="/mp-project/ui/img/cs_logo.png">
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
    <div>
    <?php
    include('../instruction/aes.html');
    ?>
    </div>
    <hr>
    <div>
    <span>
        <h2>&nbsp; - Online Tool </h2>
    </span>
       <?php
    include("index.php");
    ?>
    </div>
    <hr>
  </section>

  <section class="container" ; name="quiz">
    <h2><u>Mini Activity</u></h2>
    <?php
    include('../quiz/aes_quiz.php');
    ?>
    <hr>
  </section>


  <section class="container" ; name="terminal">
    <h2><u>Sample Code (python language)</u></h2>
    <span style="font-size:18px"> 
      The source code below is the implementation of the idea for the encryption techcnique, it is written using the python programming language. Hit the run below to try it out now! 
      <br><span style="font-size:12px"></span> <b>(Note: You are require to pre-install the crypto library beforehand to run the code)</b></span>
      <?php
      require "terminal.php";
      ?>

  </section>
</body>

<footer>
  <?php
  include('C:\xampp\htdocs\mp-project\ui\bottombar.html');
  ?>
</footer>

</html>