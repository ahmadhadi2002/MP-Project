<!DOCTYPE html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Encryption Homepage</title>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="style(m).css">
<script type="text/javascript" src="main.js"></script>
<html>

<body>
    <?php
    require "../ui/navbar.html";
    ?>

    <div>
        <div class="title">
            <h1>Data Encryption</h1>
        </div>
        <div>
            <div class="image">
                <img src="../ui/img/Encryption/main.jpeg" ; class="center">
            </div>
            <div class="information">
                <p class="textcenter">
                <h3><u>DEFINITION</u></h3>
                Translate data into another form, or code, so that only people with access to a
                secret key or password can read it. Data encryption is
                one of the most popular and effective data security methods used by organizations currently.
                As it not only ensures the confidentiality of data/messages, it also provides authentication
                and integrity, proving that the underlying data or messages have not been altered in any way from their
                original state.Encrypted data is commonly referred to as <b>ciphertext</b>, while unencrypted data is
                called <b>plaintext</b>.
                

                    </li>
                </ul>
                Encryption is a critical component of modern cybersecurity and is
                used to protect sensitive information, such as financial transactions, personal information, and
                confidential communications. Encryption algorithms, such as AES, RSA,
                and the Vigenère cipher, are used to encrypt and decrypt data. Encryption has become an essential tool
                for protecting sensitive information and is used by individuals, businesses, and government
                organizations around the world.
                <br>
                <br>
                <h3><u>BENEFITS</u></h3>
                The following are the importance as well as the benefits of Data Encryption:
                <ul>
                    <li><b>Cheap to Implement</b></li>
                    Mostly every device and operating system currently has implmented encryption technology such as
                    BitLocker by Microsoft Windows, which is designed to encrypt entire volumes of your hard disk.
                    <br>
                    <br>
                    <li><b>Keeps Sensitive Data Safe</b></li>
                    Keeps sensitive data safe by converting it into a coded format which only accessible with a secret
                    key or password, making it extremely difficult for unauthorized individuals to access or understand
                    the encrypted data despite intercepting it.
                    <br>
                    <br>
                    <li><b>Support Data Integrity</b></li>
                    It ensures that only authorized parties access the data and it also decreases the likelihood of a
                    hacker successfully tampering with data, and those actions going unnoticed
                    <br>
                    <br>
                    <li><b>Increase Consumer Trust</b></li>
                    It helps increase consumer trust by providing a secure means of transmitting and storing sensitive
                    information. Thus, organizations can build consumer trust by providing a secure environment for
                    sensitive information, reducing the risk of data breaches, and demonstrating their commitment to
                    privacy and security
                </ul>
                </p>



                <div>

                    <div class="scencenter">
                        <h2><u>Encryption Techniques</u></h2>
                        Primitive Encryption Technique  <br>
                        <button type="button" class="collapsible">Encryption Technique 1 (Caesar Cipher)</button>
                        <div class="content">
                            <img src="../ui/img/Encryption/cs.jpeg" class="scenimg">
                            <p>Caesar Cipher is a type of encryption technique named after Julius Caesar, who used it to
                                communicate with his officials. It is considered one of the earliest known examples of
                                cryptography and was used in ancient Rome. </p>
                            <a href="caesar-cipher/frontend.php"><button class="tryitbutton">Let's go!</button></a>
                        </div>
                        <br>
                        <button type="button" class="collapsible">Encryption Technique 2 (Vigenère Cipher)</button>
                        <div class="content">
                            <img src="../ui/img/Encryption/vig.jpeg" class="scenimg">
                            <p>Vigenère Cipher is a type of encryption techniquefirst described by Giovan Battista
                                Bellaso in 1553, but it was later misattributed to Blaise de Vigenère in the 19th
                                century. Despite this misattribution, the cipher has become known as the Vigenère
                                cipher. The cipher was considered secure for hundreds of years and was used by many
                                governments and military organizations to protect secret messages.</p>
                            <a href="vigenere-cipher/frontend.php"><button class="tryitbutton">Let's go!</button></a>
                        </div>
                        <br>
                        <br>
                        Advanced Encryption Technique <br>
                        <button type="button" class="collapsible">Encryption Technique 3 (AES)</button>
                        <div class="content">
                            <img src="../ui/img/Encryption/aes.jpg" class="scenimg">
                            <p>AES (Advanced Encryption Standard) is a widely-used symmetric encryption algorithm that
                                was selected by the National Institute of Standards and Technology (NIST) as the
                                standard for encrypting sensitive information.</p>
                            <a href="aes/frontend.php"><button class="tryitbutton">Let's go!</button></a>
                        </div>
                        <br>
                        <button type="button" class="collapsible">Encryption Technique 4 (RSA)</button>
                        <div class="content">
                            <img src="../ui/img/Encryption/rsa.png" class="scenimg">
                            <p>SA is a widely-used public key cryptography algorithm. It is named after its inventors,
                                Ron Rivest, Adi Shamir, and Leonard Adleman. RSA is used for secure data transmission
                                and is based on the mathematical properties of large prime numbers. </p>
                            <a href="rsa/frontend.php"><button class="tryitbutton">Let's go!</button></a>
                        </div>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>

    <div>
        <section class="faq-container">
            <div class="faq-one">
            <h1 class="faq-heading"><u>MORE INFORMATION</u></h1>
        </div>
            <div class="faq-one">
                <h1 class="faq-page">Need more explanation on Symmetric & Asymmetric Encryption?</h1>
                <div class="faq-body">
                    <table>
                        <tr>
                            <td colspan="2">
                                <center>
                                    For more information, you can watch the following video:
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <b>Asymmetric Encryption</b>
                            </th>
                            <th>
                                <b>Symmetric Encryption</b>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <iframe width="370" height="250" src="https://www.youtube.com/embed/zc2dq5XUWYg"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </center>

                            </td>
                            <td>
                                <center>
                                    <iframe width="370" height="250" src="https://www.youtube.com/embed/8Ov4HyncJUU"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </center>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h1 class="faq-page">Difference between Symmetric & Asymmetric Encryption?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>The list of the differences between Symmetric and Asymmetric Key Encryption are as follows:</p>
                    <table>
                        <tr>
                            <th style="border: 1px solid black;">
                                Parameters
                            </th>
                            <th style="border: 1px solid black;">
                                Symmetric Key Encryption
                            </th>
                            <th style="border: 1px solid black;">
                                Asymmetric Key Encryption
                            </th>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;">
                                Number of Keys
                            </td>
                            <td style="border: 1px solid black;">
                                Uses 1 single key for encryption and decryption.
                            </td>
                            <td style="border: 1px solid black;">
                                uses 2 different keys - one for encryption and another for decryption.
                            </td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;">
                                Size of Ciphertext
                            </td>
                            <td style="border: 1px solid black;">
                                It is smaller than or equal to the size of the original plaintext.
                            </td>
                            <td style="border: 1px solid black;">
                                It is larger than or equal to the overall size of the plaintext.
                            </td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;">
                                Speed of Encryption
                            </td>
                            <td style="border: 1px solid black;">
                                Occurs very fast
                            </td>
                            <td style="border: 1px solid black;">
                                It takes much longer time
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;">
                                Application
                            </td>
                            <td style="border: 1px solid black;">
                                transfer large chunks of information and data.
                            </td>
                            <td style="border: 1px solid black;">
                                transfer only very small amounts of data
                            </td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;">
                                Advantages
                            </td>
                            <td style="border: 1px solid black;">
                                Faster and provides confidentiality for large chunks of data
                            </td>
                            <td style="border: 1px solid black;">
                                Ensures non-repudiation authenticity added to confidentiality.
                            </td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;">
                                Utilization of Resources
                            </td>
                            <td style="border: 1px solid black;">
                                Lower in the case of symmetric key encryption.
                            </td>
                            <td style="border: 1px solid black;">
                                Higher in the case of asymmetric key encryption.
                            </td>
                        </tr>
                    </table>
                    <br>
                    Overall both Symmetric and Asymmetric Key encryption has their own purpose and benefit. Thus, there
                    is no better one.
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
                <h1 class="faq-page">Does it improves the user experience of a website?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
        </section>
    </div>
</body>

<footer>
    <?php
    include "../ui/bottombar.html";
    ?>
</footer>

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

    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>