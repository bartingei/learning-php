<?php
    //array is a special variable used to store multiple items

    $foods = array("Apple", "banana", "Mango", "Coconut");

    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";

    //changing items in the array
    $foods[0] = "pineapple";

    //adding more than one item into the array
    array_push($foods, "kiwi");

    //removing last item on the array 
    array_pop($foods);

    //removing the first item on the array
    array_shift($foods);

    //reversing the array
    // you need to first create a new variable
    $reversed_foods_array = array_reverse($foods);
    // then now declare your array to be the reversed one
    $foods = $reversed_foods_array;


    // to print all items in an array
    echo "<BR> ITEMS IN THE ARRAY<BR>";
    foreach($foods as $food){
        
        echo $food, "<br>";
    }

    
?>