<?php
session_start();
// include "/xampp/htdocs/library_brief-16/classes/dbh.classes.php";
include "/xampp/htdocs/library_brief-16/classes/profile-view.classes.php";
// include "/xampp/htdocs/library_brief-16/classes/profile.classes.php";
// include "/xampp/htdocs/library_brief-16/classes/profileinfo-contr.classes.php";
$profileInfo = new ProfileInfoContr();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Book you</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- font awesom library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <!-- Template Stylesheet -->
    <link href="/css/profile.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->   
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <!-- logo -->
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Read</h1>
            </a>

            <?php
                // include "/xampp/htdocs/library_brief-16/classes/profile.classes.php";
                $checkAdmin = new ProfileInfo();
                $dataChechAdmin = $checkAdmin->AdminCheck($_SESSION['nickName'] );

                // echo $checkAdmin;
                // print_r($dataChechAdmin);
                echo $dataChechAdmin[0]['Admin'];

                if ($dataChechAdmin[0]['Admin'] === 0) {
            ?> 
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="profile.php" class="nav-item nav-link text-info selectNav">Profile</a>
                            <a href="myReservation.php" class="nav-item nav-link">My Reservation</a>
                            <a href="items.php" class="nav-item nav-link">Items</a>
                            <a href="#aboutLibrary" class="nav-item nav-link">About</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="condary nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['nickName'] ?></a>
                                <div class="dropdown-menu m-0">
                                    <a href="profile.php" class="dropdown-item">profile</a>
                                    <a href="feature.html" class="dropdown-item">change password</a>
                                    <a href="includes/logout.inc.php" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                } else {
            ?>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="home.page.admin.php" class="nav-item nav-link">Home</a>
                    <a href="profile.php" class="nav-item nav-link text-info selectNav">Profile</a>
                    <a href="items.admen.php" class="nav-item nav-link">Items</a>
                    <a href="confirme.rservation.php" class="nav-item nav-link">Reservation</a>
                    <a href="confirme.emprunt.php" class="nav-item nav-link">Emprunt</a>
                    <a href="add-items.admin.php" class="nav-item nav-link">Add items</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="condary nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['nickName'] ?></a>
                        <div class="dropdown-menu m-0">
                            <a href="profile.php" class="dropdown-item">profile</a>
                            <a href="feature.html" class="dropdown-item">change password</a>
                            <a href="includes/logout.inc.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>

        </nav>

      
    <!-- Navbar End -->

    <!-- info profile Start -->
    <div class="container-xl px-4 mt-3 pt-3">
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header"><?php  $profileInfo->fetchName($_SESSION['nickName']); ?></div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4"><?php  $profileInfo->fetchName($_SESSION['nickName']); ?></div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4 form-card">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                <!-- start form profile Info -->
                <form class="form-Signup " action="classes/profileinfo-update.classes.php" method="post">
                    <div class="row g-3">

                        <label class="col-12 col-sm-6">
                            Name:
                            <input type="text" name="name" class="form-control bg-white border-0" value="<?php  $profileInfo->fetchName($_SESSION['nickName']); ?>" style="height: 40px;">
                        </label>

                        <label class="col-12 col-sm-6">
                            Nickname:
                            <input type="text" name="nickname" class="form-control bg-white border-0" value="<?php  $profileInfo->fetchNickName($_SESSION['nickName']); ?>" placeholder="enter your Nickname" style="height: 40px;">
                        </label>

                        <label class="col-12 col-sm-6">
                            Email:
                            <input type="email" name="email" class="form-control bg-white border-0" value="<?php  $profileInfo->fetchEmail($_SESSION['nickName']); ?>" placeholder="Your Email" style="height: 40px;">
                        </label>


                        <label class="col-12 col-sm-6">
                            Adresse:
                            <input type="text" name="adresse" class="form-control bg-white border-0" value="<?php  $profileInfo->fetchAddress($_SESSION['nickName']); ?>" placeholder="adresse" style="height: 40px;">
                        </label>

                        <label class="col-6 col-sm-6">
                            Phone:
                            <input type="number" name="phone" class="form-control bg-white border-0" value="<?php  $profileInfo->fetchPhone($_SESSION['nickName']); ?>" placeholder="your phone" style="height: 40px;">
                        </label>
                        <label class="col-6 col-sm-6">
                            CIN:
                            <input type="text" name="cin" class="form-control bg-white border-0" value="<?php  $profileInfo->fetchCIN($_SESSION['nickName']); ?>" placeholder="CIN" style="height: 40px;">
                        </label>
                        <label class="col-6 col-sm-6">
                            Date Of Birth:
                            <input type="date" name="dateOfBirth" class="form-control bg-white border-0" value="<?php  $profileInfo->fetchName($_SESSION['nickName']); ?>" placeholder="date of birth" style="height: 40px;">
                        </label>
                        <label class="col-6 col-sm-6">
                            Occupation:
                            <input type="text" name="Occupation" class="form-control bg-white border-0" value="<?php  $profileInfo->fetchOccupation($_SESSION['nickName']); ?>" placeholder="Occupation" style="height: 40px;">
                        </label>
                        <!-- <label class="col-6 col-sm-6">
                            fetchBirthDate
                            <input type="date" name="date" class="form-control bg-white border-0" value="<?php  $profileInfo->fetchBirthDate($_SESSION['nickName']); ?>" placeholder="password" style="height: 40px;">
                        </label> -->
                        <label class="col-6 col-sm-6" for="repeatPassword">
                            fetcDateCreation:
                            <?php  $profileInfo->fetcDateCreation($_SESSION['nickName']); ?>
                        </label>
                        <div class="col-12">
                            <button class="btn btn-primary w-50 text-center" name="updateProfile" id="btn-updateProfile" type="submit" style="height: 40px;">Update Profile</button>
                        </div>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- info profile Start -->

<style>
    body{
    margin-top:20px;
    background-color: #091e3e;
    color:#69707a;
}

.form-card {
        background-color: #091e3e;

    }
    .img-account-profile {
        height: 10rem;
    }
    .rounded-circle {
        border-radius: 50% !important;
    }
    .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }
    .card .card-header {
        font-weight: 500;
    }
    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }
    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }
    .form-control, .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    .nav-borders .nav-link.active {
        color: #0061f2;
        border-bottom-color: #0061f2;
    }
    .nav-borders .nav-link {
        color: #69707a;
        border-bottom-width: 0.125rem;
        border-bottom-style: solid;
        border-bottom-color: transparent;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0;
        padding-right: 0;
        margin-left: 1rem;
        margin-right: 1rem;
    }
</style>

<!-- foooter start -->
<?php
  include "footer.php";
?>
<!-- foooter end -->