<?php
if (isset($_POST["dict_input"])){
    
    $user_input = $_POST['dict_input'];

    $dictword = file('../Password Cracking/dictattack_files/words.txt');
    $check="0";
    

    $start = new DateTime();

    // foreach($dictword as $dictword){
    //     //echo $dictword."<br>";
    //     //$dictword= strval($dictword);
    //     if (strcmp(trim($dictword), $user_input) == 0){
    //         echo "Dict Attack Status: Password Found <br>";
    //         $check="1";
    //     }
    // }

    $directory = new DirectoryIterator('../Password Cracking/dictattack_files');
    foreach($directory as $file) {
        if($file->isFile() && $file->getExtension() === 'txt') {
            $lines = file($file->getPathname());
            foreach($lines as $line) {
            if(strcmp(trim($line), $user_input) == 0) {
                $foundstatus = "Password Found <br>";
                $check="1";
                break 2;
            }
            }
        }
    }

    if($check == "0"){
        $foundstatus = "Password Not Found";
    }

    $end = new DateTime();
    $elapsed = $end->diff($start);
    //echo "Elapsed time: " . $elapsed->format('%s.%f seconds')."<br>";


  //$time = $elapsed->format('%s.%f seconds');
  
    $return = "
    <table >
        <tr>
            <th>User Input</th>
            <th>Dictionary Attack Status</th>
            <th>Elasped Time</th>
        </tr>
    
        <tr>
            <td>".$user_input."</td>
            <td>".$foundstatus."</td>
            <td>".$elapsed->format('%s.%f seconds')."</td>
        </tr>
     </table>";

    echo $return;

  //$return = array($user_input,$foundstatus,$time);
  //echo json_encode($return);

    unset($_POST['dict_input']);
    unset($user_input);

}
?>