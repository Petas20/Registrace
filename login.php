<?php
require "menu.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
    <?php echo menu();?>
    <h1>Přihlášení</h1>
    <form action="process_login.php" method="POST">
        <label for="user_name">Uživatelské jméno</label><br>
        <input type="text" 
               id="user_name" 
               name="user_name" 
               required><br><br>
        
        <label for="password">Heslo</label><br>
        <input type="password" 
               id="password" 
               name="password" 
               required><br><br>
        
        <input type="submit" value="Přihlásit se">
    </form>
</body>
</html>
