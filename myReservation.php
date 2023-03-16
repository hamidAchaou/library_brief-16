<?php
session_start();
    include "header.php";
?>
<body>
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
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
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="#aboutLibrary" class="nav-item nav-link">About</a>
                    <a href="items.php" class="nav-item nav-link">Items</a>
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

    </div>

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp mt-5 bg-secondary" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Your Reservation</h5>
                <label class="">
                    <input class="px-4 me-sm-3" style="height: 46px; width: 300px;" type="text">
                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Search</a>
                </label>
            </div>
            <div class="row g-5">

                <?php
                  include_once "/xampp/htdocs/library_brief-16/classes/myreservation.classes.php";
                  $myreserve = new myReservation();
                  $dataMyreservation = $myreserve->getMyReservation($_SESSION['nickName']);
                  echo '<pre>';
                  print_r($dataMyreservation);
                  echo '</pre>';

                  foreach ($dataMyreservation as $key => $value) :
                ?>

                  <div class="col-lg-4 col-md-6 wow zoomIn">
                      <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5 bg-light">
                          <img class="img-fluid rounded" src="img/10.jpg" style="width: 60px; height: 60px;" >
                          <div class="ps-4">
                              <h4 class="text-primary mb-1"><?php echo $value['Title'] ?></h4>
                              <small class="text-uppercase"><?php echo $value['Type'] ?></small>
                          </div>
                      </div>
                      <div class="pt-4 pb-5 px-5 bg-light">
                          <h3><?php echo $value['Reservation_Date'] ?></h3>
                      </div>
                  </div>

                <?php
                  endforeach;
                ?>


            </div>
        </div>
    </div>
    <!-- Service End -->

    
<!-- foooter start -->
<?php
  include "footer.php";
?>
<!-- foooter end -->