<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="mid.js"></script>
</head>

<body>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'De_En')" id="defaultOpen">Decrypt & Encrypt</button>
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
                                        Shift Key:
                                    </td>
                                    <td>
                                        <div class="wrapper">
                                            <span class="minus" ; onclick="change_value('down')">-</span>
                                            <span class="num_cs" ; id="shift" ; name="shift" ; value="" ;
                                                onkeyup="myFunction('de_en')">1</span>
                                            <span class="plus" ; onclick="change_value('up')">+</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="option" ; value="normal" ; id="normal" ;
                                            onclick="myFunction('de_en')">
                                    </td>
                                    <td>
                                        <label for="normal">Use English alphabet (26 letters from A to Z)</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" ; name="option" ; value="ASCII" ; id="ASCII" ;
                                            onclick="myFunction('de_en')">
                                    </td>
                                    <td>
                                        <label for="ASCII">Use the ASCII Table (0-127) as Alphabet</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" ; name="option" ; value="custom" ; id="custom" ;
                                            onclick="myFunction('de_en')">
                                    </td>
                                    <td>
                                        <label for="custom">Use a Custom Alphabet (A-Z0-9 chars only):</label>
                                        <input type="text" ; id="custom-input" ; name="custom-input" ;
                                            value="abcdefghijklmnopqrstuvwxyz" ; onclick="myFunction('de_en')">
                                    </td>
                                </tr>
                                <!-- //comment- Dnt use ciphertext, use (original Text) => use a simple/layman term -->
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
        <h3>Caesar Cipher Decryption (Bruteforce)</h3>
        <b>Start typing a name in the input field below:</b>
        <form>
            Plaintext: <input type="text" ; id="fname" ; onkeyup="myFunction('bruteforce')">
        </form>
        <div class="row">
            Suggestions:
            <br>
            Test all possible shifts (26-letter alphabet A-Z)
            <div id="txtHint1" ; name="txtHint1">
                <div class="row">
                    <div class="column">
                        <table>
                            <tr>
                                <th>Direction</th>
                                <th>Shift Key</th>
                                <th>Ciphertext</th>
                            </tr>

                        </table>
                    </div>
                    <div class="column">
                        <table>
                            <tr>
                                <th>Direction</th>
                                <th>Shift Key</th>
                                <th>Ciphertext</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    document.getElementById("defaultOpen").click();
</script>