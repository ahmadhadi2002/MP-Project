<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>RSA File Upload</title>
</head>
<body>
  <h1>RSA File Upload</h1>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" id="fileInput" name="file">
    <input type="button" value="Upload" onclick="uploadFile()">
  </form>
  <div id="status"></div>
  <script>
    function uploadFile(element) {
  var file = document.getElementById("fileInput").files[0];
  var formData = new FormData();
  formData.append("file", file);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "2.php?purpose=key&action=verify", true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("status").innerHTML = xhr.responseText;
    }
  };
  xhr.send(formData);
}
  </script>
</body>
</html>


