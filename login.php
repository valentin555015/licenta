<?php

// Golire spatii
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM utilizator WHERE email='$email'");

if ( $result->num_rows == 0 ){ //Daca utilizatorul nu exista
    $_SESSION['message'] = "Utilizatorul cu acest Email nu exista!";
    header("location: error.php");
}
else { //Daca utilizatorul exista
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['user_name'] = $user['username'];
    }
    else {
        $_SESSION['message'] = "Parola gresita, reincearca!";
        header("location: error.php");
    }
}
?>
