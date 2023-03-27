<?php
session_start();
// check Penalty count 
include "/xampp/htdocs/library_brief-16/classes/penaltyCount.classes.php";

// declaration class Penalty Count
$PenaltyCount = new PenaltyCount();
// get Borrowing Return Date
$getBorrowingReturnDate = $PenaltyCount->getBorrowingReturnDate($_SESSION['nickName']);
$today = date("Y-m-d"); //get date of this day

// lop in borrowing Return Date In order to see whether the element was returned or not 
foreach ($getBorrowingReturnDate as $borrowingReturnDate) {
    // Compare today's date with the repeat date, and if today's date is greater than the number of one penalty
    if ($today > $borrowingReturnDate['Borrowing_Return_Date'] && $borrowingReturnDate['Status'] === 'Borrowed') {
        $PenaltyCount->insertPenaltyCount($_SESSION['nickName']);
    }
}

// get header
include "header.php";
?>

<body>
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <!-- logo -->
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Read</h1>
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link text-info selectNav">Home</a>
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
        </nav>

        <header id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" style="height: 620px;" src="img/7.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">with Book You</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Satisfy the thirst of knowledge
                            </h1>
                            <a href="items.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Reservation
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" style="height: 620px;" src="img/2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">with Book You</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Satisfy the thirst of knowledge
                            </h1>
                            <a href="items.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </header>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Header Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-books-medical"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Books</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-compact-disc"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">cd</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">novel</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-compact-disc"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">magazine</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Start -->

    <!--============ show random items for reservation Start ========================-->
    <div class="wow fadeInUp" data-wow-delay="0.1s">
        <div class="py-3 bg-secondary">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Welcome in your <br> library</h1>
                <h5 class="fw-bold text-light text-uppercase pt-3">chose your Knowledge</h5>
            </div>

            <div class="g-5">
                <div class="d-flex flex-wrap gap-5 justify-content-center slideInUp" data-wow-delay="0.3s">
                    <?php
                    include "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
                    //   get data width class addItems.classes
                    $showItems = new AddItems();
                    $collectionData = $showItems->getThreeItems();

                    // print_r($collectionData);

                    foreach ($collectionData as  $key => $value) :
                        $collection_code = $value["Collection_Code"];

                    ?>
                        <!-- Cards Items start -->
                        <div class="wow slideInUp mb-5" data-wow-delay="0.3s" style="width: 19rem; height: 350px">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden" style="height: 200px;">
                                    <img class="img-fluid w-100" src="uploads/<?php echo $value["Cover_Image"] ?>" alt="">
                                    <h6 class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo $value["Status"] ?></h6>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3"><?php echo $value["Title"] ?></h4>
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo $value["Author_Name"] ?></small><br>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $value["Edition_Date"] ?></small><br>
                                </div>
                                <div class="d-flex justify-content-center mb-3">
                                    <?php
                                    if ($value["Status"] !== "Available") {
                                        echo "<button type='button' class='btn btn-secondary w-75'>this Items is bokid up</button>";
                                    } else {
                                    ?>
                                        <button type="button" class="btn btn-info w-75" data-bs-toggle="modal" data-bs-target="#reserv<?php echo $value['Collection_Code'] ?>">reservation</button>
                                    <?php
                                    };
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Cards Items End -->

                        <!--========== start modal reservation =============-->
                        <div class="modal fade" id="reserv<?php echo $value['Collection_Code'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirme Reservation</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h1>are you sure reserve this item!!</h1>
                                        <!-- <p>are you sur reserv this?</p> -->
                                        <button type="button" class="btn btn-success w-100"><a href="includes/reservation.client.classes.php?idcollection=<?php echo $value['Collection_Code'] ?>" class="btn">reserv</a></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--========== end modal reservation =============-->

                    <?php
                    endforeach;
                    ?>
                </div>
                <div class="w-100 h-25 d-flex align-items-center justify-content-center pt-5 mt-3">
                    <!-- button  See All Items-->
                    <a href="items.php" class="btn btn-primary py-md-2 px-md-5 me-3 animated slideInLeft">See All items
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- show random items for reservation end -->
    
    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="aboutLibrary" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/10.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">The Best Library With 10 Years of Experience</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request
                        A Quote</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!--  Footer start -->
    <?php
    include "footer.php";
    ?>
    <!-- footer end -->
</body>