<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="mid.js"></script>
</head>

<body>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'De_En')">Decrypt & Encrypt</button>
        <button class="tablinks" onclick="openCity(event, 'bf')">Bruteforce</button>
    </div>
    <form ; onkeyup="myFunction('de_en')">
        <div id="De_En" class="tabcontent">
            <div class="row_deen">
                <div class="column_deen">

                    <div class="card">
                        <div class="container">
                            <header>
                                <center>
                                    <h2><b>Plaintext/Ciphertext</b></h2>
                                </center>
                            </header>
                            <!-- //comment- Dnt use ciphertext, use (original Text) => use a simple/layman term -->

                            <div class="brick__content">
                                <textarea style="height: 400px; width: 420px;" ; name="plaintext" ; id="plaintext"
                                    ;></textarea></textarea>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="column_deen">
                    <div class="card">
                        <div class="container">
                            <header>
                                <center>
                                    <h2><b>Parameters</b></h2>
                                </center>
                            </header>
                            <table>
                                <tr>
                                    <td>
                                        Key:
                                    </td>
                                    <td>
                                        <input type="text" id="key" name="key" oninput="validateInput(this)">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Alphabet:
                                    </td>
                                    <td>
                                        <input type="text" ; id="list" ; name="list" ;
                                            value="abcdefghijklmnopqrstuvwxyz" ; onclick="myFunction('de_en')">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <center>
                                            <input type="radio" id="en" name="deen" value="en" checked>
                                            <label for="Encrypt">Encrypt</label><br>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" id="de" name="deen" value="de">
                                            <label for="Decrypt">Decrypt</label><br>
                                        </center>
                                    </td>

                                </tr>
                                <br>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="column_deen">
                    <div class="card">
                        <div class="container">
                            <header>
                                <center>
                                    <h2><b>Result</b></h2>
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
        </div>
    </form>

    <div id="bf" class="tabcontent">
        <h3>Vigenere Cipher Decryption (Bruteforce)</h3>
        Start typing a name in the input field below:
        <form>
            Plaintext: <input type="text" ; id="fname" >
            Length of Key: <input type="text" ; id="len" >
            Partial form of the Key: <input type="text" ; id="key_bf" ; onkeyup="myFunction('bruteforce')">
        </form>
        <b>DUE TO MEMORY ISSUE, THE HIGHEST DIFFERENCE BETWEEN THE PARTIAL FORM AND THE LENGTH OF THAT THE PROGRAM CAN
            RUN IS 5 ONLY</b>
        <br>

        <div class="row">
            <!-- <iframe id=display
                style="width:1664.890; height: auto;">
            </iframe> -->
            <div id="txtHint1" ; name="txtHint1">
            </div>
        </div>
        </div>
    </div>
</body>

</html>


