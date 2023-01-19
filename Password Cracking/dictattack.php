<html>
<head>
<style>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 45%;
    /* margin-left: auto; */
    /* margin-right: auto; */
    height: 190px;
    font-size: 19px;
    min-width: fit-content;
    margin: 49px 0px 120px 393px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>

</head>

<body>

    <?php 
        // UI Section

        require "../ui/navbar.html"; 

        require "../ui/dict_main.html";

        require "../ui/sliding-card.html";

        require "../ui/dict_tryit.html";

        require "../ui/dict_attack.html";


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
    // echo "Elapsed time: " . $elapsed->format('%s.%f seconds')."<br>";

    echo "
    <table>
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

    unset($_POST['dict_input']);
    unset($user_input);

}

 require "../ui/bottombar.html"; 
 
 ?>

</body>



</html>

