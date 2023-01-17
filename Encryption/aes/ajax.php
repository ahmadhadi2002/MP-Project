<html>

<head>

</head>

<body>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'en')">Encrypt</button>
        <button class="tablinks" onclick="openCity(event, 'de')">Decrypt</button>
    </div>
    <form ; onkeyup="myFunction('encrypt')">
        <div id="en" class="tabcontent">
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
                                <textarea style="height: 400px; width: 420px;" ; name="plaintext" ;
                                    id="plaintext"></textarea>
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
                                        <select name="key" ; id="key" ; onclick="myFunction('encrypt')">
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
                                        <select name="mode" ; id="mode" ; onclick="myFunction('encrypt')">
                                            <option value="CBC">CBC (Cipher Block Chaining)</option>
                                            <option value="CCM">CCM (Chaining-Message Authentication Code)</option>
                                            <option value="CFB">CFB (Cipher Feedback)</option>
                                            <option value="CTR">CTR (Counter)</option>
                                            <option value="GCM">GCM (Galois/Counter Mode)</option>
                                            <option value="OFB">OFB (Output Feedback Mode)</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Initial Vector (IV):
                                    </td>
                                    <td>
                                        <input type="text" ; id="iv" ; name="iv" ; onclick="myFunction('encrypt')">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Secret Key:
                                    </td>
                                    <td>
                                        <input type="text" ; id="secret" ; name="secret" ; placeholder="pAssw0rd123" ;
                                            onclick="myFunction('encrypt')">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Output Text Format:
                                    </td>
                                    <td>
                                        <input type="radio" name="option" ; value="base64" ; id="base64" ;
                                            onclick="myFunction('encrypt')"> <label for="base64">Base64</label>
                                        <input type="radio" ; name="option" ; value="hex" ; id="hex" ;
                                            onclick="myFunction('encrypt')"> <label for="hex">Hex</label>
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

        </div>
    </form>


    <div id="de" class="tabcontent">
        <div class="row_deen">
            <div class="column_deen">
                <div class="card_de">
                    <div class="container">
                        <header>
                            <center>
                                <h2><b>Data to Decrypt</b></h2>
                            </center>
                        </header>
                        <!-- //comment- Dnt use ciphertext, use (original Text) => use a simple/layman term -->
                        <div class="brick__content">
                            <center>
                                <label><b>Output Text Format:</b><label>
                                        <input type="radio" name="option" ; value="base64" ; id="base64" ;
                                            onclick="myFunction('encrypt')"> <label for="base64">Base64</label>
                                        <input type="radio" ; name="option" ; value="hex" ; id="hex" ;
                                            onclick="myFunction('encrypt')"> <label for="hex">Hex</label>
                                        <center>
                                            <textarea style="height: 400px; width: 420px;" ; name="plaintext" ;
                                                id="plaintext" ;></textarea>
                                            <div class="container">
                                                Don't Know what is the format of the text?
                                                <button class="open-container-button_tt" ; id="open-container-button_tt"
                                                    ;>Click here!</button>
                                                <br>
                                            </div>
                        </div>
                        <br>
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
                                    Key Size (bits):
                                </td>
                                <td>
                                    <select name="key" ; id="key" ; onclick="myFunction('encrypt')">
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
                                    <select name="mode" ; id="mode" ; onclick="myFunction('encrypt')">
                                        <option value="CBC">CBC (Cipher Block Chaining)</option>
                                        <option value="CCM">CCM (Chaining-Message Authentication Code)</option>
                                        <option value="CFB">CFB (Cipher Feedback)</option>
                                        <option value="CTR">CTR (Counter)</option>
                                        <option value="GCM">GCM (Galois/Counter Mode)</option>
                                        <option value="OFB">OFB (Output Feedback Mode)</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Initial Vector (IV):
                                </td>
                                <td>
                                    <input type="text" ; id="iv" ; name="iv" ; onclick="myFunction('encrypt')">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Secret Key:
                                </td>
                                <td>
                                    <input type="text" ; id="secret" ; name="secret" ; placeholder="pAssw0rd123" ;
                                        onclick="myFunction('encrypt')">
                                </td>
                            </tr>
                            <br>
                        </table>
                    </div>
                </div>
            </div>

            <div class="column_deen">
                <div class="card_de">
                    <div class="container">
                        <header>
                            <center>
                                <h2><b>Output Encoded text</b></h2>
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
        <br>
        <div class="row_tt">

            <div id="container_tt" class="hidden_tt">
                <table class="tt_table">
                    <tr>
                        <td rowspan="2">
                            <br>
                            <textarea class="pt_con" ; name="pt_con" ; id="pt_con" ;></textarea>
                        </td>
                        <td style="height: 82px ;">
                            <center><u>
                                    <h4>Result</h4></center>
                        </td>
                    </tr>
                    <td>
                        <div>test</div>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    </div>
    </form>


