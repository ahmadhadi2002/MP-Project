<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="tool.js"></script>
</head>

<body>
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'en')" id="defaultOpen">Encryption</button>
        <button class="tablinks" onclick="openTab(event, 'de')">Decryption</button>
        <button class="tablinks" onclick="openTab(event, 'veri')">Text Format</button>
    </div>


    <div id="en" class="tabcontent">
        <div class="row_deen">
            <div class="column_deen">
                <div class="card_de">
                    <div class="container">

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


                    </div>
                </div>
            </div>

            <div class="column_deen">
                <div class="card_de">
                    <div class="container">

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
                                    <input type="text" ; id="secret" ; name="secret" ; placeholder="passw0rd123" ;>
                                </td>
                                <td>
                                    <button onclick="generateAndAppend()"> GET OTP </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Output Text Format:
                                </td>
                                <td colspan="2">
                                    <input type="radio" name="option" ; value="b64" ; id="b64" ; checked> <label
                                        for="b64">Base64</label>
                                    <input type="radio" ; name="option" ; value="hex" ; id="hex"> <label
                                        for="hex">Hex</label>
                                </td>
                            </tr>
                            <br>
                        </table>
                        <center>
                            <br>
                            <button onclick="otpFunction('Encrypt')"> Let's Encrypt it! </button>
                        </center>

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
                            <textarea style="height: 400px; width: 420px;" ; id="result_en" ; name="result_en" ;></textarea>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <div id="de" class="tabcontent">
        <div class="row_deen">
            <div class="column_deen">
                <div class="card_de">
                    <div class="container">

                        <header>
                            <center>
                                <h2><b>Data to Encrypt (Plaintext)</b></h2>
                            </center>
                        </header>

                        <center>
                            Input Text Format:

                            <input type="radio" name="option_de" ; value="b64" ; id="b64" ; checked> <label
                                for="b64">Base64</label>
                            <input type="radio" ; name="option_de" ; value="hex" ; id="hex"> <label for="hex">Hex</label>

                            <div class="brick__content">
                                <textarea style="height: 400px; width: 420px;" ; name="text_de" ;
                                    id="text_de"></textarea>
                            </div>
                        </center>


                    </div>
                </div>
            </div>

            <div class="column_deen">
                <div class="card_de">
                    <div class="container">

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
                                    <input type="text" ; id="secret_de" ; name="secret_de" ; placeholder="passw0rd123">
                                </td>
                            </tr>
                            <br>
                        </table>
                        <center>
                            <br>
                            <button onclick="otpFunction('Decrypt')"> Let's Decrypt it! </button>
                        </center>

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
                            <textarea style="height: 400px; width: 420px;" ; id="result_de" ; name="result_de" ;></textarea>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div id="veri" class="tabcontent">
    <table class="tt_table">
                <tr>
                    <td rowspan="2">
                        <br>
                        <textarea class="pt_con" ; name="pt_con" ; id="pt_con" ;
                            onkeyup="identifier(this.value)"></textarea>
                    </td>
                    <td style="height: 82px ;">
                        <center><u>
                                <h4>Result</h4>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p id="result_iden"></p>
                    </td>
                </tr>
            </table>
    </div>
    <div>
        <center>
            <br>
            <br>
            <div class="container-tt">
                <button class="open-container-button_tt" ; id="open-container-button_tt" ;>De/Encryption Process
                    Visualization</button>
                <br>
                <br>
            </div>
        </center>
    </div>

    <div id="container_tt" class="hidden_tt">
        <div id="txtHint1" ; name="txtHint1"></div>
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
            toggleBtn.innerHTML = "Close!";
        } else {
            myDiv.style.display = "none";
            toggleBtn.innerHTML = "De/Encryption Process Visualization";
        }
    });


</script>