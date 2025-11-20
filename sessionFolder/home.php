<?php

    // session = SGB (super global variable) used to store information on a user
    //           that is used across multiple pages
    //           a user is assigned a session id
    //           e.g login credentials

    session_start();

    //as long as you start your session , you can access session variables

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="home.php" method="post">
        <h3>click the button below to log out of this page</h3>
        <input type="submit" name="logout" value="log out">
    </form>
</body>
</html>
<?php

    if(isset($_POST["logout"])){
        //this will end the session first then redirect you to the login page
        session_destroy();
        header("location: session.php");
    }

?>