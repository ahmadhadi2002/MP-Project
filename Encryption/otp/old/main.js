
function otpFunction(technique) {

    if (technique === "encrypt") {
        var str = document.getElementById("text_en").value;
    } else if (technique === "decrypt") {
        var str = document.getElementById("text_de").value;
    }
    ajax(str, technique);
}


function ajax(str, technique) {
    
    
    if (technique === 'encrypt') {
        var secret = document.getElementById("secret").value;
        var option = document.querySelector("[name=\"option\"]:checked").value;
    } else if (technique === 'decrypt') {
        var secret = document.getElementById("secret_de").value;
        var option = document.querySelector("[name=\"option_de\"]:checked").value;
        console.log(str);
        console.log(option);
    }

    //AJAX_OTP
    var xhttp;
    if (str.length == 0) {
        document.getElementById("result").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            var response = JSON.parse(this.responseText);
            console.log(response);
            if (technique === 'encrypt') {
                document.getElementById("result").innerHTML = response.output;
                document.getElementById("txtHint1").innerHTML = response.table;
            } else if (technique === 'decrypt') {
                document.getElementById("result_de").innerHTML = response.output;
                document.getElementById("txtHint1").innerHTML = response.table;
            }

            
            
        }
    };
    if (technique === 'encrypt') {
        xhttp.open("GET", "backend.php?str=" + str + "&secret=" + secret + "&option=" + option + "&technique=en", true);
        xhttp.send();
    } else if (technique === 'decrypt') {
        xhttp.open("GET", "backend.php?str=" + str + "&secret=" + secret + "&option=" + option + "&technique=de", true);
        console.log("correct url"); 
        xhttp.send();
    }
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
    xhttp.open("GET", "backend.php?str=" + str + "&technique=iden", true);
    xhttp.send();

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

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



window.onbeforeunload = function () {
    window.history.replaceState({}, document.title, "/");
};
