<?php

    // session = SGB (super global variable) used to store information on a user
    //           is used across multiple pages
    //           a user is assigned a session id
    //           e.g login credentials

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
        username: <input type="text" name="username"><br>
        password: <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">

        
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            //for testing purposes
            //echo "username: {$_SESSION["username"]} <br>";
            //echo "password: {$_SESSION["password"]} <br> ";

            header("location: home.php");
        }
        else{
                echo "missing username / password <br>";
            }
    }
    
?>