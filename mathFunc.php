<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mathFunc.php" method="post">
        <label for="x">x</label>
        <input type="text" placeholder="enter a number" name="x"><br>

        <label for="x">y</label>
        <input type="text" placeholder="enter a number" name="y"><br>
        
        <label for="z">z</label>
        <input type="text" placeholder="enter a number" name="z"><br>

        <input type="submit" value="total">
    </form>
</body>
</html>

<?php

    
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

   // $total = abs($x);    //abs() returns te absolute value of a number
    //$total = round($x);
    //$total = ceil($x);
    //$total = floor($x);
    //$total = sqrt($x);
    //$total = pow($x, $y);
    //$total =  max($x, $y, $z);
    //$total =  min($x, $y, $z);
    //$total = pi();
    //$total = rand(); //this will generate a random number between 1 and prolly 2 bill
    $total = rand(1, 12);  // this will generate a number between these 2 scopes of values

    echo $total , "<br>";
?>