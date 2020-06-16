<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
        <script>
        if()
        </script>
    </head>
    <body>
        <?php
        require("funkcje.php");
        echo "<h1> Nasz system </h1>";

        

        ?>  



        <form action="logowanie.php" method="post">
        <fieldset>
            <legend>Logowanie</legend>
            Login: <input type="text" name="login"><br>
            Hasło: <input type="password" name="haslo"><br>
            <input type="submit" name="zaloguj" value="Zaloguj"> 
        </fieldset>
        </form>

        <?php
        if(isSet($_POST["wyloguj"])){
            $_SESSION["zalogowany"] = 0;
        }
        ?>

    <form action="cookie.php" method="get">
    <fieldset>
        <legend>Utwórz cookie</legend>
    Czas: <input type="number" name="czas"><br>
    <input type="submit" name="utworzCookie" value="utworzCookie">
    </fieldset>
    </form>

        <?php
        echo '<a href="/user.php">User</a>';
        if(isSet($_COOKIE['cookie']))
        {
            echo "cookie: ".$_COOKIE['cookie'];
        }
        else
        {
            echo "Cookie jest nieważne";
        }
        ?>

    </body>
</html>