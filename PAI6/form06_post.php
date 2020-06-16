<?php
if (!isset($_SESSION)) { session_start(); }
print<<<KONIEC
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form action="form06_redirect.php" method="POST">
id_prac <input type="text" name="id_prac">
nazwisko <input type="text" name="nazwisko">
<input type="submit" value="Wstaw">
<input type="reset" value="Wyczysc">
</form>

<a href="form06_get.php">GET</a>
<br>
KONIEC;

if(isset($_SESSION['message'])){
    printf($_SESSION['message']);
    unset($_SESSION['message']);
  }

?>