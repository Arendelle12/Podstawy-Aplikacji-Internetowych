<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
        require_once("funkcje.php");
        if($_SESSION["zalogowany"] != 1){
            header("Location: index.php");
        } else {
            echo "Zalogowano jako " . $_SESSION["zalogowanyImie"] . "<br>";
        }
        
        
        ?>

        <form action="index.php" method="post">
            <input type="submit" name="wyloguj" value="Wyloguj">
        </form>

        <form action="index.php" method="post" enctype="multipart/form-data">
            Wczytaj plik: <input name="myfile" type="file">
            <input type="submit" value="Załaduj zdjęcie" name="Zaladuj">
        </form>

        <?php
            if(isSet($_POST["Zaladuj"])){
                zaladujObraz();
            }
        ?>
        <img src="/zdjeciaUzytkownikow/auto.png" alt="auto">
        <?php 
            echo '<a href="/index.php">Index</a>';
        ?>

    </body>
</html>