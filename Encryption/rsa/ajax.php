<html>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="mid.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<head>

</head>

<body>
    <div>
        <!-- Generate keys -->
        <form ; onclick="keyGenerator()">
            Key Size (bits):
            <select name="key" ; id="key" ">
                    <option value=" 512" ; selected>512</option>
                <option value="1024">1024</option>
                <option value="2048">2048</option>
                <option value="3072">3072</option>
                <option value="4096">4096</option>
            </select>
            <br>
            Click here to generate your unique key!: <input type="button" id="generate" value="Generate Key">
        </form>
        <div id="output_key">
            <table>
                <tr>
                    <td style="text-align: center; vertical-align: middle;">
                        <h3>Private Key:</h3>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <h3>Public Key:</h3>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; vertical-align: middle;">
                        <textarea rows="10" cols="60" disabled></textarea>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <textarea rows="10" cols="60" disabled></textarea>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>

    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'en')">Encrypt</button>
        <button class="tablinks" onclick="openTab(event, 'de')">Decrypt</button>
    </div>

    <div id="en" class="tabcontent">
        <form id="form_rsa_en" ; onclick = "rsaFunction('encrypt')">
            <div class="row_deen">
                <div class="column_deen">
                    <div class="card_en">
                        <div class="container">
                            <header>
                                <center>
                                    <h2><b>Data to Encrypt</b></h2>
                                    <b>Type below:</b>

                                </center>
                            </header>
                            <!-- //comment- Dnt use ciphertext, use (original Text) => use a simple/layman term -->

                            <div class="brick__content">
                                <textarea style="height: 400px; width: 420px;" ; name="text_en" ; id="text_en" ></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column_deen">
                    <div class="card_en" ; style="height: fit-content; ">
                        <div class="container">
                            <header>
                                <center>
                                    <h2><b>Parameters</b></h2>
                                </center>
                            </header>
                            <table>
                                <tr>
                                    <td>
                                        Mode:
                                    </td>
                                    <td>
                                        <select name="mode" ; id="mode">
                                            <option value="OPENSSL_PKCS1_PADDING" selected>RSA/ECB/PKCS1Padding</option>
                                            <option value="OPENSSL_PKCS1_OAEP_PADDING">
                                                RSA/None/OAEPWithSHA1AndMGF1Padding</option>
                                            <option value="OPENSSL_SSLV23_PADDING">
                                                OPENSSL_SSLV23_PADDING</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="text-align: center" ; colspan="2">
                                        Key Type:
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" ; name="option" ; value="input" ; id="option" ; onclick="toggleTextarea();">
                                    </td>
                                    <td>
                                        <label for="pub">Public Key:</label>
                                        <br>
                                        <textarea style="height: 150px; width: 350px;" ; name="keyInput" ;
                                            id="keyInput"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" ; name="option" ; value="upload" ; id="option" ; onclick="toggleTextarea();">
                                    </td>
                                    <td>
                                        <input type="file" id="file_en" name="file_en" onchange="displayFileContent(event)">
                                        <br>

                                        <textarea id="key_up" rows="10" cols="50" disabled  ; hidden></textarea>

                                    </td>
                                </tr>
                                <br>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="column_deen">
                    <div class="card_en">
                        <div class="container">
                            <header>
                                <center>
                                    <h2><b>Output Encoded text</b></h2>
                                </center>
                            </header>
                            <div class="brick__content">
                                <textarea style="height: 400px; width: 420px;" ; id="result_en" ; name="result_en" ;
                                    ></textarea>
                
                                    <br>
                                    
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <input type="text" ; id="technique" ; name="technique" ; value="encrypt" ; hidden>
        </form>
    </div>

    <div id="de" class="tabcontent">
        <form id="form_rsa_de" ; onkeyup="rsaFunction('decrypt')">
            <div class="row_deen">
                <div class="column_deen">
                    <div class="card_de">
                        <div class="container">
                            <header>
                                <center>
                                    <h2><b>Data to Decrypt</b></h2>
                                    <b>Type below:</b>

                                </center>
                            </header>
                            <!-- //comment- Dnt use ciphertext, use (original Text) => use a simple/layman term -->

                            <div class="brick__content">
                                <textarea style="height: 380px; width: 420px;" ; name="text_de" ; id="text_de" ></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column_deen">
                    <div class="card_de" ; style="height: fit-content; ">
                        <div class="container">
                            <header>
                                <center>
                                    <h2><b>Parameters</b></h2>
                                </center>
                            </header>
                            <table>
                                <tr>
                                    <td>
                                        Mode:
                                    </td>
                                    <td>
                                        <select name="mode" ; id="mode">
                                            <option value="OPENSSL_PKCS1_PADDING" selected>RSA/ECB/PKCS1Padding</option>
                                            <option value="OPENSSL_PKCS1_OAEP_PADDING">
                                                RSA/None/OAEPWithSHA1AndMGF1Padding</option>
                                            <option value="OPENSSL_SSLV23_PADDING">
                                                OPENSSL_SSLV23_PADDING</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="text-align: center" ; colspan="2">
                                        Key Type:
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" ; name="option" ; value="input" ; id="option" ; onclick="toggleTextarea();">
                                    </td>
                                    <td>
                                        <label for="pub">Private Key:</label>
                                        <br>
                                        <textarea style="height: 150px; width: 350px;" ; name="keyInput_de" ;
                                            id="keyInput_de"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" ; name="option" ; value="upload" ; id="option">
                                    </td>
                                    <td>
                                    <input type="file" id="file_en" name="file_en" onchange="displayFileContent(event)">
                                        <br>
                                        <form id="key_up_f">
                                        <textarea id="key_up" rows="10" cols="50" disabled  ; hidden ></textarea>
                                    </td>
                                </tr>

                                <br>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="column_deen">
                    <div class="card_en">
                        <div class="container">
                            <header>
                                <center>
                                    <h2><b>Output Decoded text</b></h2>
                                </center>
                            </header>
                            <div class="brick__content">
                            <div class="box"></div>
                                <textarea style="height: 400px; width: 420px;" ; id="result_de" ; name="result_de" ;
                                    readonly></textarea>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <input type="text" ; id="technique" ; name="technique" ; value="decrypt" ; hidden>
</form>
    </div>
</body>
</html>