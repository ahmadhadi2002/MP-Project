<!DOCTYPE html>
<html>
<title>Caesar Cipher</title>
<?php
require "../../ui/navbar.html";
?>


<body>
  <section class="container" ; name="about">
    <h1 style="font-size: 35px">CAESAR CIPHER</h1>
    Cryptography | Substitution Cipher
    <h2><u>What is Caesar Cipher?</u></h2>
    <p style="font-size:18px">The Caesar Cipher is a simple encryption technique in which each letter in the plain text
      is shifted a certain number of places down the alphabet. The number of positions the letters are shifted by is
      known as the key. The Caesar Cipher is easily broken and is not considered secure for modern communications, but
      it was used historically as a way of obscuring text. Currently, it served as an educational purpose to educate
      people on cryptography.</p>
    <hr>
  </section>

  <section class="container" ; name="hist">
    &nbsp;&nbsp;<h2><u> Background (brief)</u></h2>
    <p style="font-size:18px">
      Caesar cipher named after Julius Caesar, who, used it with a shift of three (Encrypting: A -> D, Decrypting: D ->
      A) to protect messages of military significance according to Suetonius. While
      Caesar's was the first recorded use of this scheme, other substitution ciphers are known to have been used
      earlier.
      <br>
      Being one of the earliest and simplest methods of encryption technique, till this day it has been used beside
      depsite being one of the oldest cryptography. Examples would be the personal
      advertisements section in newspapers in the 19th Century would used it something to exchange messages encrypted
      using simple cipher schemes or lovers while enging in secret communications.
      <br>
      Even as late as 1915, Caesar cipher was in use bythe Russian army as a replacement for a
      complicated ciphers proved to pose difficulties for their troops to master. Even the German and Austrian
      cryptanalysts had little difficulty in decrypting their messages.
      <br>
      Many of the cipher technique has referenced to Caesar Cipher such as Vigenère Cipher and ROT13.
      <hr>
  </section>

  <section class="container" ; name="app">
    <h2><u>Application/Process</u></h2>
    <div
      style="background-color: white; height: auto; width: auto;  border: 1px solid black; margin: auto; overflow: hidden;">
      <p style="font-size:20px">
        &nbsp;<u>Input</u>
        <br>
        &nbsp;Plaintext : MORNING
        <br>
        &nbsp;shift : 4 (forward)
        <br>
        <br>
        &nbsp;<u>Output</u>
        <br>
        &nbsp; Ciphertext : QSVRMRK
      <table style="none !important; border: 1px solid black;">
        <tbody>
          <tr>
            <td>PlainText:</td>
            <td>M</td>
            <td>O</td>
            <td>R</td>
            <td>N</td>
            <td>I</td>
            <td>N</td>
            <td>G</td>

          </tr>

          <tr>
            <td>Keyword:</td>
            <td>13th + 4 = 17th</td>
            <td>15th + 4 = 19th</td>
            <td>18th + 4 = 22nd</td>
            <td>14th + 4 = 18th</td>
            <td>9th + 4 = 13th</td>
            <td>14th + 4 = 18th</td>
            <td>7th + 4 = 11th</td>

          </tr>

          <tr>
            <td>Ciphertext:</td>
            <td>Q</td>
            <td>S</td>
            <td>V</td>
            <td>R</td>
            <td>M</td>
            <td>R</td>
            <td>K</td>

          </tr>
        </tbody>
      </table>
      <br>
    </div>
    <div
      style="background-color: white; height: auto; width: auto;  border: 1px solid black; margin: auto; overflow: hidden;">
      <p style="font-size:20px">
        &nbsp;<u>Input</u>
        <br>
        &nbsp;Plaintext : MORNING
        <br>
        &nbsp;shift : 4 (Backware)
        <br>
        <br>
        &nbsp;<u>Output</u>
        <br>
        &nbsp; Ciphertext : IKNJEJC
      <table style="none !important; border: 1px solid black;">
        <tbody>
          <tr>
            <td>PlainText:</td>
            <td>M</td>
            <td>O</td>
            <td>R</td>
            <td>N</td>
            <td>I</td>
            <td>N</td>
            <td>G</td>

          </tr>

          <tr>
            <td>Keyword:</td>
            <td>13th - 4 = 9th</td>
            <td>15th - 4 = 11th</td>
            <td>18th - 4 = 14nd</td>
            <td>14th - 4 = 10th</td>
            <td>9th - 4 = 5th</td>
            <td>14th - 4 = 10th</td>
            <td>7th - 4 = 3rd</td>

          </tr>

          <tr>
            <td>Ciphertext:</td>
            <td>I</td>
            <td>K</td>
            <td>N</td>
            <td>J</td>
            <td>E</td>
            <td>J</td>
            <td>C</td>

          </tr>
        </tbody>
      </table>
      </p>
      <br>
    </div>

    <p style="font-size:18px">
      <b>Encryption:</b><br>
      An integer value to cipher a given text, it isknown as a shift indicating the number of positions each
      letter of the text would be moved either down or up.
      The encryption can be represented using modular arithmetic by first transforming the letters into numbers,
      according to the scheme, A = 0, B = 1, till Z = 25. Encryption of a letter by a shift n can be described
      mathematically as follows:
    </p>
    <div style="background-color: white; height: auto; width: 325px;  border: 1px solid black; margin: auto;">
      <p style="font-size:20px">
        &nbsp;<u>Encryption Phase with shift n</u><br>
        &nbsp;E<sub>n</sub>(x)=(x+n)mod 26
        <br>
        <br>
        &nbsp;<u>Decryption Phase with shift n</u><br>
        &nbsp; D<sub>n</sub>(x)=(x-n)mod 26
      </p>
    </div>
    <p style="font-size:18px">
      <b>Decryption:</b><br>
      Just apply the given shift in the opposite direction to decrypt the original text or use the cyclic
      property of the cipher under modulo, hence, the obersvation can be made is:
    </p>
    <div style="background-color: white; height: auto; width: 325px;  border: 1px solid black; margin: auto;">
      <p style="font-size:20px">
        
        &nbsp;Cipher(n) = Un-cipher(26-n)
        
      </p>
    </div>
    <br>
    <p style="font-size:18px"> Watch here for more information:</p>
    <iframe width="450" height="300" src="https://www.youtube.com/embed/5v3U6h48eQ8" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

    <hr>
  </section>

  <section class="container" ; name="com">
    <h2><u>Advantage & Disadvantage</u></h2>
    <table>
      <tr>
        <th style="width:50%">
          Advantage
        </th>
        <th style="width:50%">
          Disadvantage
        </th>
      </tr>
      <tr>
        <td>
          Easy to use and implement as well as provide minimum security, suitable for beginners to learn about
          encryption
        </td>
        <td>
          Simple structure, not secure against modern decryption methods
        </td>
      </tr>
      <tr>
        <td>
          One of the best methods to use if the system cannot use any complicated coding techniques
        </td>
        <td>Vulnerable to known-plaintext attacks in the event where an attacker has access to both the encrypted and
          unencrypted versions of the same messages.
        </td>
      </tr>
      <tr>
        <td>
          Use of only a short key in the entire process
        </td>
        <td>
          Does not provide confidentiality, integrity, and authenticity in a message
        </td>
      </tr>
      <tr>
        <td>

        </td>
        <td>
          Unsuitable for long text encryption as it can be crack easily.
        </td>
      </tr>
      <tr>
        <td>

        </td>
        <td>
          Vulnerable to a brute force attack due to the small number of possible keys, attackers can easily attempt all
          possible keys until the correct
          one is found.
        </td>
      </tr>
      <tr>
        <td>

        </td>
        <td>
          unsuitable for secure communication as it broke easily
        </td>
      </tr>
    </table>
    <hr>
  </section>

  <article class="container" ; name="test">
    <h2>Let's Try it Out!</h2>
    <?php
    include("index.php");
    ?>
    <hr>
  </article>

</body>

<footer>
  <?php
  include('C:\xampp\htdocs\mp_project\ui\bottombar.html');
  ?>

</footer>

</html>