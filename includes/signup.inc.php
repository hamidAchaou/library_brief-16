<?php 
require_once "../header.php";
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
        echo '
        <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
          <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
              <h1 class="w-100 d-flex justify-content-center">Your account has been registered successfully</h1>
              <h2 class="w-100 d-flex justify-content-center text.light"><i class="fa-sharp fa-solid fa-check text-light h2 border border-success rounded-circle bg-success"></i></h2>
              <a href="../loginSignUp.php" class="btn btn-info d-flex justify-content-center w-75 animated slideInLeft">OK</a>
          </div>
        </div>
        ';
    }
    include_once "../footer.php";
?>