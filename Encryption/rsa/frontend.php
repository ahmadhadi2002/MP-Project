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
    <h2>Let's Try it Out!</h2>
    <?php
    include("index.php");
    ?>
    <hr>
  </article>

  <div>
    <?php
    include('../quiz/rsa_quiz.php');
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