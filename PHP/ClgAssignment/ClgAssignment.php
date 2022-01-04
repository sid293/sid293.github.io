
        <?php 

            echo "Starting\n";
            //VARIABLES
            function c(){ 
                $name = "red";
                $message = "to all uns";
                echo "welocom </br>";
                echo "echoing";
                echo "same line ";
                echo "</br>".$name." right";
                echo "</br> escape \" sequence \" character";
                echo "</br> mesage $message";
                print ("</br> printing");
            }

            //PRINT RETURNS 1
            function br(){
                $value = print "</br> this will become 1";
                print "</br> $value";
            }

            //OPRATIONS ON VARIABLES
            function a(){
                $apple = 5;
                $mango = 23;
                $total = $apple + $mango;
                print $total;
            }

            //FUNCTION
            function first(){
                echo "</br> executing first function";
            }

            //GLOBAL function
            $unit = "pecometers";
            function second(){
                global $unit;
                echo "</br> units are ".$unit;
            }
            function third(){ 
                $answer = $GLOBALS['$unit'];
                echo $answer;
            }
            // second();

            //PRINT VS ECHO
            function fourth(){
                $sono = 23;
                $mono = 44;
                echo "two variables are ".$sono , $mono;
            }
            
            //$ AND $$
            function fifth(){
                $a = "name";
                $$a = 34;
                print "</br>".$name;
            }

            //TAKING INPUT UISING TERMINAL ONLY
            function sixth(){
                echo "running function sixth";
                // $amin = readline('your namo ');
                echo "your name is $amin";
            } 
            // sixth();

            //STRLEN COUNTING
            function seventh(){
                $samet = "you";
                $len = strlen($samet);
                echo "\n $len";
            }

            //SHOWING VOWELS IN STRING
            function eighth(){
                $samet = "something new";
                $aray = array("a","e","i","o","u");
                // extract($aray);
                $a=0;
                $e=0;
                $i=0;
                $o=0;
                $u=0;
                for($i=0;$i<=strlen($samet)-1;$i++){
                    if(in_array($samet[$i],$aray)){
                        if($samet[$i]=='e'){
                            $e++;
                        }
                        elseif($samet[$i]=='a'){
                            $a++;
                        }
                        elseif($samet[$i]=='i'){
                            $i++;
                        }
                        elseif($samet[$i]=='o'){
                            $o++;
                        }
                        elseif($samet[$i]=='u'){
                            $u++;
                        }
                    }
                }
                echo "\ne is ".$e;
                echo "\na is ",$a;
                echo "\ni is ",$i;
                echo "\nu is ",$u;
                echo "\no is ",$o;
            }

            //CHECKING IF STIRNG IS PALINDROME
            function ninth($stor){
                $length = strlen($stor);
                if($length%2==0){
                    $hlen = ($length/2)-1;
                }
                else{
                    $hlen = ($length/2)-0.5;
                }
                for($i=0;$i<=$hlen;$i++){
                    $backward = $length-($i+1);
                    if($stor[$i]==$stor[$backward]){
                        echo "matched ".$stor[$i];
                    }
                    else{
                        echo "\n string is not fully palandrome";
                    }
                }
            }
            // ninth("stis");
            
            //ASSOCIATIVE ARRAYS
            function tenth(){
                // bat = isset($_POST['button'];
                // filter_has_var()
                $html = array('TheKey1'=>'value1','TheKey2'=>'value2','TheKey3'=>'value3');
                echo "<br>";
                $html['title'] = 'PHP Associative Arrays';
                echo "\n"   .$html['title'];
                echo "<br>";
                print_r($html);                    //print_r - human readable format
                echo "<br>";
                echo $html['TheKey1'];
                echo "<br>";
                print_r (array_keys($html));
                echo "<br>";
                print_r (array_values($html));
            }
            // tenth();

            //USING INCLUDE / REQUIRE
            function eleventh(){
                include 'second.php';
            }
            // eleventh();
        
            
            function posto(){
                echo $_GET["one"];
                echo $_GET["input"];
            }
            // posto();

            //Q4TH - FORM
            function twelvth(){
                echo "12";
                include 'ClgAssignment2.php';
                $fs = $_POST["first"];
                $ss = $_POST["second"];
                echo "<br>";
                echo $fs;
                echo "<br>";
                echo $ss;
                echo "<br>";
                // strpos(); 
                //str_contains();  is in php8
                echo strpos($ss,$fs); 
                // $res = strpos($ss,$fs);
                if(strpos($ss,$fs) === false){
                    echo "not found";
                }
                else{
                    echo "match found";
                }
            }
            // twelvth();
            
            //Q4TH- REPLACE
            function thirteenth(){
                include 'ClgAssignment2.php';
                $fs = $_POST["first"];
                $ss = $_POST["second"];
                echo str_replace($fs,"replace",$ss);
            }
            // thirteenth();

            //Q4TH - SPLIT
            function fourteen(){
                $rato = preg_split("/ /","string with space",-1,PREG_SPLIT_NO_EMPTY);
            }
            // fourteen();
            
            //Q4TH FINAL
            function fifteen(){
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
            }
            // fifteen();

            //Q5TH 
            function sixteenth(){
                echo "funciton sixteenth \n";

                //using explode() function
                // $inputstring = "hi my name is dodo";
                // print_r (explode(" ",$inputstring));
 
                //getting form details
                $ids = explode(",",$_POST["ids"]);
                $names = explode(",",$_POST["names"]);
                $rates = explode(",",$_POST["rates"]);
                $quantity = explode(",",$_POST["quantity"]);
                $quantityOfItems = sizeof($names);
                $totalPrice = array($quantityOfItems);
                for($i=0;$i<$quantityOfItems;$i++){
                    $totalPrice[$i] = $rates[$i] * $quantity[$i];
                    $TotalPrice = $TotalPrice + $totalPrice[$i];
                    echo "<br>";
                    print($totalPrice[$i]." ");
                }
                echo "<br>";
                print ("total price is ".$TotalPrice);
                echo "<table border='1'>
                <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>FinalPrice</th>
                </tr>
                <tr>
                <td>$names[0]</td>
                <td>$quantity[0]</td>
                <td>$totalPrice[0]</td>
                </tr>
                <tr>
                <td>$names[1]</td>
                <td>$quantity[1]</td>
                <td>$totalPrice[1]</td>
                </tr>                
                <tr>
                <td>$names[2]</td>
                <td>$quantity[2]</td>
                <td>$totalPrice[2]</td>
                </tr>     
                <tr>
                <td colspan='3'>Total price is $TotalPrice</td>
                </tr>
                </table>
                ";
            }
            // sixteenth();

            //Q6TH
            function seventeenth(){
                echo "<br>";
                echo "question sixth";
                $string1 = $_POST["fs"];
                $string2 = $_POST["ss"];
                $reverse_position = $_POST["position"];
                $option = $_POST["what"];
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
                        echo "please set appropriate input";               
                }
            }
            // seventeenth();

            //SWITCH CASE
            function eighteenth(){
                $new = "b";
                switch($new){
                    case "a":
                        echo "a";
                        break;
                    case "b":
                        echo "b";
                        break;
                    default:
                        echo "not any case";
                }

            }
            // eighteenth();

            //Q7TH
            function nineteenth(){
                $selected = $_POST["note"];
                switch("$selected"){
                    case "le":
                        $newarray = array ('knew'=>'more','none'=>'this','well'=>'come','today'=>'tomorrow','this'=>'that');
                        print_r ($newarray);
                        break;
                    case "so":
                        echo "<br> Size of: ";
                        echo sizeof($newarray);
                        break;
                    case "fa":
                        echo "<br> Flipped array: ";
                        print_r (array_flip($newarray));
                        break;
                    case "defa":
                        echo "<br> delete element from array : ";
                        unset($newarray['none']);
                        print_r ($newarray);
                        break;
                    case "sa":
                        echo "<br> shuffled array: ";
                        shuffle($newarray);
                        print_r($newarray);
                        break;
                    default:
                        echo "not selected any option";
                }
            }
            // nineteenth();

            //Q8TH
            function twenty(){
                
            }
        ?>
