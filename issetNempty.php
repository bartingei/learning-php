<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="issetNempty.php" method="post">
        <label for="username">username: </label>
        <input type="text" name="username" id="username"><br>

         <label for="password">password: </label>
         <input type="password" name="password" id="password"><br>

         <input type="submit" name="login" value="login">
    </form>
    
</body>
</html>

<?php

//isset() = returns TRUE if a variable is declared and not null, ""    isset is used to identify Does this thing EXIST or NAH?
//empty() = returns TRUE if a variable is not declared , false , null,     Does this thing have ANY VALUE or is it basically nothing?

//$username = "jp";

//echo isset($username);     // this will return 1

/**if(isset($username)){
    echo "this variable is set";
}
else{
    echo "this variable is not set";
} */

/**if(empty($username)){
    echo "username is empty";
}
else{
    echo "username is not empty";
} */

    $username = $_POST["username"];
    $password = $_POST["password"];

    //echo $username;
    //echo $password;

    /**foreach($_POST as $key => $value){
    echo "{$key} = {$value}<br>";
}  */

    if(isset($_POST["login"])){
        $username  = $_POST["username"];
        $password  = $_POST["password"];

        if(empty($username)){
            echo "<br>Enter a username";
        }
        elseif(empty($username)){
            echo "<br>password missing";
        }
        else{
            echo "<br>Hello: {$username}";
        }

        
       
        
    }

?>