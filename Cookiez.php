<?php
    //cookies = these are information about a user stored in a user's web-browser
    //          targeted adverts, browsing preferences and other non-sensitive data

    //creating a cookie

    //setting time for cookie to expire is in seconds, i.e. for 1 day = 86400s 

    setCookie("fav_food", "pizza", time() - 3600 );
    setcookie("fav_food", "", time() - 3600);
    setcookie("favood", "", time() - 3600);
    setcookie("fav_ood", "", time() - 3600);

    setCookie("name", "johnpaul", time() + (86400 * 2), "/");
    setCookie("age", "20", time() + (86400 * 4), "/");
    setCookie("dessert", "ice cream", time() + (86400 * 3), "/");

    forEach($_COOKIE as $key => $values){
        echo "{$key} = {$values} <br>";
    }

    if(isset($_COOKIE["name"])){
        echo "you are {$_COOKIE["name"]}!!!";
    }
    else{
        echo "I don't know your name";
    }
?>