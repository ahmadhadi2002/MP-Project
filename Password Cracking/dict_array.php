<?php

$arrayList = json_decode($_POST['arrayList'], true);

if(isset($_POST["passInput"])){

    $passInput = $_POST["passInput"];

        $check="0";

        foreach($arrayList as $value){
            if($value == $passInput){
                echo "Password Found";
                $check="1";
                break;
            }
        }

        if($check == "0"){
            echo "Password not found";
        }
        
}

?>

