<?php
     // or ensures that at least one condition is met resulting to be true if atleast one is true
     //! - not

    /**$temp = -25;

    if($temp < 0 || $temp >30){ 
        echo "the weather is bad";
    }
    else{
        echo "the weather is good";
    } */

    // election program
    $isCitizen = false;
    $age = 32;
    

    if(!$isCitizen && $age >= 18 ){
        echo "you can vote";
    }
    else{
        echo "you cannot vote";
    }

?>