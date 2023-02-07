<?php
error_reporting(0);

if (isset($_POST["hashCheck_input"]) && isset($_POST["hashCheck_option"])){

    $hashOption = $_POST['hashCheck_option'];
    $hashInput = $_POST['hashCheck_input'];
    $check="0";


    $start = new DateTime();

    if($hashOption == "1"){
        $inputFolderPath = '../Password Cracking/rainbow_files/md5hash/';
    }

    if($hashOption == "2"){
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
            if ($hashInput == $storedHash) {
                $foundstatus = "Password found";
                $foundPass = $password;
                $check="1";
                // break;

                $end = new DateTime();
                $elapsed = $end->diff($start);
            

                $return = "
                <table>
                <tr>
                    <th colspan=3 style='text-align:center;'>Hashed Input</th>
                </tr>
            
                <tr>
                    <td colspan=3 style='text-align:center;'>".$hashInput."</td>
                </tr>
                <tr>
                    <th>Rainbow Attack Status</th>
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
                break 2;
            }
        }
        // Close the input file
        fclose($inputFile);
    }

}
    if($check == "0"){


        $end = new DateTime();
        $elapsed = $end->diff($start);

        $foundstatus = "Password Not Found";

        $return = "
    <table>
    <tr>
        <th colspan=3 style='text-align:center;'>Hashed Input</th>
    </tr>

    <tr>
        <td colspan=3 style='text-align:center;'>".$hashInput   ."</td>
    </tr>
    <tr>
        <th>Rainbow Attack Status</th>
        <th>Elasped Time</th>
        <th>Plaintext Passsword</th>
    </tr>
    <tr>
        <td>".$foundstatus."</td>
        <td>".$elapsed->format('%s.%f seconds')."</td>
        <td></td>
    </tr>
    </table>";

    echo $return;

    }

}

?>


