<!DOCTYPE html>
<html>
  <head>
    <title>Download PEM File</title>
  </head>
  <body>
    <textarea id="textarea-id"></textarea>
    <button id="download-button" onclick="downloadPEMFile('textarea-id')">Download</button>
    <script>
      function downloadPEMFile(element) {
        const downloadPEM = (content, fileName) => {
          const blob = new Blob([content], { type: 'application/x-pem-file' });
          const link = document.createElement('a');
          link.download = fileName;
          link.href = window.URL.createObjectURL(blob);
          link.click();
        };
  
        const textarea = document.getElementById(element);
        const content = textarea.value;
        downloadPEM(content, element + '.pem');
      }
    </script>
  </body>
</html>
