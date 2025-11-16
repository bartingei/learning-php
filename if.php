<?php

/**$age = 100;
 * 
if($age >= 65){
    echo "you are too old";
}
elseif($age >= 18){
    echo "welcome to the site";
}elseif($age <= 0){
    echo "invalid age";
}
else{
    echo "you must be 18+ ";
}
 */

/**$adult = false;

if($adult == true){
    echo "you can enter";
}
else{
    echo "you must be an adult to enter";
} */

    //program to calculate someone's pay

    $hours = 45;
    $rate = 1500;
    $weely_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40 ) + (($hours - 40) * ($rate*1.5));
    }

    echo "you made ksh.{$weekly_pay} this week";

?>