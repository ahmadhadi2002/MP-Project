else if (technique === 'de_en') {
            var str = document.getElementById("plaintext").value;
            var key = document.getElementById("shift").value;
            var list = document.getElementById("list").value;
            showHint(str);
            function showHint(str) {
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
                xhttp.open("GET", "character_counter.php?q=" + str + "&key=" + key  + "&list=" + list, true);
                xhttp.send();
            }