var inputArray = [];

function otpFunction(technique) {
    if (technique === "Encrypt") {
        var input = document.getElementById("secret").value;
        var textarea = document.getElementById("text_en").value;
        var option = document.querySelector("[name=\"option\"]:checked").value;

        if (input.length < textarea.length) {
            alert("Input length should be at least equal to textarea length!");
            return;
        }

        if (inputArray.includes(input)) {
            alert("Input value has already been used!");
            return;
        }
    } else if (technique === "Decrypt") {
        var input = document.getElementById("secret_de").value;
        var textarea = document.getElementById("text_de").value;
        var option = document.querySelector("[name=\"option_de\"]:checked").value;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            inputArray.push(input);
            console.log(this.responseText);
            var response = JSON.parse(this.responseText);
            console.log(response);
            console.log(response.output);
            console.log(response.table);
            console.log(technique);
            document.getElementById("txtHint1").innerHTML = response.table;
            if (technique === 'Encrypt') {
                document.getElementById("result_en").innerHTML = response.output;
            } else if (technique === 'Decrypt') {
                document.getElementById("result_de").innerHTML = response.output;
            }
        }
    };
    if (technique === 'Encrypt') {
        xhttp.open("POST", "back.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("str=" + textarea + "&secret=" + input + "&option=" + option + "&technique=en");
    } else if (technique === 'Decrypt') {
        xhttp.open("POST", "back.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("str=" + textarea + "&secret=" + input + "&option=" + option + "&technique=de");
    }
    // xhttp.open("POST", "back.php", true);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhttp.send("str=" + textarea + "&secret=" + input + "&option=" + option + "&technique=en");
    // console.log(secret);
}

window.onbeforeunload = function () {
    inputs = [];
};

function openTab(evt, cityName) {
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

function generateAndAppend() {
    const textarea = document.getElementById("text_en");
    const input = document.getElementById("secret");
    const textLength = textarea.value.length;
    let randomString = "";
    const possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (let i = 0; i < Math.max(textLength, 10); i++) {
        randomString += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    input.value = "";
    input.value += randomString;
    document.getElementById('result').value="";
}

function identifier(str) {
    var xhttp;
    if (str.length == 0) {
        document.getElementById("result_iden").innerHTML = "";
        return;
    }

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            document.getElementById("result_iden").innerHTML = result;
        }
    };
    xhttp.open("GET", "back.php?value=" + str + "&iden=iden", true);
    xhttp.send();

}