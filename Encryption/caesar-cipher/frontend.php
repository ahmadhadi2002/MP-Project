<!DOCTYPE html>
<html>
<title>Caesar Cipher</title>
<?php
require "../../ui/navbar.html";
?>


<body>
  <section class="container" ; name="about">
    <h2>About</h2>
    <p>London is the most populous city in the United Kingdom,
      with a metropolitan area of over 9 million inhabitants.</p>
    <hr>
  </section>

  <section class="container" ; name="about">
    <h2><u>What is Vigenère cipher?</u></h2>
    <p style="font-size:18px">Vigenère cipher is a method of encryption uses a simple substitution to encode a message, Polyalphabetic
      Substitution Cipher. It was first
      described by Blaise de Vigenère in the 16th century and considered to be an improved version of the Caesar
      cipher. The Vigenère cipher uses a keyword to generate a series of alphabets, with each alphabet shifted by a
      different amount, the message is encrypted by replacing each letter of the message with the corresponding
      letter of the shifted alphabet. The Vigenère cipher is relatively simple to implement but can be quite secure when
      used correctly.</p>
    <hr>
  </section>

  <article class="container" ; name="test">
    <h2>Let's Try it Out!</h2>
    <?php
    include("index.php");
    ?>
    <hr>
  </article>

  <section class="container" ; name="xtra">
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