<?php
    //cookies = these are information about a user stored in a user's web-browser
    //          targeted adverts, browsing preferences and other non-sensitive data

    //creating a cookie

    //setting time for cookie to expire is in seconds, i.e. for 1 day = 86400s 
// 1. DELETE ALL OLD COOKIES YOU DON'T WANT ANYMORE
$trashCookies = ["fav_food", "favood", "fav_ood"];

foreach ($trashCookies as $old) {
    // Delete by setting expiry in the past
    setcookie($old, "", time() - 3600, "/");
}

// 2. SET ONLY THE COOKIES YOU WANT TO KEEP
setcookie("dessert", "ice cream", time() + 86400);
setcookie("name", "Johnpaul", time() + (86400 * 2), "/");
setcookie("age", "20", time() + (86400 * 4), "/");

// 3. DISPLAY CURRENT COOKIES (after refresh)
echo "<h2>Current Cookies:</h2>";
foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
}


?>