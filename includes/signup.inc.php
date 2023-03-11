<?php 
    if (isset($_POST['signupSubmit'])) {

        // $name = htmlspecialchars($_POST("name"), ENT_QUOTES, 'UTF-8');
        // declaration signUp input
        $name = $_POST['name'];
        $nickname = $_POST['nickname'];
        $adresse = $_POST['adresse'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $cin = $_POST['cin'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $occupation = $_POST['occupation'];
        $pass = $_POST['password'];
        $repeatPass = $_POST['repeatPassword'];

        // instantiate signupContr class
        include "../classes/dbh.classes.php";
        include "../classes/signup.classes.php";
        include "../classes/signup.contr.classes.php";
        $signup = new signupContr($nickname, $name, $pass, $adresse, $email, $phone, $cin, $occupation, $dateOfBirth, $repeatPass);

        // running errore handlersand user signup
        $signup->signupUser();

        // going to back to front page
        header('location: ../loginSignUp.php?rerror=none'); 
        echo "<script>Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          })</script>";

    
    }
?>