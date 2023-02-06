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

function uploadFile() {
    var formData = new FormData(document.getElementById("uploadForm"));
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "e.php?purpose=key&action=verify", true);
    xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        var response = JSON.parse(this.responseText);
        document.getElementById("status").innerHTML = response.status;
        document.getElementById("fileContent").innerHTML = response.fileContent;
        document.getElementById("status").innerHTML = response.status;
        document.getElementById("fileTable_veri").style.display = "table";
        if (response.status.indexOf('valid') !== -1) {
            document.getElementById("status").style.backgroundColor = 'green';
        } else {
            document.getElementById("status").style.backgroundColor = 'red';
        }
    }
};
    xhr.send(formData);
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

function toggleTextarea() {
    const radioValue = document.querySelector('input[name="option"]:checked').value;
    const textarea = document.getElementById("text");

    if (radioValue === "input") {
        textarea.disabled = false;
    } else {
        textarea.disabled = true;
    }
}


function displayFileContent(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function () {
        var content = reader.result;
        document.getElementById("key_up").value = content;
    };
    reader.readAsText(file);
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

    // console.log(mode);
    // console.log(option);
    if (option==="input"){
        if (technique==="decrypt"){
            var key = document.getElementById("keyInput_de").value;
        }else{
        var key = document.getElementById("keyInput").value;
        }
    }else if (option==="upload"){
        var key = document.getElementById("key_up").value;
    }

    //console.log(key);
    key = encodeURIComponent(key);
    
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
        xhttp.open("GET", "e.php?purpose=deen&text=" + str + "&key=" + key + "&mode=" + mode + "&option=" + option + "&technique=encrypt", true);
        xhttp.send();
    } else if (technique === 'decrypt') {
        str = encodeURIComponent(str);
        xhttp.open("GET", "e.php?purpose=deen&text=" + str + "&key=" + key + "&mode=" + mode + "&option=" + option + "&technique=decrypt", true);
        console.log("e.php?purpose=deen&text='" + str + "'&key='" + key + "'&mode=" + mode + "&option=" + option + "&technique=decrypt");
        xhttp.send();
    }
   
}