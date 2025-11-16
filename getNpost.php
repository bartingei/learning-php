<?php
{
        //learning about the get and post in php

    //$_GET , $_POST = special variables used to collect data from html form 
    //                  data us sent to the fil in the action attribute of <form>
    //                  <form action="file_name.php" method = "get"


    //$_GET =  data is appended to the url
    //          not secure
    //          char limit
    //          bookmark is possible with values
    //          Get requests can be cached
    //          better for a search page

    //$_POST    =   data is packaged inside the body of http request
    //              more secure
    //              no data limit 
    //              POST requests cannot be cached
    //              better for submitting credentials
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="getNpost.php" method="post">
    <label for="name">name:</label><br>
    <input type="text" name="username"><br>

    <label for="password">password:</label><br>
    <input type="password" name="password"><br>

    <button type="submit">submit</button>


</form>
    
</body>
</html>

<?php

    echo $_POST["username"] . "<br>";  // you can also use echo {"$_GET["username"] <br>"};  
    echo $_POST["password"] . "<br>";

?>