<?php
require "menu.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro registrované</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
    <?php echo menu();?>
    <h1>Pro registrované</h1>
    <?php

// Kontrola přihlášení uživatele
if (empty($_SESSION['user_name'])) {
    echo "<p>Nejsi přihlášen!!! <br><br> Pro zobrazení této stránky se prosím přihlaš.</p> <a href='login.php'>Přihlásit se</a>";
    die;
}
else{
    echo "<p>Blahopřeji, patříš k pár vyvoleným, kteří si mohou přečíst tento text!</p>";
}
?>
</body>
</html>