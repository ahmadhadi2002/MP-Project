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
    xhttp.open("GET", "backend.php?purpose=key&action=generate&key=" + key, true);
    xhttp.send();
}

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

function rsaFunction(technique) {
    console.log(technique);
    if (technique === "encrypt") {
        var str = document.getElementById("text_en").value;
        console.log(str);
    } else if (technique === "decrypt") {
        var str = document.getElementById("text_de").value;
        // console.log(str);
    }
    ajax(str, technique);
}

function ajax(str, technique) {
    //other parameter
    var mode = document.getElementById("mode").value;
    var option = document.querySelector("[name=\"option\"]:checked").value;
    if (option === "input") {
        if (technique === "decrypt") {
            var key = document.getElementById("keyInput_de").value;
        } else {
            var key = document.getElementById("keyInput").value;
        }
    } else if (option === "upload") {
        var key = document.getElementById("key_up").value;
    }

    key = encodeURIComponent(key);
    let str = key.replace(/\s+/g, ' ');
    let str = key.trim();
    console.log(str);
    //AJAX
    var xhttp;
    if (str.length == 0) {
        document.getElementById("result").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            var result = this.responseText;
            console.log(result);
            if (technique === 'encrypt') {
                document.getElementById("result_en").innerHTML = result;
            } else if (technique === 'decrypt') {
                document.getElementById("result_de").innerHTML = result;
            }
        }
    };
    if (technique === 'encrypt') {
        xhttp.open("GET", "backend.php?purpose=deen&text=" + str + "&key=" + key + "&mode=" + mode + "&option=" + option + "&technique=encrypt", true);
        xhttp.send();
    } else if (technique === 'decrypt') {
        str = encodeURIComponent(str);
        console.log(str);
        console.log("test");
        xhttp.open("GET", "backend.php?purpose=deen&text=" + str + "&key=" + key + "&mode=" + mode + "&option=" + option + "&technique=decrypt", true);
        console.log("backend.php?purpose=deen&text='" + str + "'&key='" + key + "'&mode=" + mode + "&option=" + option + "&technique=decrypt");
        xhttp.send();
    }
}