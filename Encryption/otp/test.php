<html>
  <head>
    <script>
      var inputArray = [];

      function submitForm() {
        var input = document.getElementById("input").value;
        var textarea = document.getElementById("textarea").value;

        if (input.length < textarea.length) {
          alert("Input length should be at least equal to textarea length!");
          return;
        }

        if (inputArray.includes(input)) {
          alert("Input value has already been used!");
          return;
        }

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            alert("Response: " + response);
            inputArray.push(input);
          }
        };
        xhttp.open("POST", "process.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("input=" + input + "&textarea=" + textarea);
      }
    </script>
  </head>
  <body>
    <input type="text" id="input" />
    <br />
    <textarea id="textarea"></textarea>
    <br />
    <button onclick="submitForm()">Submit</button>
  </body>
</html>