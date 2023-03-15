<?php
//   require "addItems.classes.php";
include "header.php";
?>


 <body>
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 position-fixed" id="nav">
            <!-- logo -->
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Read</h1>
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-link ">Home</a>
                    <a href="#" class="nav-link ">MY Reservation</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Setting</a>
                            <a href="feature.html" class="dropdown-item">change password</a>
                            <a href="team.html" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-4">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6 mt-5">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Satisfy the thirst of knowledge</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Welcome to our library, choose your books and Feed the mind</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <label for="">
                                    <input class="px-4 me-sm-3" style="height: 46px; width: 300px;" type="text">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Search</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center mt-5"><img class="img-fluid rounded-3 my-5"  src="img/13.jpg" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Navbar & Carousel End -->
    </div>

        <!-- Team Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                    <!-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                        <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
                    </div> -->




                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/11.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded w-50" href="">Reservation</a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/11.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded w-50" href="">Reservation</a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/11.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded w-50" href="">Reservation</a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/11.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded w-50" href="">Reservation</a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/11.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded w-50" href="">Reservation</a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/11.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded w-50" href="">Reservation</a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Team End -->

<!-- foooter start -->
<?php
  include "footer.php";
?>
<!-- foooter end -->