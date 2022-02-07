<?php    
    $string1 = $_POST["fs"];
    $string2 = $_POST["ss"];
    $reverse_position = $_POST["position"];
    $option = $_POST["button"];
    // echo "<br>";
    // echo $option;
    switch($option){
        case "sm":
            //sm
            echo "<br>";
            if(strcmp($string1 , $string2)==0){
                echo "string matched";
            }
            else{
                echo "string not matched";
            }
            break;
        case "sa":
            //sa
            echo "<br>";
            $AString = $string2.=$string1;
            echo $AString;
            break;
        case "fsr":
            //fsr
            echo "<br>";
            $shortstring = substr($string1,$reverse_position);
            echo strrev($shortstring);
            break;     
        default:
            echo "set appropriate input";               
    }
?>