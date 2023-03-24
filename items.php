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
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center mt-5"><img class="img-fluid rounded-3 my-5"  src="img/13.jpg" alt="..." /></div>
            </div>
        </div>
    </header>
    <!--==================== Heder end ===========================-->
    <!--=================== show Items Start =====================================-->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-3">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Welcome in your <br> library</h1>
            <h5 class="fw-bold text-primary text-uppercase pt-3">chose your Knowledge</h5>
        </div>
        <div class=" g-5">
            <div class="d-flex flex-wrap gap-5 justify-content-center slideInUp" data-wow-delay="0.3s">

             <?php
              // get data width class addItems.classes
              $showItems = new AddItems();
              $collectionDataCount = $showItems->getPageCount();
    
              // Pagiantion
              $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
              $itemsPerPage = 6;
              $PageCount = ceil($collectionDataCount/$itemsPerPage);
              $beginning = ($page-1) * $itemsPerPage;
    
              // get Data items limite 6 row
              $collectionData = $showItems->getCollectionInfo($beginning, $itemsPerPage);
              // Display reservations
              foreach ($collectionData as $key => $value) :                  
             ?>
                <!--============ start show cards items ==================-->
                <div class="wow slideInUp mb-5" data-wow-delay="0.3s" style="width: 19rem; height: 350px">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden" style="height: 200px;">
                            <img class="img-fluid" src="../library_brief-16/uploads/<?php echo $value["Cover_Image"] ?>" alt="">
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
                <!--============ start show cards items ==================-->

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
            </div>
        </div>
    </div>
    <!--=================== show Items end =====================================-->
    <!--=================== show Items end =====================================-->
    <!-- foooter start -->
    <?php
    include "footer.php";
    ?>
    <!-- foooter end -->

