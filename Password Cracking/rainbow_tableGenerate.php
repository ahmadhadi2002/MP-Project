<?php
if (isset($_POST["hashMain_input"]) && isset($_POST["hashMain_option"])){
    
    $hashOption = $_POST['hashMain_option'];
    $hashInput = $_POST['hashMain_input']."\n";
    // $dictword = file('../Password Cracking/dictattack_files/words.txt');
    $check="0";


    $start = new DateTime();

    if($hashOption == "1"){
        $inputHash = md5($hashInput);
        $inputFolderPath = '../Password Cracking/rainbow_files/md5hash/';
    }

    if($hashOption == "2"){
        $inputHash = sha1($hashInput);
        $inputFolderPath = '../Password Cracking/rainbow_files/sha1hash/';
    }

// Get a list of all the files in the input folder
$files = scandir($inputFolderPath);

// Iterate through each file
foreach ($files as $file) {
    // Check if the file is a .txt file
    if (pathinfo($file, PATHINFO_EXTENSION) == 'txt') {
        // Open the file for reading
        $inputFile = fopen($inputFolderPath . $file, "r");
        
        // Read each line of the input file
        while (($line = fgets($inputFile)) !== false) {
            // Split the line by '=>'
            $parts = explode('=>', $line);
            $storedHash = trim($parts[0]);
            $password = trim($parts[1]);

            // Compare the input hash with the stored hash
            if ($inputHash == $storedHash) {
                $foundstatus = "Password found";
                $foundPass = $password;
                $check="1";
                break;
            }
        }
        // Close the input file
        fclose($inputFile);
    }

}
    if($check == "0"){
        $foundstatus = "Password Not Found";
    }

    $end = new DateTime();
    $elapsed = $end->diff($start);

    $return = "
    <table>
    <tr>
        <th colspan=3 style='text-align:center;'>Hashed Input</th>
    </tr>

    <tr>
        <td colspan=3 style='text-align:center;'>".$inputHash."</td>
    </tr>
    <tr>
        <th>Dictionary Attack Status</th>
        <th>Elasped Time</th>
        <th>Plaintext Passsword</th>
    </tr>
    <tr>
        <td>".$foundstatus."</td>
        <td>".$elapsed->format('%s.%f seconds')."</td>
        <td>".$foundPass."</td>
    </tr>
    </table>";

    echo $return;


}

?>