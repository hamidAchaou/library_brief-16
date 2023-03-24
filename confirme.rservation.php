<?php
session_start();
// Declaration header
include "header.php";
// Declaration class Confirme Reservation
include "/xampp/htdocs/library_brief-16/classes/reservation.classes.php";
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
                    <a href="confirme.rservation.php" class="nav-item nav-link text-primary">Reservation</a>
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
        </nav>
    <!--================ navbar end ================== -->
    <!--========================-- start show Cards confirme reservation --=============================-->
    <div class="container-fluid py-5 wow fadeInUp mt-5" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5 Reservation">        
             <?php
              // Get reservation information
              $confirmReservations = new ConfirmReservation();
              $confirmReservationData = $confirmReservations->getReservationInfoAll();
        
              // Pagination
              $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
              $itemsPerPage = 6;
              $PageCount = ceil(count($confirmReservationData) / $itemsPerPage);
              $beginning = ($page - 1) * $itemsPerPage;
              $confirmReservationData = $confirmReservations->getReservationInfoLimit($beginning, $itemsPerPage);

              // Display reservations
              foreach ($confirmReservationData as $reservation) :
             ?>
              <!-- cards emprunt start -->
              <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                  <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="uploads/<?php echo $reservation['Cover_Image'] ?>" alt="">
                            <h6 class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo $reservation["Type"] ?></h6>
                        </div>
                        <div class="p-4">
                            <h2 class="text-center w-100" style="height: 80px;"><?php echo $reservation['Title'] ?></h2>
                        </div>
                        <form class="d-flex justify-content-center mb-3" method="post" action="../library_brief-16/includes/confirme-reservation.inc.php?Reservation_Code=<?php echo $reservation['Reservation_Code'] ?>">
                            <button class="btn btn-lg btn-success btn-lg-square rounded w-75" name="confirmereserve" type="submit">Confirme Reservation</button>
                        </form>
                        <div class="card-stats bg-info">
                            <div class="stat">
                                <div class=""><i class="fa-solid fa-user"></i></div>
                                <div class="type"><?php echo $reservation['Name'] ?></div>
                            </div>
                            <div class="stat border-stat">
                                <div class=""><i class="fa-solid fa-user"></i></sub></div>
                                <div class="type"><?php echo $reservation['CIN'] ?></div>
                            </div>
                            <div class="stat">
                                <div class="reservation"><i class="fa-solid fa-barcode"></i></div>
                                <div class="type"><?php echo $reservation['Collection_Code'] ?></div>
                            </div>
                        </div>
                  </div>
              </div>
              <!-- cards emprunt end -->
              <?php
                endforeach;
              ?>

                <!-- cards pagination start -->
                <div id="pagination" aria-label="...">
                    <ul class="pagination">
                        <?php
                            if ($page > 1) {
                                echo '<li class="page-item"><a class="page-link" href="?page='.($page-1).'">&laquo; Previous</a></li>';
                            }
                            for($i=1; $i<=$PageCount; $i++)  {
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
                                echo '<li class="page-item"><a class="page-link" href="?page='.($page+1).'">Next &raquo;</a></li>';
                            }
                        ?>
                    </ul>
				</div>
                <!-- cards pagination end -->
            </div>
        </div>
    </div>
    <!--========================-- end show Cards confirme reservation --=============================-->

    <!-- Team End -->
    <?php
        // Declaration footer
        include_once "footer.php";
    ?>
</body>
