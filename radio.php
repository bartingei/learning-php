<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="POST">
        <input type="radio" name="radio" value="Mastercard">Mastercard <br>
        <input type="radio" name="radio" value="Visa">visa <br>
        <input type="radio" name="radio" value="American Express"> American Express <br>
        <input type="radio" name="radio" value="Paypal"> Paypal <br>

        <input type="submit" name="checkout" value="checkout">
    </form>    
</body>
</html>


<?php



/**
 *     if(isset($_POST["checkout"])){
  *      if(isset($_POST["radio"])){
  *          $creditCard = $_POST["radio"];
  *          echo $creditCard;
  *      }
  *      else{
  *          echo "please select an option";
  *      }
  *     
  *  }

 */

// using switch cases
    $radio = null ;
    //$checkout = null;
    

    if(isset($_POST["radio"])){
        $radio = $_POST["radio"];
        
    }
    switch($radio){
        case "Visa":
            echo "you have selected visa";
            break;
        
        case "Mastercard":
            echo "you have selected Mastercard";
            break;
        
        case "American Express":
            echo "you have selected American Express";
            break;
        
        case "Paypal":
            echo "you have selected Paypal";
            break;
        
        default:
            echo "please select an option";
            break;
    }

?>