</body>

</html>


<script>
    const button = document.getElementById("open-container-button_tt");
    const container = document.getElementById("container_tt");
    let isOpen = false;

    button.addEventListener("click", () => {
        if (!isOpen) {
            container.classList.remove('hidden_tt');
            isOpen = true;
            button.innerHTML = "Close";
        } else {
            container.classList.add('hidden_tt');
            isOpen = false;
            button.innerHTML = "Click here!";
        }
    });


    function myFunction(technique) {
        if (technique === 'bruteforce') {
            var str = document.getElementById("fname").value;
            showHint(str);
            function showHint(str) {
                var xhttp;
                if (str.length == 0) {
                    document.getElementById("txtHint1").innerHTML = "";
                    return;
                }
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var result = this.responseText;
                        document.getElementById("txtHint1").innerHTML = result;
                    }
                };
                xhttp.open("GET", "e.php?q=" + str + "&technique=bf", true);
                xhttp.send();
            }

        } else if (technique === 'de_en') {
            var str = document.getElementById("plaintext").value;
            var key = document.querySelector(".num").innerText;
            var option = document.querySelector("[name=\"option\"]:checked").value;

            if (option == "normal") {
                var list = "normal";
            } else if (option == "ASCII") {
                var list = "ASCII";
            } else if (option == "custom") {
                var list = document.querySelector("[name=\"custom-input\"]").value;
            }
            showHint(str, key, list);
            function showHint(str, key, list) {
                var xhttp;
                if (str.length == 0) {
                    document.getElementById("result").innerHTML = "";
                    return;
                }
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var result = this.responseText;
                        document.getElementById("result").innerHTML = result;
                    }
                };
                xhttp.open("GET", "e.php?q=" + str + "&key=" + key + "&list=" + list + "&technique=deen", true);
                xhttp.send();
            }
        }
    }

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }


</script>

<style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }

    * {
        box-sizing: border-box;
    }

    .row_deen {
        margin-left: -5px;
        margin-right: -5px;
        display: flex;
    }

    .column {
        float: left;
        width: 50%;
        padding: 5px;
    }

    /* Clearfix (clear floats) */
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: left;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .card_en {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 500px;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card_en:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .card_de {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 500px;
        height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card_de:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 2px 16px;
    }

    .column_deen {
        flex: 33.33%;
        padding: 0px;
    }

    .wrapper {
        height: 50 px;
        min-width: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #FFF;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        ;
    }

    .wrapper span {
        width: 100%;
        text-align: center;
        font-size: 25px;
        font-weight: 60;
    }

    .wrapper span.num {
        font-size: 20px;
        border-right: 2px solid rgba(0, 0, 0, 0.2);
        border-left: 2px solid rgba(0, 0, 0, 0.2);
    }

    .hidden_tt {
        display: none;
    }

    .row_tt {
        width: 100%;
    }

    .pt_con {
        height: 200px;
        width: 100%;
    }

    .open-container-button_tt {
        display: inline-block;
        padding: 10px 15px;
        font-size: 14px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .open-container-button_tt:hover {
        background-color: #3e8e41
    }

    .open-container-button_tt:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
</style>