<html>
<head>
<style>

.table_div {
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

.table_div td, th {
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function submitForm(event) {
      event.preventDefault();
      // submit form through ajax or any other method
  
    var formData = {
        'dict_input': $('input[name=dict_input]').val(),
      };
  
      $.ajax({
        type: "POST",
        url: "dictattack.php",
        data: formData,
        success: function(data) {
          table= "<table><tr><th>User Input</th><th>Dictionary Attack Status</th><th>Elasped Time</th></tr><tr><td>".data(0)."</td><td>".data(1)."</td><td>".data(2)."</td></tr></table>";
          alert("Form submitted successfully!");
          document.getElementById("table_div").innerHTML=table;
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
          alert("An error occurred while submitting the form.");
        }
      });
    }
  </script>

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

  //   echo "
  //   <table >
  //   <tr>
  //     <th>User Input</th>
  //     <th>Dictionary Attack Status</th>
  //     <th>Elasped Time</th>
  //   </tr>
  
  //   <tr>
  //     <td>".$user_input."</td>
  //     <td>".$foundstatus."</td>
  //     <td>".$elapsed->format('%s.%f seconds')."</td>
  //   </tr>
  // </table>";

  $time = $elapsed->format('%s.%f seconds');

  $return = array($user_input,$foundstatus,$time);
  echo json_encode($return);

    unset($_POST['dict_input']);
    unset($user_input);

}

echo "<table class='table_div' name='table_div' id='table_div' display='none'></table>";

require "../ui/bottombar.html"; 

 ?>


</body>

</html>

