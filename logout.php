<?php
require "menu.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Odhlášení</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="container">
        <?php echo menu();?>
        <h1>Odhlášení</h1>
        <?php
    
    $_SESSION['user_name'] = '';
    
    echo "<p>Byl(a) jsi odhlášen(a).</p> <a href='login.php'>Přihlásit se znovu</a>";
    
    ?>
</body>
</html>