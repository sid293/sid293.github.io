
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
                $samet = "vowels";
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
            // eighth();

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
                }
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
                $newarray = array ('knew'=>'more','none'=>'this','well'=>'come','today'=>'tomorrow','this'=>'that');
                switch("$selected"){
                    case "le":
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
                //ASSOCIATIVE ARRAY ENCODING AND DECODING INTO JSON
                $newarray = array(1=>3,2=>2,3=>1,4=>5,5=>4);
                var_dump($newarray);
                $keys = array_keys($newarray);

                //CHANGING VALUES IN ARRAY
                // $newarray[3] = $newarray[1];
                // echo "<br>".$newarray[1];
                // print_r($newarray);
                
                //SORTING BY VALUE ASCENDIGN , DECENDING
                echo "<br> ascending by value";
                asort($newarray);
                print_r($newarray);
                echo "<br> decending by value ";
                arsort($newarray);
                print_r($newarray);
                
                //WITHOUT CHANGING KEYS SORTING 
                echo "<br> ascending by value (without changing kyes)";
                sort($newarray);
                print_r($newarray);
                echo "<br> decending by value (without changing keys)";
                rsort($newarray);
                print_r($newarray);
                
                echo "<br> removing odd";
                function filter($var){
                    if($var%2==0){
                        return($var);
                        // echo $var;
                        // echo "is even";
                    }
                }
                print_r(array_filter($newarray,"filter"));

                //MULTISORT 
                $secondarray = array(26=>500,10=>330,15=>900,4=>5);
                echo "<br> multisort ";
                array_multisort($newarray,SORT_ASC,$secondarray,SORT_ASC);
                print_r($newarray);
                echo "<br>";
                print_r($secondarray);

                //MERGING ARRAYS
                $thirdarray = array_merge($newarray,$secondarray);
                echo "<br> merged array";
                print_r($thirdarray);
                
                //ARRAY INTERSECT
                echo "<br> intersect array";
                print_r(array_intersect($newarray,$secondarray));
                
                //ARRAY UNION
                echo "<br> unique elements array";
                print_r(array_unique($thirdarray));
                
                //ARRAY DIFFERENCE
                echo "<br> difference array";
                // print_r($newarray);
                print_r(array_diff($newarray,$secondarray));

                //ENCODING AND DECODING INTO JSON
                // $encoded = json_encode($newarray);
                // echo $encoded;
                // echo "<br>";
                // var_dump(json_decode($encoded,true)); //true changes it into associative array
                // echo "<br>";
                // asort($newarray);
                // $value = array(1,2,3,4,5);
                // //CURRENTLY WORKING ON
                // foreach($newarray as $key){
                //     $i = 0;
                //     $key = $value[$i];
                //     $i++;
                // }
                // var_dump($newarray);

                //FOREACH LOOP
                // $secondarray = [23,44,7,82];
                // foreach($secondarray as $value){
                //     echo "$value <br>";
                // }
                // foreach($newarray as $key => $value){
                //     echo "$value = $key<br>";
                // }

            }
            // twenty();

            //Q9TH
            function twentyone(){
                define("pi",22/7);          //THIS IS HOW YOU DEFINE CONSTANT
                echo pi;
                class shapes{
                    public $name;
                    public $color;
                    function set_name($name){
                        $this->name = $name;
                    }
                    function set_color($colour){
                        $this->color = $colour;
                    }
                    function area($l,$b){
                        // return $l*$b;
                        switch($this->name){
                            case "circle":
                                // return "c";
                                return 2*pi*$l;
                                break;
                            case "square":
                                // return "sq";
                                return $l*$l;
                                break;
                            case "rectangle":
                                // return "rc";
                                return $l*$b;
                                break;
                        }
                    }
                    function volume($l,$b,$h){
                        return 2*pi*$l**2;
                    }
                }
                $shap = new shapes();
                $shap->set_name("circle");
                $shap->set_color("black");
                echo "<br>";
                echo $shap->name;
                print_r($shap->area(22,0));
                var_dump($shap instanceof shapes);
                print_r($shap->volume(20,0,0));
            }
            // twentyone();

            //Q10TH
            function twentytwo(){
                // class employee{
                //     public $code;
                //     public $name;
                //     public $designation;
                //     // function set($code,$name,$designation){
                //     //     $this->code = $code;
                //     //     $this->name = $name;
                //     //     $this->designation = $des;
                //     // }
                // }
                // class emp_account extends employee{
                //     public $account_number;
                //     public $joining_date;
                //     // public function set2($anum,$jd){
                //     //     $this->account_number = $anum;
                //     //     $this->joining_date = $jd;
                //     // }
                // }
                // class emp_sall extends employee{
                //     public $basic_pay;
                //     public $earnings;
                //     public $deduction;
                //     function __construct($bp,$er,$dc,$code,$name,$designation,$anum,$jd){
                //         $this->basic_pay = $bp;
                //         $this->earnings = $er;
                //         $this->deduction = $dc;
                //         $this->code = $code;
                //         $this->name = $name;
                //         $this->designation = $des;
                //         $this->account_number = $anum;
                //         $this->joining_date = $jd;
                //     }
                // }

                // $emp = array();
                // $emp[0] = new emp_sall(500,1000,10,950,"raju","senior officer",1038766666,"12/2/2023");
                // $emp[1] = new emp_sall(700,2000,5,860,"sham","junior officer",103875555,"12/2/2022");
                // $emp[2] = new emp_sall(800,5600,90,7660,"babu","junior officer",103875555,"12/2/2022");
                // print_r($emp[2]);
                // echo "<table class='mastertable'>";
                // echo "<tr>";
                // echo "<td>basic pay</td>";
                // echo "<td>earnings</td>";
                // echo "<td>deduction</td>";
                // echo "<td>code</td>";
                // echo "</tr>";
                // echo "</table>";
                
                
                include 'Q10end.php';


                
                // class ceo extends employee{
                //     public function testing(){
                //         echo "function working";
                //     }
                //     static $count = 10;
                //     public static function firststaticfunction(){
                //         echo "stactic function working";
                //         return self::$count++;
                //     }
                // }
                // ceo::firststaticfunction();
                // echo "<br>";
                // echo ceo::firststaticfunction();
                // echo "<br>";
                // echo ceo::firststaticfunction();
                // echo "<br>";
                // echo ceo::$count;

                // $baby = new ceo();
                // $baby->set_name('boss');
                // echo $baby->name;
                // echo $baby->testing();
                // echo $baby->count;
                
                //TERNARY OPERATOR -- WORKS FOR EVERY LANGUAGE
                // echo (true)?"is true":"is false";

                // function test(){
                //     if(true) echo "ths";
                // }
                // test();

                //MYSORT FUNCTOIN
                // function sortthis($a,$b){
                //     if($a==$b) return 0;
                //     ($a<$b)? -1:1;
                //     // if($a==$b)
                //     //     return 0;
                //     // if($x<$y)
                //     //     return -1;
                //     // else
                //     //     return 1;
                // }
                // $a = array(2,6,3,8);
                // usort($a,"sortthis");
                // print_r($a);
            }
            // twentytwo();

            //Q11TH
            function twentythree(){
                interface sound{
                    public function woo();
                }
                interface Vocalizer
                {
                    public function vocalize(string $message): string;
                }
                class animal implements sound{
                    public function woo(){
                        echo "boo";
                    }
                }
                class alien implements sound{
                    public function woo(){
                        echo "err";
                    }
                }
                class species implements Vocalizer{
                    public function vocalize(string $message):string
                    {
                        return "this is string ".$message;
                    }
                }
                $homo = new species();
                $homo->vocalize('rant');
                $cat = new animal();
                $cat->woo(); 
                $octopos = new alien();
                $octopos->woo();
            }
            // twentythree();
            
        ?>
