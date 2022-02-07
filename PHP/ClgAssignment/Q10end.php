<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mastertable{
            border:2px double blue;
        }
    </style>
</head>
<body>
    <h2>employee data</h2>
    <form action="#" method="POST">
        <input type="text" name="word" method="post">
        <label for="choice">
            <input type="radio" name="choice" value="mastertable">mastertable
            <input type="radio" name="choice" value="sort">sort
            <input type="radio" name="choice" value="search">search
            <input type="radio" name="choice" value="total">total
        </label>
        <input type="submit" name="submit">
    </form>
        <?php

            class employee{
                public $code;
                public $name;
                public $designation;
                // function set($code,$name,$designation){
                //     $this->code = $code;
                //     $this->name = $name;
                //     $this->designation = $des;
                // }
            }
            class emp_account extends employee{
                public $account_number;
                public $joining_date;
                // public function set2($anum,$jd){
                //     $this->account_number = $anum;
                //     $this->joining_date = $jd;
                // }
            }
            class emp_sall extends employee{
                public $basic_pay;
                public $earnings;
                public $deduction;
                // parent::__construct(); not needed
                function __construct($bp,$er,$dc,$code,$name,$des,$anum,$jd){
                    $this->basic_pay = $bp;
                    $this->earnings = $er;
                    $this->deduction = $dc;
                    $this->code = $code;
                    $this->name = $name;
                    $this->designation = $des;
                    $this->account_number = $anum;
                    $this->joining_date = $jd;
                }
            }

            $emp = array();
            $emp[0] = new emp_sall(800,1000,10,950,"raju","senior officer",1038766666,"12/2/2023");
            $emp[1] = new emp_sall(700,2000,5,860,"sham","junior officer",103875555,"12/2/2022");
            $emp[2] = new emp_sall(500,5600,90,7660,"babu","junior officer",103875555,"12/2/2022");
            
            //MASTERTABLE
            function mtable($emp){
                $i = sizeof($emp);
                echo "<table class='mastertable' border=1>";
                echo "<thead>";
                echo "<tr class='mastertable'>";
                echo "<td>basic pay</td>";
                echo "<td>earnings</td>";
                echo "<td>deduction</td>";
                echo "<td>code</td>";
                echo "<td>name</td>";
                echo "<td>designation</td>";
                echo "<td>account no</td>";
                echo "<td>joining date</td>";
                echo "</tr>";
                echo "</thead>";
                for($k=0;$k<$i;$k++){
                    echo "<tr>";
                        echo "<td>";
                        echo $emp[$k]->basic_pay;
                        echo "</td>";
                        echo "<td>";
                        echo $emp[$k]->earnings;
                        echo "</td>";
                        echo "<td>";
                        echo $emp[$k]->deduction;
                        echo "</td>";
                        echo "<td>";
                        echo $emp[$k]->code;
                        echo "</td>";
                        echo "<td>";
                        echo $emp[$k]->name;
                        echo "</td>";
                        echo "<td>";
                        echo $emp[$k]->designation;
                        echo "</td>";
                        echo "<td>";
                        echo $emp[$k]->account_number;
                        echo "</td>";
                        echo "<td>";
                        echo $emp[$k]->joining_date;
                        echo "</td>";
                }   
                echo "</tr>";
                echo "</table>";
            }
            if(isset($_POST['submit'])){
                $choice = $_POST['choice'];
                switch($choice){
                    case "mastertable":
                        mtable($emp);
                        break;
                        case "sort":
                            //SORTING ARRAY USING NAME
                            function sortentrys($a,$b){
                                return strcmp($a->name,$b->name);
                                // if($a==$b) return 0;
                                // ($a<$b)? -1:1;
                            }
                            // $c = arary(23,33,20,55);
                            // usort($c,'sortentrys');
                            // var_dump($c);
                            usort($emp,'sortentrys');
                            mtable($emp);
                        
                        break;
                    case "search":
                        //SEARCH AN ENTRY
                        $flag = 0;
                        if(isset($_POST['submit'])){
                            $term =$_POST['word'];
                            for($i=0;$i<count($emp);$i++){
                                if($term==$emp[$i]->name){
                                    $flag++;
                                }
                            }
                            if($flag==0){
                                echo "is not present";
                            }else{
                                echo "is present";
                            }
                        }
                        break;
                    case "total":
                        //TOTAL SALARY
                        echo "<table border=2>";
                        echo "<tr>";
                        echo "<td>name</td>";
                        echo "<td>basic pay</td>";
                        echo "<td>earning</td>";
                        echo "<td>deduction</td>";
                        echo "<td>total salary</td>";
                        echo "</tr>";
                        for($i=0;$i<count($emp);$i++){
                            echo "<tr>";
                            echo "<td>";
                            echo $emp[$i]->name;
                            echo "</td>";
                            echo "<td>";
                            echo $emp[$i]->basic_pay;
                            echo "</td>";
                            echo "<td>";
                            echo $emp[$i]->earnings;
                            echo "</td>";
                            echo "<td>";
                            echo $emp[$i]->deduction;
                            echo "</td>";
                            echo "<td>";
                            echo $emp[$i]->basic_pay + $emp[$i]->earnings - $emp[$i]->deduction;
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        break;
                }
            }
        ?>
</body>
</html>