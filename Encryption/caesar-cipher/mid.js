// const plus = document.querySelector(".plus"),
//     minus = document.querySelector(".minus"),
//     num = document.querySelector(".num");
// let a = 1;
// plus.addEventListener("click", () => {
//     if (a < 26) {
//         a++;
//         num.innerText = a
//     }
// })
// minus.addEventListener("click", () => {
//     if (a > 0) {
//         a--;
//         num.innerText = a
//     }
// })

function change_value(dir) {
    a = document.getElementById("shift").innerText;
    if (dir === "up") {
        a++;
        a = (a < 10) ? a : a;
        document.getElementById("shift").innerText = a;
        myFunction('de_en');
    } else {
        if (a > 1) {
            a--;
            a = (a < 10) ? a : a;
            document.getElementById("shift").innerText = a;
            myFunction('de_en');
        }
    }
}

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
            xhttp.open("GET", "backend.php?q=" + str + "&technique=bf", true);
            xhttp.send();
        }

    } else if (technique === 'de_en') {
        var str = document.getElementById("plaintext").value;
        var key = document.getElementById("shift").innerText;
        var key2 = document.querySelector("[name=\"shift\"]").value;
        var option = document.querySelector("[name=\"option\"]:checked").value;
        if (option == "normal") {
            var list = "normal";
        } else if (option == "ASCII") {
            var list = "ASCII";
        } else if (option == "custom") {
            var list = document.getElementById("custom-input").value;
        }
        console.log(option)
        console.log(list);
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
                    console.log(result);
                    document.getElementById("result").innerHTML = result;
                }
            };
            xhttp.open("GET", "backend.php?q=" + str + "&key=" + key + "&option=" + option + "&list=" + list + "&technique=deen", true);
            xhttp.send();
        }
    }
}
document.getElementById("defaultOpen").click();
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

