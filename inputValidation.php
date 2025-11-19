<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inputValidation.php" method="post">

        <input type="text" name = "name" placeholder="enter your name" > <br><br>
        <input type="text" name = "age" placeholder="enter your age" > <br> <br>
        <input type="email" name = "email" placeholder="enter your email" > <br> <br>
        <input type="submit" value="send" name = "send">
    </form>
    
</body>
</html>

<?php
    if(isset($_POST["send"])){
        //to prevent sql injection, we need to filter the input/ sanitize the input

        // sanitizing inputs


        /**
         *       

         *   $name = filter_input(INPUT_POST, "name",
         *                           FILTER_SANITIZE_SPECIAL_CHARS, ) ;

         *   $age = filter_input(INPUT_POST, "age",
         *                       FILTER_SANITIZE_NUMBER_INT );

         *   $email = filter_input(INPUT_POST, "email",
         *                       FILTER_SANITIZE_EMAIL);
         *  
         * echo "hello " , $name, " <br> your age: ", $age;
         */


        //filtering inputs

        $age = filter_input(INPUT_POST, "age",
                        FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST, "email",
                        FILTER_VALIDATE_EMAIL);

        if(empty($age)){
            echo "That number is invalid <br>";
        }
        else{
            echo "you are ", $age ," years old <br>";
        }

        if(empty($email)){
            echo "That email is invalid <br>";
        }
        else{
            echo "Email: ", $email . "<br>";
        }
        

    }

?>


