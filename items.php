<?php
session_start();
include "header.php";
include "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
?>

<body>
    <!--========== Navbar Start ==================-->
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 position-fixed" style="background-color: #061429; z-index: 999;">
        <!-- logo -->
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Read</h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="myReservation.php" class="nav-item nav-link">My Reservation</a>
                <a href="items.php" class="nav-item nav-link  text-info selectNav">Items</a>
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
    <!--========== Navbar end ==================-->
    <!--================ Header start ==========================-->
    <header class="bg-dark py-4">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6 mt-5">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Satisfy the thirst of knowledge</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Welcome to our library, choose your books and Feed the mind</p>
                        <form class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start" action="" method="post">
                            <label for="">
                                <input class="px-4 me-sm-3" name="inpitemsSerch" style="height: 46px; width: 300px;" type="text">
                                <button class="btn btn-primary btn-lg px-4 me-sm-3" type="submit" name="itemsSerch">Serch</button>

                            </label>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center mt-5"><img class="img-fluid rounded-3 my-5" src="img/13.jpg" alt="..." /></div>
            </div>
        </div>
    </header>
    <!--==================== Heder end ===========================-->
    <!--=================== show Items Start =====================================-->
    <div class="container-fluid wow fadeInUp  bg-secondary" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0 text-light">Welcome in your <br> library</h1>
                <h5 class="fw-bold text-primary text-uppercase pt-3">chose your Knowledge</h5>
            </div>
            <div class="g-5">
                <div class="d-flex flex-wrap gap-5 justify-content-center slideInUp" data-wow-delay="0.3s">

                    <!--========- show items (Collection) -======== -->
                    <?php
                    if (isset($_POST['itemsSerch'])) {
                        // include cards collection why Serch
                        include_once "/xampp/htdocs/library_brief-16/includes/serch-client.items.inc.php";
                    } else {
                        // includ cards Items 
                        include_once "/xampp/htdocs/library_brief-16/includes/display-collectionCards.inc.php";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
        <!--=================== show Items end =====================================-->
        <!-- foooter start -->
        <?php
        include "footer.php";
        ?>
        <!-- foooter end -->