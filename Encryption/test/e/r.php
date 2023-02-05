<html>
  <head>
    <script>
      // function checkFile(event) {
      //   var file = event.target.files[0];
      //   var reader = new FileReader();
      //   reader.onload = function() {
      //     var content = reader.result;
      //     var xhr = new XMLHttpRequest();
      //     xhr.open("POST", "upload.php", true);
      //     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      //     xhr.onreadystatechange = function() {
      //       if (xhr.readyState === 4 && xhr.status === 200) {
      //         var response = xhr.responseText;
      //         console.log("test");
      //         console.log(response);
      //         if (response === "valid") {
      //           console.log(response);
      //           alert("Valid RSA encryption file.");
      //           document.getElementById("textarea").removeAttribute("disabled");

      //       } else {
      //           //alert("File is not a valid RSA encryption.");
      //       }
      //       }
      //     };
      //     xhr.send("content=" + content);
      //   };
      //   reader.readAsText(file);
      // }

      function checkFile(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function() {
      var content = reader.result;
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "e.php?purpose=key&action=verify", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          var response = xhr.responseText;
          console.log("test");
          console.log(response);
          if (response === "valid") {
            console.log(response);
            alert("Valid RSA encryption file.");
                document.getElementById("text").removeAttribute("disabled");
        } else {
            alert("File is not a valid RSA encryption.");
        }
        }
      };
      xhr.send("content=" + content);
    };
    reader.readAsText(file);
  }
    </script>
  </head>
  <body>
    <input type="file" id="fileinput" onchange="checkFile(event)">
    <br><br>
    <textarea id="textarea" disabled>Enter the text here...</textarea>
  </body>
</html>
