    //RSA Part
    $(document).ready(function () {
        $("#form_rsa_en").on("keyup", function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "e.php?purpose=deen",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (result) {
                    $("textarea[name='result_en']").val(result);
                }
            });
        });
    });

    $(document).ready(function () {
        $("#form_rsa_de").on("keyup", function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "e.php?purpose=deen",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (result) {
                    $("textarea[name='result_de']").val(result);
                }
            });
        });
    });

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

    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }



    function keyGenerator() {
        //other parameter
        var key = document.getElementById("key").value;
        console.log(key);
        //AJAX
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var result = this.responseText;
                document.getElementById("output_key").innerHTML = result;
            }
        };
        xhttp.open("GET", "e.php?purpose=key&action=generate&key=" + key, true);
        xhttp.send();
    }

    document.getElementById('veri').addEventListener('click', function () {
        var form = document.getElementById('form_rsa_en');
        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        var keyFile = document.getElementById('keyFile').files[0];
        formData.append('keyFile', keyFile);

        xhr.open('POST', 'e.php?purpose=key&action=verify', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    if (xhr.responseText === 'INVALID_FILE') {
                        alert('The RSA key file is not valid. Please select a valid RSA key file.');
                    }
                } else if (xhr.responseText === 'VALID_FILE') {
                    alert('The RSA key file is not valid. Please select a valid RSA key file.');
                }
            }
        };
        xhr.send(formData);
        console.log("success");
    });

        function copyToClipboard(element) {
            var $temp = $("<textarea>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
            alert("Copied to clipboard!");
        }

        function downloadPEMFile(element) {
            const key = $('#textarea_' + element);
            const content = key.val();

            const blob = new Blob([content], { type: 'application/x-pem-file' });
            const link = document.createElement('a');
            link.download = element + '.pem';
            link.href = window.URL.createObjectURL(blob);
            link.click();
        }  