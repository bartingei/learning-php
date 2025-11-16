<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="restaurant.php" method="get">
        <label for="quantity">quantity</label>
        <input type="text" name = "quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php

    //using get will show the quantity on the url, Post hides th quantity on the url
    $item = "rice and beef ";
    $price = 120;

    $quantity = $_GET['quantity'] ;
    $total = null;
    $total = $quantity * $price;

    echo "you have ordered {$quantity} x {$item} <br>";
    
    echo "your total is ksh.{$total} <br>"
?>