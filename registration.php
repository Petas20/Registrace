<?php
require "menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
       <?php echo menu();?>
    <h1>Registrace</h1>
    <form action="process_registration.php" method="POST">
        <label for="first_name">Křestní jméno</label><br>
        <input type="text" 
               name="first_name"
               id="first_name"
               placeholder="Křestní jméno"
               required><br><br>
        <label for="second_name">Příjmení</label><br>
        <input type="text"
               name="second_name"
               id="second_name"
               placeholder="Příjmení"
               required><br><br>
        <label for="user_name">Uživatelské jméno</label><br>
        <input type="text" 
               name="user_name"
               id="user_name"
               placeholder="Uživatelské jméno"
               required><br><br>
        <label for="password">Heslo</label><br>
        <input type="password" 
               name="password"
               id="password"
               placeholder="Heslo"
               required><br><br>
        <label for="password_confirm">Ověření hesla</label><br>
        <input type="password" 
               name="password_confirm"
               id="password_confirm"
               placeholder="Heslo znovu"
               required><br><br>

        <input type="submit" value="Registrovat se">
    </form>
</body>
</html>