<?php
    //server = super global variable that contains headers, paths and script locations.
    //          The entries in this array are created by the web server
    //          shoes nearly everything you need to know about the current web page env.

    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value} <br>" ;
    }

?>