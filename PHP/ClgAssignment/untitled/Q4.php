<?php
include 'ClgAssignment2.php';
print_r ($rato);
$fs = $_POST["first"];
$ss = $_POST["second"];
$RString = $_POST["replace"];
if(strpos($ss,$fs)==0){
    echo "<br>";    
    echo "found at first place";
}
else { 
    echo "<br>";
    echo "not at first place";
}
$replaced_string = str_replace($fs,$RString,$ss);
echo "<br>";
echo "this is replaced string: ".$replaced_string;
$words = preg_split("/ /",$replaced_string);
echo "<br>";
print_r($words);
?>