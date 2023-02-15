<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="main.js"></script>
</head>

<body>
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'en')" id="defaultOpen">Encryption</button>
        <button class="tablinks" onclick="openTab(event, 'de')">Decryption</button>

    </div>


    <div id="en" class="tabcontent">
        <div class="row_deen">
            <div class="column_deen">
                <div class="card_de">
                    <div class="container">
                        <form ; onkeyup="otpFunction('encrypt')">
                            <header>
                                <center>
                                    <h2><b>Data to Encrypt (Plaintext)</b></h2>
                                </center>
                            </header>
                            <center>
                                        <!-- //comment- Dnt use ciphertext, use (original Text) => use a simple/layman term -->
                                        <div class="brick__content">
                                            <textarea style="height: 400px; width: 420px;" ; name="text_en" ;
                                                id="text_en"></textarea>
                                        </div>
                            </center>
                        </form>

                    </div>
                </div>
            </div>

            <div class="column_deen">
                <div class="card_de">
                    <div class="container">
                        <form ; onkeyup="otpFunction('encrypt')">
                            <header>
                                <center>
                                    <h2><b>Parameters</b></h2>
                                </center>
                            </header>
                            <table>
                                <tr>
                                    <td>
                                        Secret Key:
                                    </td>
                                    <td>
                                        <input type="text" ; id="secret" ; name="secret" ;
                                            placeholder="passw0rd123" ; onkeyup="otpFunction('encrypt')">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Output Text Format:
                                    </td>
                                    <td>
                                        <input type="radio" name="option" ; value="b64" ; id="b64" ;
                                            onclick="otpFunction('decrypt')" ; checked> <label for="b64">Base64</label>
                                        <input type="radio" ; name="option" ; value="hex" ; id="hex" ;
                                            onclick="otpFunction('decrypt')"> <label for="hex">Hex</label>


                                    </td>
                                </tr>
                                <br>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <div class="column_deen">
                <div class="card_de">
                    <div class="container">
                        <header>
                            <center>
                                <h2><b>Output Encoded text (Ciphertext)</b></h2>
                            </center>
                        </header>
                        <div class="brick__content">
                            <textarea style="height: 400px; width: 420px;" ; id="result" ; name="result"
                                ;></textarea>
                        </div>
                        <br>
                        <center>
                            <div class="container-tt">
                            <button class="open-container-button_tt" ; id="open-container-button_tt" ;>Click here to see
                                the process!!</button>
                        </div>
                        </center>
                        
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="container_tt" class="hidden_tt">
        <div id="txtHint1" ; name="txtHint1">
        </div>
        </div>
    </div>

    <div id="de" class="tabcontent">
        <div class="row_deen">
            <div class="column_deen">
                <div class="card_de">
                    <div class="container">
                        <form ; onkeyup="otpFunction('encrypt')">
                            <header>
                                <center>
                                    <h2><b>Data to Decrypt (Plaintext)</b></h2>
                                </center>
                            </header>
                            <center>
                                <label><b> Text Format:</b><label>
                                        <input type="radio" name="option" ; value="b64" ; id="b64" ;
                                            onclick="otpFunction('encrypt')" ; checked> <label for="b64">Base64</label>
                                        <input type="radio" ; name="option" ; value="hex" ; id="hex" ;
                                            onclick="otpFunction('encrypt')"> <label for="hex">Hex</label>

                                        <center>
                                            <div class="brick__content">
                                            <textarea style="height: 400px; width: 420px;" ; name="text_de" ;
                                                id="text_de"></textarea>
                                        </div>
                                        </center>
                                        <!-- //comment- Dnt use ciphertext, use (original Text) => use a simple/layman term -->
                                        
                            </center>
                        </form>

                    </div>
                </div>
            </div>

            <div class="column_deen">
                <div class="card_de">
                    <div class="container">
                        <form ; onkeyup="otpFunction('decrypt')">
                            <header>
                                <center>
                                    <h2><b>Parameters</b></h2>
                                </center>
                            </header>
                            <table>
                                <tr>
                                    <td>
                                        Secret Key:
                                    </td>
                                    <td>
                                        <input type="text" ; id="secret_de" ; name="secret_de" ;
                                            placeholder="passw0rd123" ; onkeyup="otpFunction('decrypt')">
                                    </td>
                                </tr>
                                <br>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <div class="column_deen">
                <div class="card_de">
                    <div class="container">
                        <header>
                            <center>
                                <h2><b>Output Decoded text (Ciphertext)</b></h2>
                            </center>
                        </header>
                        <div class="brick__content">
                            <textarea style="height: 400px; width: 420px;" ; id="result_de" ; name="result_de"
                                ;></textarea>
                        </div>
                        <br>
                        <center>
                            <div class="container-tt">
                            <button class="open-container-button_tt" ; id="open-container-button_tt" ;>Click here to see
                                the process!!</button>
                        </div>
                        </center>
                        
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="container_tt" class="hidden_tt">
        <div id="txtHint1" ; name="txtHint1">
        </div>
        </div>
    </div>
</body>

</html>

<script>
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    const toggleBtn = document.getElementById("open-container-button_tt");
    const myDiv = document.getElementById("container_tt");
    toggleBtn.addEventListener("click", function () {
        if (myDiv.style.display === "none") {
            myDiv.style.display = "block";
        } else {
            myDiv.style.display = "none";
        }
    });
</script>