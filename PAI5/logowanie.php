<?php session_start(); ?>
<?php

require("funkcje.php");

if(isSet($_POST["zaloguj"]))
        {
            //echo "Przesłany login: " . $_POST["login"] . "<br>";
            //echo "Przesłane hasło: " . $_POST["haslo"] . "<br>";
            $login = $_POST["login"];
            $login = test_input($login);

            $haslo = $_POST["haslo"];
            $haslo = test_input($haslo);

            czyZnana($login, $haslo, array($osoba1, $osoba2));

            if($_SESSION["zalogowany"] == 1){
                header("Location: user.php");
            } else {
                header("Location: index.php");
            }
        }

?>