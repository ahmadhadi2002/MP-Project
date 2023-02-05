<form>
  <div>
    <input type="radio" id="inputKeyRadio" name="keyOption" value="inputKey">
    <label for="inputKeyRadio">Input Key</label>
    <input type="radio" id="uploadKeyRadio" name="keyOption" value="uploadKey">
    <label for="uploadKeyRadio">Upload Key</label>
  </div>
  <div>
    <textarea id="keyInput"></textarea>
    <input type="file" id="keyFile">
  </div>
  <div>
    <textarea id="textToEncrypt"></textarea>
  </div>
</form>
<script>
  document.getElementById("inputKeyRadio").addEventListener("change", toggleKeyOption);
  document.getElementById("uploadKeyRadio").addEventListener("change", toggleKeyOption);
  document.getElementById("keyFile").addEventListener("change", sendData);
  document.getElementById("textToEncrypt").addEventListener("input", sendData);

  function toggleKeyOption() {
    var inputKeyRadio = document.getElementById("inputKeyRadio");
    var uploadKeyRadio = document.getElementById("uploadKeyRadio");
    var keyInput = document.getElementById("keyInput");
    var keyFile = document.getElementById("keyFile");

    if (inputKeyRadio.checked) {
      keyInput.style.display = "block";
      keyFile.style.display = "none";
    } else if (uploadKeyRadio.checked) {
      keyInput.style.display = "none";
      keyFile.style.display = "block";
    }
  }

  function sendData() {
    var formData = new FormData();
    formData.append("keyOption", document.querySelector('input[name="keyOption"]:checked').value);
    formData.append("keyInput", document.getElementById("keyInput").value);
    formData.append("keyFile", document.getElementById("keyFile").files[0]);
    formData.append("textToEncrypt", document.getElementById("textToEncrypt").value);

    $.ajax({
      type: "POST",
      url: "process-encryption.php",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        // handle the response from the server
      }
    });
  }





  //encrypt / decrypt
  function rsaFunction(technique) {
    var form = document.getElementById("form_rsa");
    var mode = document.getElementById("mode");
    var keyFile = document.getElementById("keyFile");
    var keyText = document.getElementById("keyInput");
    var text = document.getElementById("text");
    var option = document.querySelector("[name=\"option\"]:checked").value;

    var action_w = event.target.innerText.toLowerCase();
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "e.php&pp=deen&action=" + technique, true);
    xhttp.onreadystatechange = function () {
      if (xhttp.readyState === XMLHttpRequest.DONE) {
        if (xhttp.status === 200) {
          result.innerText = xhttp.responseText;

        }
      };
      var formData = new FormData();
      if (option == "upload") {
        formData.append("key", keyFile.files[0]);
      } else if (option == "input") {
        formData.append("key", keyText.value);
      } else {
        error.innerText = "Please choose either key file or key text.";
        return;
      }
      if (text.value.trim().length === 0) {
        error.innerText = "Please provide the data to encrypt or decrypt.";
        return;
      }
      formData.append("text", text.value);
      formData.append("action_w", action_w);
      xhr.send(formData);
    }
  }
 
</script>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $message = $_POST['message'];
  $key = $_POST['key'];

  // Validate user input
  if (empty($message)) {
    echo 'Error: Please enter a message to encrypt.';
    return;
  }
  if ($key !== 'input' && $key !== 'upload') {
    echo 'Error: Please select a valid key option.';
    return;
  }

  // Perform RSA encryption
  $encryptedMessage = rsa_encrypt($message, $key);

  // Return encrypted message
  echo $encryptedMessage;
}

// Example RSA encryption function
function rsa_encrypt($message, $key)
{
  // Perform RSA encryption using the given key
  return $message . ' (encrypted with key: ' . $key . ')';
}



?>