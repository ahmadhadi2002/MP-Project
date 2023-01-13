<html>

<head>

</head>

<body>

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'De_En')">Decrypt & Encrypt</button>
        <button class="tablinks" onclick="openCity(event, 'bf')">Bruteforce</button>
    </div>

    <div id="De_En" class="tabcontent">
        <div class="row">
            <div class="card">
                <div class="container">
                    <center>
                        <!-- //comment
- Dnt use ciphertext, use (original Text) => use a simple/layman term -->
                        <h2><b>Plaintext</b></h2>
                    </center>
                    <div class="brick__content">
                        <textarea class="viewer-text__textarea" aria-label="Content" spellcheck="false"
                            style="height: 200px; width: 270px;">
                    </textarea>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>



    <div id="bf" class="tabcontent">
        <h3>Caesar Cipher Decryption (Bruteforce)</h3>
        <p><b>Start typing a name in the input field below:</b></p>
        <form>
            Plaintext: <input type="text" ; id="fname" ; onkeyup="myFunction('bruteforce')">
        </form>
        <div class="row">
            <p>Suggestions:
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

                </p>
            </div>

            Test all possible shifts (26-letter alphabet A-Z)
        </div>
    </div>
</body>

</html>

<script>

    function myFunction(technique) {
        if (technique === 'bruteforce') {
            var str = document.getElementById("fname").value;
            showHint(str);
            function showHint(str) {
                var xhttp;
                if (str.length == 0) {
                    document.getElementById("txtHint").innerHTML = "";
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

    .row {
        margin-left: -5px;
        margin-right: -5px;
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

    <style>.card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 20%;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 2px 16px;
    }
</style>




use framework - ease of web interaction

wireframing - for the different encryption page
