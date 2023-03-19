<?php 
include "../header.php";
if (isset($_POST['updateProfile'])) {
    $Name = $_POST['name'];
    $Nickname = $_POST['nickname'];
    $Email = $_POST['email'];
    $Address = $_POST['adresse'];
    $Phone = $_POST['phone'];
    $CIN = $_POST['cin'];
    $Birth_Date = $_POST['dateOfBirth'];
    $Occupation = $_POST['Occupation'];

    include "profile.classes.php";
    $uploadProfile = new ProfileInfo();
    $uploadProfile->updetProfileInfo($Nickname, $Name, $Address, $Email, $Phone, $CIN, $Occupation, $Birth_Date);

    echo '
    <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
            <h1 class=" ">Your profile has been updated.</h1>
            <a href="../profile.php" class="btn btn-primary d-flex justify-content-center w-75 animated slideInLeft">OK</a>
        </div>
    </div>
    ';
}

include "../footer.php";
?>