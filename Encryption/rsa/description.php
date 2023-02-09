<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../shared_css/style(t).css">

<main>
  <div class="faq-heading">
    <h1 style="font-size: 35px; font-size: 35px;margin-bottom: 0px;">
      RIVEST-SHAMIR-ADLEMAN (RSA)
    </h1>
    <p style="padding-top: 0px; margin-top: 0px;"> Cryptography | Public-Key Cryptosystem</p>
    <div <section class="faq-container">
      <div class="faq-one">
        <!-- faq question -->
        <h1 class="faq-page">What is RSA?</h1>
        <!-- faq answer -->
        <div class="faq-body">
          <p style="font-size:18px">RSA is an algorithm for public-key cryptography that is widely used for secure data
            transmission. It stands for Ron Rivest, Adi Shamir, and Leonard Adleman, who first publicly described the
            algorithm in 1977. It involves the generation of two large prime numbers, and the calculation of a
            public key and a private key. The public key is used for encrypting messages and verifying digital
            signatures,
            while the private key is used for decrypting messages and creating digital signatures. RSA is widely used
            for
            secure communication, including for SSL/TLS certificates, digital signatures, and encryption of emails and
            files.
          </p>
        </div>
      </div>
      <hr class="hr-line">

      <div class="faq-two">
        <!-- faq question -->
        <h1 class="faq-page">Background (Brief)</h1>
        <!-- faq answer -->
        <div class="faq-body">
          <p style="font-size:18px">Rivest-Shamir-Adleman (RSA) Encryption is a public-key-based cryptosystem, named
            after Ron
            Rivest, Adi Shamir
            and Len Adleman who invented it in 1977. It is one of the oldest algorithm and one of the first practical
            public-key cryptosystems. Up till now, it is still the most widely-used public key
            cryptography algorithm in the world. It can be used to encrypt a message without the need to exchange a
            secret key
            separately.
            <br>
            The algorithm of RSA can be used for both public key encryption and digital signatures, and its security is
            based
            on the difficulty of solving certain mathematical problems such as factoring large integers.
            <br>
            A public encryption method relies on a public encryption algorithm, public decryption algorithm and public
            encryption key generally. Anyone can see the public key as well as encryption algorithm and encrypt a
            message
            using it.
            However, the actual decryption can happen by using the private key only which is kept secret.
          </p>
        </div>
      </div>
      <hr class="hr-line">

      <div class="faq-three">
        <!-- faq question -->
        <h1 class="faq-page">Application/Process</h1>
        <!-- faq answer -->
        <div class="faq-body">
          <p style="font-size:18px">A Classical Scenario would be as shown in the photo:</p>
          <center>
            <img src="../../ui/img/Encryption/rsa/rsa_exp.jpg" style="width:500px ; height:350px">
          </center>
          <p style="font-size:18px"><b>The Problem:</b> Sally would like to send a message to Tom which contains company
            secret, assuming that the hackers might try and peek at the content while it is in transit. How can Sally
            confidentially deliever this message?<br><br>
          </p>
          <p style="font-size:18px"><b>Solution:</b><br>
            For this example, taking "HI" as the example for the content of the message,
            <br>
            <br>
            Public key: (5,14) - Sally, the sender, will use it to encrypt the message.
            <br>
            Private Key: (17,14) - The first number is private and only known to Tom, the receiver. Tom would use this
            pair to
            decrypt the messages.
            <br>
            <br>
            1. Sally encrypt the message "HI" using (5,14).
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;i) The first step is to split and convert "HI" into an integer. According ASCII
            table, "H"
            and
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "I" is
            mapped to an integer of 72 and 73 respectively. For simplicity, let's say that "H" is
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mapped to 8 and "I" is
            mapped to 9
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;ii) Encrypt the integer of both letters, 8 and 9.
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"H" - 8<sup>5</sup> mod 14 = 8<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"I" - 9<sup>5</sup> mod 14 = 11
            <br>
            <br>
            2. Sally would then send the result, 0 and 1, to Tom. During the transit, if the hackers peek and see the
            message.
            They would only view these numbers which tells them nothing.
            <br>
            <br>
            3. Tom would decrypt the message sent by Sally using (17,14)
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;i) 4<sup>17</sup> mod 14 = 8 & 11<sup>17</sup> mod 14 = 9<br>
            &nbsp;&nbsp;&nbsp;&nbsp;ii) The result would be "HI". Tom map it back to the characters, "HI", getting the
            original message
            back.
            <br>
            <br>
            <br>
          </p>
          <h3>One question that everyone may have would be how do those 2 pairs of number generated?</h3>
          <p style="font-size:18px">
            In this example, Tom generates these two pairs of numbers. The first pair of
            numbers (5, 14) is given to everyone to access, while he keeps the second pair secret <small>(specifically
              the 1st
              part -
              17, the 2nd part - 14 is in the
              first pair, thus is public)</small> so only he can decrypt messages. This is the process:
            <br>
            <br>
            1. Choose 2 prime numbers, p and q. In a Real world, it should be large due to security sake, however, for
            example
            the number chosen would be small to simplify things.
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Let, <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = 2
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;q = 7
            <br>
            <br>
            2. Compute n = p * q. The example below was the modulus used previous:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n = 2 * 7<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= 14
            <br>
            <br>
            <br>
            3. Compute Φ(n), known as Euler’s totient. This counts the number of positive integers less than n which
            are coprime to n (i.e. integers whose GCD with n is 1). There happens to be a equation for this, since p and
            q are relatively prime.
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Φ(n) = (p — 1) * (q — 1) = 6
            <br>
            <br>
            According to the range (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14), integers that coprime with 14: <b>3,
              5, 11
              & 13</b>
            <br>
            <br>
            <br>
            <br>
            4. Compute e (for encryption) such that: <br>
            &nbsp;&nbsp;&nbsp;&nbsp;T1 < e < Φ(n) and GCD(e, Φ(n))=1 <br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;We only have these options: 2,3,4,5 since Φ(n) = 6 in our case but only <b> 5</b>
              meets the second criterion.
              <br>
              <br>
              <br>
              5. Compute d (for decryption) where:
              d * e ≡ 1 mod Φ(n)
              d * 5 ≡ 1 mod 6
              <br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;This shows that d can be either 5, 11, 17, or so on. Thus, the value choose is d =
              17.
              <br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;That is how the Public and Private Key are generated:<br>
              &nbsp;&nbsp;&nbsp;&nbsp;Public Key: (e, n) = (5, 14)<br>
              &nbsp;&nbsp;&nbsp;&nbsp;Private Key: (d, n) = (17, 14)
              <br>
              <br>
              Senders can use the first pair of numbers to encrypt messages, and the receiver can use the second pair of
              numbers to decrypt messages.
              <br>
              <br>
              <br>
              The basic principle underlying RSA is that for all integers 0 ≤ m < n, it is practical to find positive
                integers e, d, and n such that: (m<sup>e</sup> mod n)<sup>d</sup> mod n=m and such that even if e and n
                are made
                public, it is extremely
                hard to find out what d is.
          </p>
          <br>
          <Center><span style="font-size:25px"><b>To sum it up: </b> </span></Center>
          <?php
              include('slideshow.php')
              ?>
        </div>
      </div>
      <hr class="hr-line">

      <div class="faq-four">
        <!-- faq question -->
        <h1 class="faq-page">Video</h1>
        <!-- faq answer -->
        <div class="faq-body">
          <br>
          <Center>
          <h3>Watch the video to gain deeper understanding!</h3>
          <br>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/AECvBJ5AwBk" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
            </Center>
          </section>
        </div>
      </div>
      <hr class="hr-line">

      <div class="faq-five">
        <!-- faq question -->
        <h1 class="faq-page">Advantages & Disadvantages</h1>
        <!-- faq answer -->
        <div class="faq-body">
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
                Can be implemented relatively quickly
              </td>
              <td>
                Might fail occasionally due to RSA only employs asymmetric encryption and complete encryption requires
                both
                symmetric and asymmetric encryption
              </td>
            </tr>
            <tr>
              <td>
                Secure and reliable for sending private information
              </td>
              <td>
                A third party is needed to confirm the validity of public keys at times
              </td>
            </tr>
            <tr>
              <td>
                Distribution of public key to consumers is simple
              </td>
              <td>
                Decryption for RSA requires intensive processing and a large amount of processing power on the end of
                receiver.
              </td>
            </tr>
            <tr>
              <td>
                Promise Confidentiality, integrity & Authenticity (CIA) as well as non-reputability of data and
                electronic communications
              </td>
              <td>
                Decryption for RSA requires intensive processing and a large amount of processing power on the end of
                receiver.
              </td>
            </tr>
          </Table>
        </div>
      </div>
      <hr class="hr-line">
      </section>
</main>
<br>
<br>

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