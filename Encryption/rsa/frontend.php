<!DOCTYPE html>
<html>
<title>Rivest-Shamir-Adleman</title>

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

  <section class="container" ; name="quiz">
  <h2><u>Mini Activity</u></h2>
    <?php
    include('../quiz/rsa_quiz.php');
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