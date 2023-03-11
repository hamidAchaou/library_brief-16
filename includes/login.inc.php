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

    // going to back to front page
    header('location: ../home.page.admin.php?error=none');
}

?>