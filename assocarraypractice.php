<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="assocarraypractice.php" method="post">
        <label >Enter a Country: </label>
        <input type="text " name="country" >

<!--<label >Enter the Capital: </label>
        <input type="text " name="capital" -->

        <input type="submit" value="send" name="send">
    </form>
</body>
</html>

<?php


$capitals = array(
    "USA"=> "Washington D.C.",
    "Japan"=> "Kyoto",
    "India" => "New Delhi",
    "Kenya"=>"Nairobi",
    "Uganda" => "kampala",
    "France" => "Paris"

);

//$capital = $_POST["capital"];
//this program is to give the capital city when u enter the country
$capital = $_POST["country"];
echo "country: " . $capital . "<br>";

$capital = $capitals[$_POST["country"]];
echo "the capital is " , $capital;

?>