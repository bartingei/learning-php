<?php

$username = "JP Barrie";
$phone = "123-456-7889";

$elements = array("this ", "is ", "an", "array" , "item");

//$username = strtoupper($username); //to uppercase
//$username = strtolower($username);
//$username = trim($username);  // removes white spaces before or after the string
//$username = str_pad($username, 20,"0");   // this is used to pad the string to a length of characters with a certain character
//$phone = str_replace("-", ".",$phone );  // can be used to replace a certain character 

//$username = strrev($username);  //reversing a string

//$username = str_shuffle($username);  //shuffling the string

//$equals = strcmp($username, "JP Barrie");  //comparing the strings

//$count = strlen($username);  // to find the length of the string

//$index = strpos($phone, '-' );    //finding the index of an item on a string

//$firstName = substr($username, 0, 2);   // creating a string out of an already existing string
//$lastName = substr($username,3 ); 

//$fullName = explode(" ",$username);

$elements = implode(" ",$elements);

echo $username . "<br>";
echo $phone . "<br>";
//echo $equals . "<br>";
//echo $count . "<br>";
//echo $index . "<br>";
//echo $firstName . "<br>";
//echo $lastName . "<br>";

//foreach($fullName as $full){
//    echo $full . "<br>";
//};

echo $elements;

?>