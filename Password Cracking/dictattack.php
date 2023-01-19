<html>
<head>
<style>



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
    echo "----------------NOW TESTING----------------- <br>";
    echo "User Input: ".$user_input."<br>";

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
                echo "Dict Attack Status: Password Found <br>";
                $check="1";
                break 2;
            }
            }
        }
    }

    if($check == "0"){
        echo "Dict Attack Status: Password Not Found <br>";
    }

    $end = new DateTime();
    $elapsed = $end->diff($start);
    echo "Elapsed time: " . $elapsed->format('%s.%f seconds')."<br>";

    unset($_POST['dict_input']);
    unset($user_input);
}

 require "../ui/bottombar.html"; 
 
 ?>

</body>



</html>

