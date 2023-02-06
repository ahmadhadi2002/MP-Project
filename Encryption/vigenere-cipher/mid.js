function cal_leng_diff(input) {
    var len = document.getElementById('len').value;
    var p = document.getElementById('key_bf').value;
    let result = len - p.length
    if (result > 5) {
        alert("Error: Unable to process any difference which is more than 5.");
        return false;
    }
    return true;
}

function validateInput(input) {
    if (!/^[a-zA-Z]+$/.test(input)) {
        input.value = input.value.replace(/[^a-zA-Z]+/g, '');
    }
}

function myFunction(technique) {
    if (technique === 'bruteforce') {
        var str = document.getElementById("fname").value;
        var str = document.getElementById("fname").value;
        var len = document.getElementById("len").value;
        var key = document.getElementById("key_bf").value;

        bruteforce(str, key, len);

        function bruteforce(str, key, len) {
            var xhttp;
            if (str.length == 0) {
                document.getElementById("display").src = "";
                return;
            }

            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var result = this.responseText;
                    document.getElementById("txtHint1").innerHTML = result;
                }
            };
            xhttp.open("GET", "backend.php?q=" + str + "&p_key=" + key + "&key_length=" + len + "&technique=bf", true);
            xhttp.send();
        }
    } else if (technique === 'de_en') {
        var str = document.getElementById("plaintext").value;
        var key = document.getElementById("key").value;
        var list = document.getElementById("list").value;
        var option = document.querySelector("[name=\"deen\"]:checked").value;

        de_en(str, key, list, option);
        function de_en(str, key, list, option) {
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
            xhttp.open("GET", "backend.php?q=" + str + "&key=" + key + "&list=" + list + "&technique=" + option, true);
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

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}