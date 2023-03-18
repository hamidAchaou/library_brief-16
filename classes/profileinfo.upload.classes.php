<?php 
    if (isset($_POST['updateProfile'])) {
        // include "header.php";

        // $name = htmlspecialchars($_POST("name"), ENT_QUOTES, 'UTF-8');
        $Name = $_POST['name'];
        $Nickname = $_POST['nickname'];
        $Email = $_POST['email'];
        $Address = $_POST['adresse'];
        $Phone = $_POST['phone'];
        $CIN = $_POST['cin'];
        $Birth_Date = $_POST['dateOfBirth'];
        $Occupation = $_POST['Occupation'];
        // $Birth_Date = $_POST['BirthDate'];
        // $DateCreation = $_POST['DateCreation'];

        // instantiate signupContr class
        include "profile.classes.php";
        $uploadProfile = new ProfileInfo();
        // running errore handlersand user signup
        $uploadProfile->updetProfileInfo($Nickname, $Name, $Address, $Email, $Phone, $CIN, $Occupation, $Birth_Date);

        echo '
        <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
          <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
              <h1 class=" ">Youre profile is Upload</h1>
              <a href="../profile.php" class="btn btn-primary d-flex justify-content-center w-75 animated slideInLeft">OK</a>
          </div>
        </div>
        ';
    }
    include "footer.php";
?>