<!DOCTYPE html>
<html>
<title>Vigenère Cipher</title>
<?php
require "../../ui/navbar.html";
?>

<body>

  <section class="container" ; name="about">
    <h1 style="font-size: 35px">VIGENÈRE CIPHER</h1>
    Cryptography | Poly Alphabetic Cipher
    <br>
    <h2><u>What is Vigenère cipher?</u></h2>
    <p style="font-size:18px">Vigenère cipher is a method of encryption uses a simple substitution to encode a message,
      Polyalphabetic
      Substitution Cipher. It was first
      described by Blaise de Vigenère in the 16th century and considered to be an improved version of the Caesar
      cipher. The Vigenère cipher uses a keyword to generate a series of alphabets, with each alphabet shifted by a
      different amount, the message is encrypted by replacing each letter of the message with the corresponding
      letter of the shifted alphabet. The Vigenère cipher is relatively simple to implement but can be quite secure when
      used correctly.</p>
    <hr>
  </section>

  <section class="container" ; name="hist">
    <h2><u>Background (Brief)</u></h2>
    <p style="font-size:18px">Although the Vigenère cipher was first described by Blaise de Vigenère in the
      16th century, it is believed that the cipher was actually invented by Giovan Battista Bellaso who
      described it in a book published in 1553. The cipher was later misattributed to Vigenère, leading to it being
      called the Vigenère cipher.
      <br>
      The Vigenère cipher was widely used in Europe during the 16th and 17th centuries, and was considered to be
      unbreakable for a long time. However, in the 19th century, Charles Babbage and Friedrich Kasiski independently
      discovered methods for breaking the cipher, making it possible to decode messages encrypted using the Vigenère
      cipher. Despite it, the Vigenère cipher continued to be widely used and was still in use during World War I
      and World War II.
      <br>
      Today, the Vigenère cipher is considered to be relatively weak and is not used for secure communications. However,
      it remains an important historical cipher and is still taught in many cryptography classes.
    </p>
    <hr>
  </section>

  <section class="container" ; name="app">
    <h2><u>Application</u></h2>
    <div
      style="background-color: white; height: auto; width: auto;  border: 1px solid black; margin: auto; overflow: hidden;">
      <p style="font-size:20px">
        &nbsp;<u>Input</u>
        <br>
        &nbsp;Plaintext : MORN ING
        <br>
        &nbsp;Keyword : TEST
        <br>
        <br>
        &nbsp;<u>Output</u>
        <br>
        &nbsp; Ciphertext : FSJG GRY
      <table style="none !important; border: 1px solid black;">
        <tbody>
          <tr>
            <td>PlainText:</td>
            <td>M</td>
            <td>O</td>
            <td>R</td>
            <td>N</td>
            <td>(empty)</td>
            <td>I</td>
            <td>N</td>
            <td>G</td>

          </tr>

          <tr>
            <td>Keyword:</td>
            <td>T</td>
            <td>E</td>
            <td>S</td>
            <td>T</td>
            <td>(empty)</td>
            <td>T</td>
            <td>E</td>
            <td>S</td>

          </tr>

          <tr>
            <td>Ciphertext:</td>
            <td>F</td>
            <td>S</td>
            <td>J</td>
            <td>G</td>
            <td>(empty)</td>
            <td>B</td>
            <td>R</td>
            <td>Y</td>

          </tr>
        </tbody>
      </table>

      <br>
      <br>
      &nbsp;For generating key, the given keyword is repeated
      in a circular manner until it matches the length of
      the plain text.
      <br>
      &nbsp;The keyword "TEST" generates the key "TESTES"
      <br>
      &nbsp;The plain text is then encrypted using the process
      explained below.
      </p>
    </div>

    <p style="font-size:18px">
      <b>Encryption:</b><br>
      The first letter of the plaintext, M is paired with the first letter of the key, T. So use row M and column T of
      the Vigenère square (Row - Plaintext, Column - Key), namely F. Similarly, for the second letter of the plaintext,
      the second letter of the key is used, the letter at row O, and column E is S. The rest of the plaintext is
      enciphered in a similar fashion.
    </p>
    <div>
      <?php
      include("slideshow.php");
      ?>
    </div>
    <p style="font-size:18px">
      <b>Decryption:</b><br>
      Performed by going to the row in the table corresponding to the key, finding the position of the
      ciphertext letter in this row, and using the column’s label as the plaintext. For example (refer to the image in
      the slideshow):<br>
      Red - In row "T" (from TEST), the ciphertext F appears in column "M", which is the first plaintext letter.
      Green - In row "E" (from TEST), locate the ciphertext S which is found in column "O", thus O is the second
      plaintext letter.
    </p>


    <div style="background-color: white; height: auto; width: auto;  border: 1px solid black; margin: auto;">
      <p style="font-size:20px">
        &nbsp;<u>Encryption</u><br>
        &nbsp;E<sub>i</sub> = (P<sub>i</sub> + K<sub>i</sub>) mod 26<br>
        &nbsp;Note: The plaintext(P) and key(K) are added modulo 26.<br>
        <br>
        &nbsp;<u>Decryption</u><br>
        &nbsp; D<sub>i</sub> = (E<sub>i</sub> - K<sub>i</sub> + 26) mod 26<br>
        &nbsp; Note: D<sub>i</sub> denotes the offset of the i-th character of the plaintext. For example, offset of A
        is 0 and of B is 1 and so
        on.
      </p>
    </div>
    <br>
    <p style="font-size:18px"> Watch here for more information:</p>
    <iframe width="450" height="300" src="https://www.youtube.com/embed/5ISnCm4_V-Y" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

    <hr>
  </section>

  <section class="container" ; name="com">
    <h2><u>Advantage & Disadvantage</u></h2>
    <Table>
      <tr>
        <th>
          Advantage
        </th>
        <th>
          Disadvantage
        </th>
      </tr>
      <tr>
        <td>
          Uses a different substitution for each letter of the plaintext which makes it more secure than a simple
          substitution cipher such as Caesar cipher.
        </td>
        <td>
          Vulnerable to frequency analysis, a method to break a cipher by analyzing the frequency of letters in the
          ciphertext.
        </td>
      </tr>
      <tr>
        <td>
          Uses a keyword to generate the series of alphabets which can be easily changed to provide a different
          encryption.
        </td>
        <td>
          The length of the keyword used in the Vigenère cipher is limited, it can be easily broken if the key is too
          short.
        </td>
      </tr>
      <tr>
        <td>
          Relatively simple to implement and does not require advanced mathematical knowledge.
        </td>
        <td>
          Not secure enough for modern use, as more advanced cipher methods have been developed that provide stronger
          security.
        </td>
      </tr>
    </Table>
    <br>
    <p style="font-size:18px">Overall, while the Vigenère cipher has some advantages, it is not considered secure enough
      for modern use and has been largely replaced with more advanced ciphers.</p>
    <hr>
  </section>

  <article class="container" ; name="test">
    <h2><u>Let's Try it Out!</u></h2>
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