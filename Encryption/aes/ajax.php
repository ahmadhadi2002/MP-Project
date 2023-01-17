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
                                <!-- <tr>
                                    <td>
                                        <center>
                                            <button type="button" onclick="alert('Hello world!')">
                                                <h5>Encode</h5>
                                            </button>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <button type="button" onclick="alert('Hello world!')">
                                                <h5>Decode</h5>
                                            </button>
                                        </center>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td>
                                        Shift Key:
                                    </td>
                                    <td>
                                        <div class="wrapper">
                                            <span class="minus">-</span>
                                            <span class="num" ; id="shift" ; name="shift" ; value="" ;
                                                onkeyup="myFunction('de_en')">1</span>
                                            <span class="plus">+</span>
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

    <div id="de" class="tabcontent">
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
    const plus = document.querySelector(".plus"),
        minus = document.querySelector(".minus"),
        num = document.querySelector(".num");
    let a = 1;
    plus.addEventListener("click", () => {
        if (a < 26) {
            a++;
            num.innerText = a
        }
    })
    minus.addEventListener("click", () => {
        if (a > 0) {
            a--;
            num.innerText = a
        }
    })

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

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 500px;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card:hover {
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
</style>




use framework - ease of web interaction

wireframing - for the different encryption page