<?php
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
?>