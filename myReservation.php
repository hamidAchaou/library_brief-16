<?php
session_start();
// get header page
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
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="myReservation.php" class="nav-item nav-link  text-info selectNav">My Reservation</a>
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

    <!-- show cards my reservation Start -->
    <div class="container-fluid py-5 wow fadeInUp mt-5 bg-secondary" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Your Reservation</h5>
                <label class="">
                    <input class="px-4 me-sm-3" style="height: 46px; width: 300px;" type="text">
                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Search</a>
                </label>
            </div>
            <div class="row justify-content-center g-5">

                <?php
                // declaration page class my reservaion
                include_once "/xampp/htdocs/library_brief-16/classes/myreservation.classes.php";
                $myreserve = new myReservation();

                $getMyReservationCount = $myreserve->getMyReservationCount($_SESSION['nickName']);

                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;;
                $itemsPerPage = 6;
                $PageCount = ceil($getMyReservationCount / $itemsPerPage);
                $beginning = ($page - 1) * $itemsPerPage;


                //   get Data my reservation
                $dataMyreservation = $myreserve->getMyReservation($_SESSION['nickName'], $beginning, $itemsPerPage);
                // loop in data My reservation for show Cards mt Reservation
                foreach ($dataMyreservation as $key => $value) :
                ?>
                    <!-- cards My Reservation start -->
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s" style="width: 21rem; height: 350px">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="uploads/<?php echo $value['Cover_Image'] ?>" alt="" style="height: 190px;">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded w-75" href=""><?php echo $value['Type'] ?></i></a>
                                </div>
                            </div>
                            <div class="py-2">
                                <h4 class="text-primary text-center d-flex justify-content-center mb-1 w-75"><?php echo $value['Title'] ?></h4>
                                <h5 class="text-uppercase w-100 text-dark font-weight-bold d-flex gap-1 h6 m-3"><i class="fa-solid fa-user"></i><?php echo $value['Author_Name'] ?></h5>
                            </div>
                            <div class="card-stats bg-info">
                                <div class="stat">
                                    <div class=""><i class="fa-solid fa-house-circle-check text-dark"></i></div>
                                    <div class="type"><?php echo $value['Type'] ?></div>
                                </div>
                                <div class="stat border-stat">
                                    <div class=""><i class="fa-solid fa-file-circle-plus text-dark"></i></sub></div>
                                    <div class="type"><?php echo $value['Pages_Number'] ?></div>
                                </div>
                                <div class="stat">
                                    <div class=""><i class="fa-solid fa-calendar-days text-dark"></i></div>
                                    <div class="type"><?php echo $value['Reservation_Date'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cards My Reservation end -->

                <?php
                endforeach;
                ?>

                <div id="pagination" aria-label="...">
                    <ul class="pagination d-flex justify-content-center">
                        <?php
                        if ($page > 1) {
                            echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">&laquo; Previous</a></li>';
                        }
                        for ($i = 1; $i <= $PageCount; $i++) {
                            if ($page == $i) {
                                echo "
                                    <li class='page-item'>
                                        <a class='page-link active' href='?page=$i'>$i</a>&nbsp;
                                    </li>";
                            } else {
                                echo "
                                    <li class='page-item'>
                                        <a class='page-link' href='?page=$i'>$i</a>&nbsp;
                                    </li>";
                            }
                        }
                        if ($page < $PageCount) {
                            echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">Next &raquo;</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- show cards my reservation  End -->


    <!-- foooter start -->
    <?php
    include "footer.php";
    ?>
    <!-- foooter end -->