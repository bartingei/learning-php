<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        name: <input type="text" name="username" ><br>
        email: <input type="email" name="email" ><br>
        password: <input type="password" name="password" ><br>
        <input type="submit" name="send" value="send">
    </form>
    
</body>
</html>

<?php

    if(isset($_POST["send"])){
            $name = filter_input(INPUT_POST, "username",
                        FILTER_SANITIZE_SPECIAL_CHARS);
            
            $email = filter_input(INPUT_POST, "email",
                                FILTER_SANITIZE_EMAIL);

            $password = $_POST["password"];
            

            if(empty($name) && empty($email) && empty($hash)){
                echo "missing name /  email / password";
            }     
            else{
                $hash = password_hash($password, PASSWORD_DEFAULT);

                echo "name: ", $name,
                 " <br> Email: " , $email ,
                  "<br> Password: ", $hash;
            }
            
    }

?>