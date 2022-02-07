
<?php 

    echo "Starting\n";
    //VARIABLES
    function c(){4
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

    //TAKING INPUT in terminal
    function sixth(){
        echo "running function sixth";
        $amin = readline('your namo ');
        echo "your name is $amin";
    } 

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
    
    //SOCIATIVE ARRAYS
    function tenth(){
        // filter_h_var()
        $html = array('key'=>'value');
        $html['title'] = 'PHP Associative Arrays';
        print_r($html);                    //print_r - human readable format
        // echo "\n".$html['title'];
    }
    // tenth();

    //USING INCLUDE / REQUIRE
    function eleventh(){
        include 'second.php';
    }
    // eleventh();

    //FORM VARIABLES AND STORING IN TXT
    function forma(){
        $name = $_POST["Name"]; 
        $option = "\n".$_POST["choose"];
        $village = "\n".$_POST["village"];
        $content = [$name,$option,$village];
        $file = 'FormStorage.txt';
        file_put_contents($file,$content);
    }
    // forma();

    //CONTINUE STATEMENT 
    function posto(){
        for($i=0;$i<20;$i++){
            echo "starting";
            if($i%2==0){
                continue;
            }
            print ("\nending");
        }
    }
    // posto();

    //WHY USE & IN REFRENCE
    // function anpasant(&$unknowne){
    //     $unknowne++;
    //     echo "\n".$unknowne;
    // }
    // $nan = 32;
    // anpasant($nan);
    // echo $nan;

    //CLASS AND OBJECTS
    function clo(){
        class Hotel{
            public $color;
            public $star;
            public $totalcus = 0;
            public function customerse($enter){
                $this->totalcus += $enter;
            }
            public function customersl($left){
                $this->totalcus -= $left;
            }
        }
        $taj = new Hotel();
        $taj->color = "white";
        $taj->star = "4";
        $taj->customerse(12);
        $taj->customersl(2);
        echo $taj->totalcus;
    }
    // clo();

    //DEALING WITH FILES
    function files(){ 
        echo "function started";
        $name = 'FormStorage.txt';
        $open = fopen($name,'r');
        $material = fread($open,filesize('FormStorage.txt'));
        echo $material;
        fclose($open);
    }
    files();



?>
