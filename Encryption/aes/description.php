<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../shared_css/style(t).css">

<main>
  <div class="faq-heading">
    <h1 style="font-size: 35px; font-size: 35px;margin-bottom: 0px;">
      ADVANCED ENCRYPTION STANDARD (AES)
    </h1>
    <p style="padding-top: 0px; margin-top: 0px;"> Cryptography | Symmetric Key Encryption Cipher</p>
    <p style="font-size:18px">The Advanced Encryption Standard (AES) algorithm, also referred to as
      the Rijndael
      algorithm, is a symmetrical block
      cipher algorithms that transform a block of 128 bits message into a 128 bits of
      ciphertext using either 128, 192 or 256 bit keys, making it a strong, secure and
      exponentially stronger algorithm.
      <br>
      The AES algorithm use a substitution-permutation, or SP network, with several rounds to
      generate ciphertext, the
      number of rounds will be determined by the key length used.
    </p>
    <p style="font-size:18px"> In each case, all the rounds are identical except for the last round
      where it would not
      have the mix column step. AES arranges
      the bytes/bits in a 4x4 grid instead of one line like most ciphers. </p>
    <center>
      <img src="../../ui/img/Encryption/aes/byte.jpg">
    </center>

    In conclusion, AES is a trusted standard algorithm and it is used by the United States
    government and other
    organizations. Although extremely efficient in the 128-bit form, AES also uses 192- and 256-bit
    keys
    for very demanding encryption purposes. It is widely considered invulnerable to all attacks
    except for brute force.
    Regardless, many internet security experts believe that AES will eventually be regarded as the
    go-to standard for
    encrypting data in the private sector.
    <br>
    <br>
    <div>
      <section class="faq-container">


        <div class="faq-two">

          <!-- faq question -->
          <h1 class="faq-page">Background (Brief)</h1>

          <!-- faq answer -->

          <div class="faq-body">
            <p style="font-size:18px">With the gold standard then, Data Encryption Standard (DES), becoming
              much vulnerable
              and
              outdated as time passed, it increasingly vulnerable to brute-force attacks and the National
              Institute of
              Standards
              & Technology (NIST) required a newer and more secure gold standard. Thus, NIST announced a
              competition for the
              successor to DES and made it open to public, and the
              encryption algorithm was available to access worldwide. NIST selected the Rijndael algorithm
              of Belgian
              cryptographers Joan Daemen and Vincent Rijmen as the winner in October 2000, over the
              progression of three
              competitive rounds and fierce cryptanalysis by the world's leading encryption specialists.
              Due to it perfect
              combination of security, performance, efficiency, implementability and flexibility.
              <br>
              <br>
              In 2003, AES was approved for use as an encryption technique for information classified
              Secret and Top secret in the U.S. government.
            </p>
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
              <p style="font-size:20px">
                The Advanced Encryption Standard (AES) is a symmetric encryption algorithm that uses the
                same key for both
                encryption and decryption. It requires the follow parameters as follows:
                <br>
              </p>
              <ul>
                <li style="font-size:20px">Encoded/Decoded Data</li>
                Data to encrypt or decrypt
                <br><br>
                <li style="font-size:20px">Key Size</li>
                To determine the number of rounds, number of transformation cycles that the algorithm goes
                through in order to
                encrypt the data.
                <br>
                Number of rounds in AES depends on the key length being used:
                <ul>
                  <li>128 bit keys length (3.4 x 10<sup>38</sup>)&nbsp;&nbsp;--> 10 rounds</li>
                  <li>192 bit keys length (6.2 x 10<sup>57</sup>)&nbsp;&nbsp;--> 12 rounds</li>
                  <li>256 bit keys length (1.1 x 10<sup>77</sup>)&nbsp;&nbsp;--> 14 rounds</li>
                </ul>
                <br>
                <li style="font-size:20px">Cipher Type</li>
                Determines how the plaintext is transformed into ciphertext during the encryption process of
                AES. Each cipher type
                has
                its own specific strengths and weaknesses in terms of security, speed, and error
                propagation. Therefore, the
                choice of
                cipher type depends on the specific requirements and constraints of the application.
                <br>
                Example of Cipher Type:
                <Ul>
                  <li>ECB (Electronic Codebook):</li>
                  <b>Strength:</b> Simple to implement and fast to execute.<br>
                  <b> Weakness: </b>Not secure in most cases, as repeating patterns in the plaintext will
                  result in repeating
                  patterns in
                  the ciphertext.
                  <br>
                  <br>
                  <li>CBC (Cipher Block Chaining):</li>
                  <b>Strength:</b> Avoids the repeating pattern issue of ECB.
                  <br><b>Weakness:</b> Requires a unique Initialization Vector (IV) for each encryption,
                  which must be transmitted
                  with the
                  ciphertext to the decryption process.<br>
                  <br>
                  <li>CFB (Cipher Feedback):</li>
                  <b>Strength:</b> Can be used for encryption of an individual bit or byte of data.
                  <br><b>Weakness:</b> Requires a unique Initialization Vector (IV) for each encryption,
                  which must be transmitted
                  with the ciphertext to the decryption process.<br>
                  <br>
                  <li>CTR (Counter):</li>
                  <b>Strength:</b> Parallelizable, meaning it can encrypt multiple blocks of data at the
                  same time.
                  <br><b>Weakness:</b> The same counter value must never be used twice with the same key.
                  <br><br>
                  <li>OFB (Output Feedback):</li>
                  <b>Strength:</b> Can be used for encryption of an individual bit or byte of data.<br>
                  <b>Weakness:</b> Requires a unique Initialization Vector (IV) for each encryption, which
                  must be transmitted
                  with the
                  ciphertext to the decryption process.<br>
                </Ul>
                <br>
                <li style="font-size:20px">Initialization Vector (IV)</li>
                An IV of 128 bits is generated and used in the encryption process to add randomness and
                avoid repetition.
                <br><br>
                <li style="font-size:20px">Passphrase</li>
                Used to generate a key for the encryption process. The passphrase would be converted into a
                secure
                encryption key via key derivation function, such as PBKDF2 (commonly used in OpenSSL). The
                passphrase can be any
                combination of
                characters, such as a phrase or sequence of words. It is used to ensure the confidentiality
                and security of
                the encrypted data. The strength of the encryption depends on the length, complexity and
                randomness of the
                passphrase.
              </ul>

              <p style="font-size:20px"> The AES encryption process involves several steps:</p>
              <ol>
                <li> Key Generation</li>
                A key of 128, 192, or 256 bits is generated to be used in the encryption process. This key
                is
                used to encrypt and decrypt the plaintext.
                <br>
                <br>

                <li> Initialization Vector (IV) Generation</li>
                An IV of 128 bits is generated. This value is used in the encryption
                process to add randomness and avoid repetition.
                <br>
                <br>

                <li> Add Round Key</li>
                The plaintext is XORed with the first round key.
                <br>
                <br>
                <li> Main Rounds</li>
                The encryption process consists of 10, 12, or 14 rounds of transformations (depending on the
                key
                size).
                <br>Each round consists of four transformations:
                <ul>
                  <li>Substitute Bytes (SubBytes)</li>
                  <li>Shift Rows</li>
                  <li>Mix Columns</li>
                  <li>Add Round Key.</li>
                </ul>
                <br>

                <li> Final Round</li>
                The final round consists of the same transformations as the main rounds, but with a few
                modifications.
                <br>
                <br>

                <li> Ciphertext</li> The final result of the encryption process is the ciphertext.
                <br>
                <br>

                <li> Decryption</li> The decryption process is simply the reverse of the encryption process.
                The ciphertext is
                XORed with the round keys in reverse order to obtain the original plaintext.
              </ol>
              <br>
              <?php
              include('slideshow.php')
                ?>
              <br>
              <p style="font-size:20px">The AES encryption algorithm is considered to be highly secure and is
                widely used in a
                variety of applications,
                including disk encryption, internet security, and others.
              </p>
              <hr>
            </section>
          </div>
        </div>
        <hr class="hr-line">

        <div class="faq-four">

          <!-- faq question -->
          <h1 class="faq-page">Video</h1>

          <!-- faq answer -->
          <div class="faq-body">
            <section class="container" ; name="test">
              Watch the video to gain deeper understanding!
              <br>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/nC0mjaUZd8w"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
              <hr>
            </section>
          </div>
        </div>
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
                  <th>
                    Advantage
                  </th>
                  <th>
                    Disadvantage
                  </th>
                </tr>
                <tr>
                  <td>
                    A robust protocol since it is implemented in both hardware and software.
                  </td>
                  <td>
                    Uses too simple algebraic structure
                  </td>
                </tr>
                <tr>
                  <td>
                    Nobody can hack your personal information as it can become a nightmare process.
                  </td>
                  <td>
                    Every bits of block is always encrypted in the same way
                  </td>
                </tr>
                <tr>
                  <td>
                    About 2<sup>128</sup> attempts are needed to break every 128 bits, making it highly
                    secure and almost
                    impossible to hack
                  </td>
                  <td>
                    Implementation of it with software is hard
                  </td>
                </tr>
                <tr>
                  <td>
                    it is more robust against hacking due to the usage of higher length key sizes such
                    as 128, 192 and 256
                    bits
                    for encryption
                  </td>
                  <td>
                    AES in Galois/Counter mode may affect performance and security due to it's
                    complexity when implementing in
                    software. Thus, taking both performance and security into considerations.
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