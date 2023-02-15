<!DOCTYPE html>
<html>
<link rel="icon" type="image/x-icon" href="/mp-project/ui/img/cs_logo.png">
<title>One-Time Pad</title>

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
      include('../instruction/otp.html');
      ?>
    </div>
    <hr>
    <div>
      <span>
        <h2>&nbsp; - Online Tool </h2>
      </span>
      <?php
      include("tool.php");
      ?>
    </div>
    <hr>
  </section>

  <section class="container" ; name="quiz">
    <h2><u>Mini Activity</u></h2>
    <?php
    include('../quiz/otp_quiz.php');
    ?>
    <hr>
  </section>


  <section class="container" ; name="terminal">
    <h2><u>Sample Code (python language)</u></h2>
    <span style="font-size:18px">
      The source code below is the implementation of the idea for the encryption techcnique, it is written using the
      python programming language. Hit the run below to try it out now!
      <br><span style="font-size:12px"></span> <b>(Note: You are require to pre-install the crypto library beforehand to
        run the code)</b></span>
    <br>
    <iframe style='max-width:100%; border: none; height:800px; width: 100%;' height=375 width=700
      src=https://www.interviewbit.com/embed/snippet/345e1d2d796ce928ff5d
      title='Interviewbit Ide snippet/345e1d2d796ce928ff5d' loading="lazy" allow="clipboard-write" allowfullscreen
      referrerpolicy="unsafe-url"
      sandbox="allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation allow-popups-to-escape-sandbox"></iframe>


  </section>
</body>

<footer>
  <?php
  include('C:\xampp\htdocs\mp-project\ui\bottombar.html');
  ?>
</footer>

</html>