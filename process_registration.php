<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = addslashes($_POST['first_name']);
    $second_name = addslashes($_POST['second_name']);
    $user_name = addslashes($_POST['user_name']);
    $password = addslashes($_POST['password']);
    $password_confirm = addslashes($_POST['password_confirm']);

    if ($password !== $password_confirm) {
        echo "<p>Hesla se neshodují.</p>";
        exit;
    }

    // Pripojení k databázi
    $db_host="";
    $db_user="";
    $db_password="";
    $db_name="";
    $connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);
    if(mysqli_connect_error()){
        echo mysqli_connect_error();
        exit();
    }
    // Kontrola existence uzivatelskeho jmena v databazi
    $query_check = "SELECT user_name FROM seznam_uzivatelu WHERE user_name = '$user_name'";
    $stmt_check = $connection->prepare($query_check);
    $stmt_check->execute();
    $stmt_check->store_result();
    
    if ($stmt_check->num_rows > 0) {
        echo "<p>Uživatelské jméno je již použito.</p>";
        exit;
    }

    // Vlozeni dat do databaze
    $query_insert = "INSERT INTO seznam_uzivatelu (first_name, second_name, user_name, password) VALUES ('$first_name', '$second_name', '$user_name', '$password')";
    $stmt_insert = $connection->prepare($query_insert);
    $stmt_insert->execute();
    if($stmt_insert){
        $_SESSION['user_name'] = $user_name;
    }

    header("Location: for_registered.php"); // Presmerování na přihlašovací stránku
    exit;
}
?>
