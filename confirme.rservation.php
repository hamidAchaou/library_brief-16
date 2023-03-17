<?php
session_start();
include "header.php";
// include "/classes/show-confirm.reservation.classes.php";
include "/xampp/htdocs/library_brief-16/classes/show-confirm.reservation.classes.php";
?>

<body>
    <!--================ navbar start ================== -->
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 logSin position-fixed">
        <!-- logo -->
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Read</h1>
        </a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="home.page.admin.php" class="nav-item nav-link">Home</a>
                <a href="items.admen.php" class="nav-item nav-link">Items</a>
                <a href="Exposed-items.admin.php" class="nav-item nav-link">Exposed items</a>
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
    </nav>
    <!--================ navbar end ================== -->

        <!-- Team Start -->
        <div class="container-fluid py-5 wow fadeInUp mt-5" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
            
        <?php
            $confirme = new confirmReservation();
            $confirmeData = $confirme->showReserv();
            // echo "<pre>";
            // print_r($confirmeData);
            // echo "</pre>";
            foreach ($confirmeData as $key => $value) :  
        ?>


                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/2.jpg" alt="">
                            <!-- <form method="post" action="" class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded w-50" name="confirmereserve" type="button" href="../library_brief-16/includes/confirme-reservation.inc.php">Confirme</a>
                            </form> -->
                                
                            <form method="post" action="../library_brief-16/includes/confirme-reservation.inc.php?Reservation_Code=<?php echo $value['Reservation_Code'] ?>" class="team-social">
                                <button class="btn btn-lg btn-primary btn-lg-square rounded w-50" name="confirmereserve" type="submit">Confirme</button>
                            </form>

                        </div>
                            <div class="p-4">
                                <h3>Title: <span class="text-primary"><?php echo $value['Title'] ?></span></h3>
                                <h4>Author Name: <span class="text-primary"><?php echo $value['Author_Name'] ?></span></h4>
                                <h4>Type: <span class="text-primary"><?php echo $value['Type'] ?></span></h4>
                                <h4>Name:<span class="text-primary"><?php echo $value['Name'] ?></span></h4>
                                <h4>Cin: <span class="text-primary"><?php echo $value['CIN'] ?></span></h4>
                                <h4>Collection Code: <span class="text-primary"><?php echo $value['Collection_Code'] ?></span></h4>
                            </div>
                    </div>
                </div>
        <?php
            endforeach;
        ?>
            </div>
        </div>
    </div>
    <!-- Team End -->
</body>
