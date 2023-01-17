<form ; onkeyup="myFunction('encrypt')">
    <div id="en" class="tabcontent">
        <div class="row_deen">
            <div class="column_deen">
                <div class="card">
                    <div class="container">
                        <header>
                            <center>
                                <h2><b>Uncoded text</b></h2>
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
                                    Key Size (bits):
                                </td>
                                <td>
                                    <select name="key"; id="key";  onclick="myFunction('encrypt')">
                                        <option value="128">128</option>
                                        <option value="192">192</option>
                                        <option value="256">256</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Key Size (bits):
                                </td>
                                <td>
                                    <select name="key"; id="key";  onclick="myFunction('encrypt')">
                                        <option value="128">128</option>
                                        <option value="192">192</option>
                                        <option value="256">256</option>
                                    </select>
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
                            <textarea style="height: 400px; width: 420px;" ; id="result" ; name="result" ;></textarea>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>