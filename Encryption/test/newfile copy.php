<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- 
<form id="search-form" enctype="multipart/form-data">
    <input type="text" name="query">
    <br><br>
    <input type="radio" name="searchType" value="normal" checked> Normal
    <input type="radio" name="searchType" value="reverse"> Reverse
    <br><br>
    <input type="file" name="file">
    <br><br>
    <textarea name="result" readonly></textarea>
    <br><br>
    <input type="submit" value="Search">
</form> -->

<form id="form_rsa">
    <data id="technique" value="en"></data>
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
                        <textarea style="height: 400px; width: 420px;" ; name="text" ; id="text"></textarea>
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
                                    <option value="RSA">RSA</option>
                                    <option value="RSA/ECB/PKCS1Padding">RSA/ECB/PKCS1Padding</option>
                                    <option value="RSA/None/PKCS1Padding">RSA/None/PKCS1Padding</option>
                                    <option value="RSA/None/OAEPWithSHA1AndMGF1Padding">
                                        RSA/None/OAEPWithSHA1AndMGF1Padding (Counter)</option>
                                    <option value="RSA/ECB/OAEPWithSHA1AndMGF1Padding">
                                        RSA/ECB/OAEPWithSHA1AndMGF1Padding</option>
                                    <option value="RSA/ECB/OAEPWithSHA256AndMGF1Padding">
                                        RSA/ECB/OAEPWithSHA256AndMGF1Padding</option>
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
                                <input type="radio" ; name="option" ; value="input" ; id="input" ;>
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
                                <input type="radio" ; name="option" ; value="upload" ; id="upload" ;>
                            </td>
                            <td>
                                <input type="file" name="keyFile" id="keyFile">
                                <br>
                                <br>
                                <input type="button" value="Verify Key" onclick="verify()">
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
                        <textarea style="height: 400px; width: 420px;" ; id="result" ; name="result" ></textarea>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

</form>


<script>
    $(document).ready(function () {
        $("#form_RSA").on("keyup", function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "search.php?en=en",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (result) {
                    $("textarea[name='result']").val(result);
                }
            });
        });
    });

    //AJAX for RSA
    $(document).ready(function () {
        $("#form_rsa").on("keyup", function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "../test/search.php?en=en",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (result) {
                    $("textarea[name='result']").val(result);
                }
            });
        });
    });

</script>