<?php

   // echo"i like pizza";
   // echo"it is really good";

    //this is a single line comment
    /**
     * this is a multi-line comment
     */

    //variables in php
    //variable is a storage location for storing reusable data

    $name = "bro";
    $food = "pizza";
    $email = "johnpaulibet3@gmail.com";

    $age = 20;
    $users = 3;
    $quantity = 3;

    $price = 21.50;
    $tax_rate = 5.3;

    $isMarried = false;   //for boolean values false is not displayed. boolean values are usually used internally
    $isStudent = true;      //true is displayed by the number 1
    $isOnline = true;

    $total =  null;
    $grossTax = null;
    $payable = null;

    echo "hello {$name} <br>";
    echo " you like {$food} <br>";
    echo " your email: {$email} <br>";

    echo "you are {$age} years old <br>";
    echo "there are {$users} users online <br>";

    echo "price for large pizza is \${$price}  <br>";
    echo "current tax rate is {$tax_rate} <br>";
    
    echo "marriage status: {$isMarried} <br>";
    echo "is Student? {$isStudent} <br> <br>";
    
    echo "you have ordered {$quantity} x {$food} <br>";
    $total = $quantity * $price;
    $grossTax = $price / $tax_rate;
    $priceTotal = null;
    $priceTotal = round($total - $grossTax);

    echo "total is : \${$total}<br>";
    echo "total payable after tax is: {$priceTotal} <br>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <br>

    <button>Order Pizza</button>
    
</body>
</html>