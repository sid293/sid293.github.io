 <?php
function questionThree(){
   echo "hellw";
   include "link.php";
   $firstint = $_POST['firstint'];
   $secondint = $_POST['secondint'];
   $operation = $_POST["operation"];
  switch ($operation){
     case "+":
        echo $firstint + $secondint;
        break;
     case "-":
        echo $firstint - $secondint;
        break;
     case "*":
        echo $firstint * $secondint;
        break;
     case "/":
        echo $firstint / $secondint;
        break;
  }
}
questionThree();
 ?>
