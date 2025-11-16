<?php
//associative array = array made of key=>value pairs

//examples
//countries => capital
//id => username
//item => price

$capitals = array("USA"=> "Washington D.C.",
 "Japan"=> "Kyoto",
  "India" => "New Delhi",
   "Kenya"=>"Nairobi",
   "Uganda" => "kampala",
   "France" => "Paris"

);
//printing out a value
echo $capitals['India'],"<br>";

//changing value
$capitals["kenya"] = "Eldoret";

//removing last item
array_pop($capitals);

//removing first item
array_shift($capitals);

//printing all vales in the associative array
foreach($capitals as $key => $value){
    echo "{$key} = {$value} <br>";
}

//to print out only the keys
$keys = array_keys($capitals);

echo "<br> printing out only the keys: <br>";
foreach($keys as $key){
    echo $key, "<br>";
}

//to print out only the values
$values = array_values($capitals);
echo "<br>Printing out only the values:<br>";

foreach($values as $value){
    echo $value . "<br>";
}

//to flip the array
$capitals = array_flip($capitals);

foreach($capitals as $key => $value){
    echo "<br> {$key} = {$value} <br>";
}

//reversing order of the array
$reversed_array = array_reverse($capitals);

$capitals = $reversed_array;

foreach($capitals as $key => $value){

    echo "<br> {$key} = {$value} <br>";

}

//TO PRINT OUT TOTAL NUMBER OF KEY VALUE PAIRS 
echo "value pairs: " ,count($capitals);

?>