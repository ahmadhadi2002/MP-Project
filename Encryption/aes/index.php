<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="mid.js"></script>
</head>

<body>
<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'en')" id="defaultOpen">Encryption</button>
  <button class="tablinks" onclick="openTab(event, 'de')">Decryption</button>
  <button class="tablinks" onclick="openTab(event, 'veri')">Text Format</button>

</div>


<div id="en" class="tabcontent">
        <form ; onkeyup="aesFunction('encrypt')">
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
                                <textarea style="height: 400px; width: 420px;" ; name="text_en" ;
                                    id="text_en"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column_deen">
                    <div class="card_en">
                        <div class="container">
                            <header>
                                <center>
                                    <h2><b>Parameters</b></h2>
                                </center>
                            </header>
                            <table>
                                <tr>
                                    <td>
                                        Key Size (bits):
                                    </td>
                                    <td>
                                        <select name="key" ; id="key" ; onclick="aesFunction('encrypt')">
                                            <option value="128">128</option>
                                            <option value="192">192</option>
                                            <option value="256">256</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Mode:
                                    </td>
                                    <td>
                                        <select name="mode" ; id="mode_en"
                                            onclick="mode_checker(this.value, 'encrypt')">
                                            <option value=""></option>
                                            <option value="ECB">ECB (Electronic Book Code)</option>
                                            <option value="CBC">CBC (Cipher Block Chaining)</option>
                                            <option value="CFB">CFB (Cipher Feedback)</option>
                                            <option value="CTR">CTR (Counter)</option>
                                            <option value="OFB">OFB (Output Feedback Mode)</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p id="iv">Initial Vector (IV): </p>
                                    </td>
                                    <td>
                                        <input type="text" ; id="iv_un" ; name="iv_un" ;
                                            onkeyup="checker(this.value , 'en')" ; value="">
                                        <p id="checker_result_en"></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Secret Key:
                                    </td>
                                    <td>
                                        <input type="text" ; id="secret" ; name="secret" ; placeholder="passw0rd123" ;
                                            value="">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Output Text Format:
                                    </td>
                                    <td>
                                        <input type="radio" name="option" ; value="b64" ; id="b64" ;
                                            onclick="aesFunction('encrypt')" ; checked> <label for="b64">Base64</label>
                                        <input type="radio" ; name="option" ; value="hex" ; id="hex" ;
                                            onclick="aesFunction('encrypt')"> <label for="hex">Hex</label>

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
                                <textarea style="height: 400px; width: 420px;" ; id="result" ; name="result"
                                    ;></textarea>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


<div id="de" class="tabcontent">
        <div class="row_deen">
            <div class="column_deen">
                <div class="card_de">
                    <div class="container">
                        <form ; onkeyup="aesFunction('decrypt')">
                            <header>
                                <center>
                                    <h2><b>Data to Decrypt</b></h2>
                                </center>
                            </header>
                            <center>
                                <label><b> Text Format:</b><label>
                                        <input type="radio" name="option" ; value="b64" ; id="b64" ;
                                            onclick="aesFunction('decrypt')" ; checked> <label for="b64">Base64</label>
                                        <input type="radio" ; name="option" ; value="hex" ; id="hex" ;
                                            onclick="aesFunction('decrypt')"> <label for="hex">Hex</label>


                                        <!-- //comment- Dnt use ciphertext, use (original Text) => use a simple/layman term -->
                                        <div class="brick__content">
                                            <textarea style="height: 400px; width: 420px;" ; name="text_de" ;
                                                id="text_de"></textarea>
                                        </div>
                            </center>
                        </form>
                       
                    </div>
                </div>
            </div>

            <div class="column_deen">
                <div class="card_de">
                    <div class="container">
                        <form ; onkeyup="aesFunction('decrypt')">
                            <header>
                                <center>
                                    <h2><b>Parameters</b></h2>
                                </center>
                            </header>
                            <table>
                                <tr>
                                    <td>
                                        Key Size (bits):
                                    </td>
                                    <td>
                                        <select name="key" ; id="key" ; onkeyup="aesFunction('decrypt')">
                                            <option value="128">128</option>
                                            <option value="192">192</option>
                                            <option value="256">256</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Mode:
                                    </td>
                                    <td>
                                        <select name="mode_de" ; id="mode_de" value="" ;
                                            onclick="mode_checker(this.value, 'decrypt')">
                                            <option value=""></option>
                                            <option value="ECB">ECB (Electronic Book Code)</option>
                                            <option value="CBC">CBC (Cipher Block Chaining)</option>
                                            <option value="CFB">CFB (Cipher Feedback)</option>
                                            <option value="CTR">CTR (Counter)</option>
                                            <option value="OFB">OFB (Output Feedback Mode)</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p id="iv_de">Initial Vector (IV): </p>
                                    </td>
                                    <td>
                                        <input type="text" ; id="iv_de-un" ; name="iv_de_un" ;
                                            onkeyup="checker(this.value , 'de')">
                                        <p id="checker_result_de" ; name="checker_result_de"></p>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Secret Key:
                                    </td>
                                    <td>
                                        <input type="text" ; id="secret_de" ; name="secret_de" ;
                                            placeholder="passw0rd123" ; onclick="aesFunction('decrypt')">
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
                        <form ; onkeyup="aesFunction('decrypt')">
                            <header>
                                <center>
                                    <h2><b>Output Encoded text</b></h2>
                                </center>
                            </header>
                            <div class="brick__content">
                                <textarea style="height: 400px; width: 420px;" ; id="result_de" ; name="result_de"
                                    ;></textarea>
                            </div>
                            <br>
                        </form>
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
</body>

</html>

<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();




</script>