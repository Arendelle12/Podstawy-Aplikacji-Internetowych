<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
        require("funkcje.php");
        
        if(isSet($_GET["utworzCookie"]))
        {
            $life_time = $_GET['czas'];
            if(setcookie("cookie", "123", time()+$life_time,"/"))
            {
                echo "Utworzono cookie";
            } else{
                echo "NIE utworzono cookie"; 
            }
        }
        ?>
<br></br>
<a href="index.php">wstecz</a>
    </body>
</html>