<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="function.php" method="post">
        length:<input type="text " name="length" > <br><br>
        width :<input type="text " name="width" > <br><br>
        <input type="submit" value="submit" name="submit"> <br>

    </form>
    
</body>
</html>

-->

<?php
    //function is a block of reusable code i.e. add()
    
     //function greet($firstName,$age){

        /**echo "Happy birthday to you <br>";
            echo "Happy birthday to you ! <br>";
            echo "Happy birthday dear ", $firstName , "<br>";
            echo "Happy birthday to you !!! <br><br>";
            echo "how old are you now? " , $age, "<br><br>";

        }

    greet("jp", 21); */

    //function is_even($num){
        /**if($num % 2 == 0){
            echo "Even!!";
        }
        else{
            echo "Odd";
        }
    }

    is_even(12); */

    function hypotenuse(int $length,int $width){
        
        $hypotenuse = sqrt(($length * $length) + ($width * $width));

        return  $hypotenuse;

    }

    echo hypotenuse(12, 20);

?>