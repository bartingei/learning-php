<?php

/**    $grade = "A";

*    switch($grade){
*        case "A":
*            echo "Excellent";
*            break;
*        case "B":
*            echo "Good";
*            break;
*        case "C":
*            echo "Average";
*           break;
*        case "D":
*            echo "Poor";
*            break;
*        case "E":
*            echo "Failed, retake";
*            break;
*        case "F":
*            echo "Failed, retake";
*            break;
*        default:
*            echo "{$grade} is invalid";
*    }
             */

    $date = date("l");  //this is a small letter L 

    switch($date){
        case "Monday":
            echo "I hate Monday😪😭!";
            break;
        case "Tuesday":
            echo "Titties Tuesday 💓";
            break;
        case "Wednesday":
            echo "Wednesday: Work week is halfway over 😁";
            break;
        case "Thursday":
            echo "Thursday: Its almost weekend 🥳";
            break;
        case "Friday":
            echo "Friday: Time to Party!🥳🥳🥳";
            break;
        case "Saturday":
            echo "Saturday: Party is still on 🥳🥳🥳🥳";
            break;
        case "Sunday":
            echo "Sunday: Time to rest 🛌😴";
            break;
        default:
            echo "invalid day";
            break;
    }

?>