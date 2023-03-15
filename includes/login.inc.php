<?php
if (isset($_POST['loginSubmit'])) {

    // declaration signUp input
    $email = $_POST['emailLogin'];
    $pass = $_POST['loginPassword'];

    // instantiate signupContr class
    // include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new loginContr($email, $pass);

    // running errore handlersand user signup
    $login->loginUser();

// Verify whether the account is an administrator or a subscriber
    $chackAdmin = new login();
    $chackAdmin->checkAdmin($email);

    // going to back to front page
}

?>