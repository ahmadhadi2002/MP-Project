<!DOCTYPE html>
<html>
<link rel="newest stylesheet" type="text/css" href="../shared_css/style(t).css">

<main>
  <div class="faq-heading">
    <h1 style="font-size: 35px; font-size: 35px;margin-bottom: 0px; ">
      CAESAR CIPHER
    </h1>
    <p style="padding-top: 0px; margin-top: 0px;"> Cryptography | Substitution Cipher</p>
    <div <section class="faq-container">
      <div class="faq-one">
        <!-- faq question -->
        <h1 class="faq-page">What is Caesar Cipher?</h1>
        <!-- faq answer -->
        <div class="faq-body">
          <section class="container" name="about">
            <p style="font-size:18px">The Caesar Cipher is a simple encryption technique in which each letter in the
              plain text
              is shifted a certain number of places down the alphabet. The number of positions the letters are shifted
              by is
              known as the key. The Caesar Cipher is easily broken and is not considered secure for modern
              communications, but
              it was used historically as a way of obscuring text. Currently, it served as an educational purpose to
              educate
              people on cryptography.</p>
          </section>
        </div>
      </div>
      <hr class="hr-line">

      <div class="faq-two">

        <!-- faq question -->
        <h1 class="faq-page">Background (Brief)</h1>

        <!-- faq answer -->

        <div class="faq-body">
          <section class="container" ; name="hist">
            &nbsp;&nbsp;<h2><u> Background (brief)</u></h2>
            <p style="font-size:18px">
              Caesar cipher named after Julius Caesar, who, used it with a shift of three (Encrypting: A -> D,
              Decrypting: D ->
              A) to protect messages of military significance according to Suetonius. While
              Caesar's was the first recorded use of this scheme, other substitution ciphers are known to have been used
              earlier.
              <br>
              Being one of the earliest and simplest methods of encryption technique, till this day it has been used
              beside
              depsite being one of the oldest cryptography. Examples would be the personal
              advertisements section in newspapers in the 19th Century would used it something to exchange messages
              encrypted
              using simple cipher schemes or lovers while enging in secret communications.
              <br>
              Even as late as 1915, Caesar cipher was in use bythe Russian army as a replacement for a
              complicated ciphers proved to pose difficulties for their troops to master. Even the German and Austrian
              cryptanalysts had little difficulty in decrypting their messages.
              <br>
              Many of the cipher technique has referenced to Caesar Cipher such as Vigenère Cipher and ROT13.

          </section>
        </div>
      </div>
      <hr class="hr-line">

      <div class="faq-three">

        <!-- faq question -->
        <h1 class="faq-page">Application/Process</h1>

        <!-- faq answer -->
        <div class="faq-body">
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
                <tr style="background-color: red;">
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

                <tr style="background-color: green;">
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
                  <td style="background-color: red;">PlainText:</td>
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
                  <td style="background-color: green;">Ciphertext:</td>
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
        </div>
      </div>
      <hr class="hr-line">

      <hr class="hr-line">

      <div class="faq-five">

        <!-- faq question -->
        <h1 class="faq-page">Advantages & Disadvantages</h1>

        <!-- faq answer -->
        <div class="faq-body">
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
        </div>
      </div>
      <hr class="hr-line">


      </section>
</main>

</html>

<script>
  var faq = document.getElementsByClassName("faq-page");
  var i;

  for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
      /* Toggle between adding and removing the "active" class,
      to highlight the button that controls the panel */
      this.classList.toggle("active");

      /* Toggle between hiding and showing the active panel */
      var body = this.nextElementSibling;
      if (body.style.display === "block") {
        body.style.display = "none";
      } else {
        body.style.display = "block";
      }
    });
  }
</script>