<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza" > pizza <br>  <!--change the name value -->
        <input type="checkbox" name="foods[]" value="Hamburger" > hamburger <br> 
        <input type="checkbox" name="foods[]" value="Hotdog" > hotdog <br> 
        <input type="checkbox" name="foods[]" value="Taco" > taco <br> 
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])){
        /**        if(isset($_POST["pizza"])){
        *        echo "you like pizza <br>";
        *    }
        *    if(isset($_POST["hamburger"])){
        *        echo "you like hamburger <br>";
        *    }
        *    if(isset($_POST["hotdog"])){
        *        echo "you like hotdog <br>";
        *    }
        *    if(isset($_POST["taco"])){
        *        echo "you like taco <br>";
        *    }
        *    if(empty($_POST["pizza"])){
        *        echo "you do not like pizza <br>";
        *    }
        *    if(empty($_POST["hamburger"])){
        *        echo "you do not like hamburger <br>";
        *    }
        *    if(empty($_POST["hotdog"])){
        *        echo "you do not like hotdog <br>";
        *    }
        *    if(empty($_POST["taco"])){
        *        echo "you do not like taco <br>";
        *    } */


        //we can store the foods in an array all we need to change is the name attribute in the form

        if(isset($_POST["submit"])){
            $foods = $_POST["foods"];

            foreach($foods as $food){
                echo "you like {$food} <br>";
            }
        }


    }
 
?>