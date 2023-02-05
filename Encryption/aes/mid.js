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

function aesFunction(technique) {
    console.log(technique);
    if (technique === "encrypt") {
        var str = document.getElementById("text_en").value;
        console.log(str);
    } else if (technique === "decrypt") {
        var str = document.getElementById("text_de").value;
        console.log(str);
    }
    ajax(str, technique);
}


function ajax(str, technique) {
    //other parameter
    var key = document.getElementById("key").value;
    var mode = document.getElementById("mode").value;
    var option = document.querySelector("[name=\"option\"]:checked").value;

    if (technique === 'encrypt') {
        var iv = document.getElementById("iv").value;
        var secret = document.getElementById("secret").value;
    } else if (technique === 'decrypt') {
        var iv = document.getElementById("iv_de").value;
        var secret = document.getElementById("secret_de").value;
    }

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
                document.getElementById("result").innerHTML = result;
            } else if (technique === 'decrypt') {
                document.getElementById("result_de").innerHTML = result;
            }
        }
    };
    if (technique === 'encrypt') {
        xhttp.open("GET", "backend.php?str=" + str + "&key=" + key + "&mode=" + mode + "&iv=" + iv + "&secret=" + secret + "&option=" + option + "&technique=en", true);
        xhttp.send();
    } else if (technique === 'decrypt') {
        xhttp.open("GET", "backend.php?str=" + str + "&key=" + key + "&mode=" + mode + "&iv=" + iv + "&secret=" + secret + "&option=" + option + "&technique=de", true);
        xhttp.send();
    }
}

function checker(iv, tech) {
    console.log(iv);
    var iv = iv;
    let inputLength = iv.length;
    console.log(inputLength);
    if (0 < inputLength && inputLength < 16) {
        if (tech === "en") {
            document.getElementById("checker_result_en").innerHTML = "please ensure that the length of iv is 16 characters long";
        } else {
            document.getElementById("checker_result_de").innerHTML = "please ensure that the length of iv is 16 characters long";
        }
    } else {
        if (tech === "en") {
            document.getElementById("checker_result_en").innerHTML = "";
            document.getElementById("iv").value = iv;
        } else {
            document.getElementById("checker_result_de").innerHTML = "";
            document.getElementById("iv_de").value = iv;
        }
    }
}


function identifier(str) {
    console.log(str);
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
    xhttp.open("GET", "backend.php?str=" + str + "&technique=iden", true);
    xhttp.send();

}

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

    console.log(tabName);
}

window.onbeforeunload = function () {
    window.history.replaceState({}, document.title, "/");
};
