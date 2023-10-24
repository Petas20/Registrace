<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = addslashes($_POST['user_name']);
    $password = addslashes($_POST['password']);

    // Pripojeni k databazi
    $db_host = "";
    $db_user = "";
    $db_password = "";
    $db_name = "";
    $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if(mysqli_connect_error()){
        echo mysqli_connect_error();
        exit();
    }

    // Overeni prihlasovacich udaju
    $query = "SELECT user_name, password FROM seznam_uzivatelu WHERE user_name = '$user_name'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];
        
        if ($stored_password == $password) {
            $_SESSION['user_name'] = $user_name;
            echo "<p>Ahoj, úspešně ses přihlásil(a) jako ".$user_name.". Můžeš pokračovat na stránku pro přihlášené <br><br></p> <a href='for_registered.php'>VSTOUPIT</a>";
            exit;
        } else {
            echo "<p>Cha cha cha - zadal jsi špatné heslo - cha cha cha</p>";
        }
    } else {
        echo "<p>Uživatel neexistuje</p>";
    }
}
?>
