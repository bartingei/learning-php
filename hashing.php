<?php
    //hashing = process of transforming sensitive data (passwords)
    //          into letters, numbers, and/or symbols
    //          cia a mathematical process. (similar to encryption)
    //          hides the original data from 3rd parties.

    $password = "B@rtingei4";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    //password_verify() function is used to assert whether the password is correct
    
    if(password_verify("B@rtingei4", $hash)){
        echo "you are logged in";

    }
    else{
        echo "incorrect password, try again";
    }


?>