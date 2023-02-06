<?php
function processUploadedFile() {
    if (isset($_FILES['fileInput']['error']) && $_FILES['fileInput']['error'] == 0) {
        $file = $_FILES['fileInput']['tmp_name'];
        $fileContent = file_get_contents($file);
        if (!empty($fileContent)) {
            $status = 'File is not empty. ';
        } else {
            $status = 'File is empty. ';
        }
    } else {
        $fileContent = '';
        $status = 'File not uploaded';
    }

    return array('fileContent' => $fileContent, 'status' => $status);
}

$response = processUploadedFile();
echo json_encode($response);
?>
