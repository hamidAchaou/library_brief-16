    <?php
    session_start();
    include "header.php";
    include_once "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
    ?>



    <body class="">

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
                    <a href="items.admen.php" class="nav-item nav-link text-primary">Items</a>
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
        </nav>
        <!--================ navbar end ================== -->

        <!-- Blog Start -->
        <div class="container-fluid py-5 wow fadeInUp bg-secondary" data-wow-delay="0.1s">
            <div class="container py-5 pt-5 mt-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Reservation</h5>
                    <h1 class="mb-0">Welcome chose your Knowledge</h1>
                </div>

                <!--============ start show cards items ==================-->
                <div class=" g-5">
                    <div class="d-flex flex-wrap gap-5 justify-content-center slideInUp mb-5" data-wow-delay="0.3s">

                        <?php
                        // get data width class addItems.classes
                        $showItems = new AddItems();
                        $collectionDataCount = $showItems->getPageCount();

                        // Pagiantion
                        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                        $itemsPerPage = 6;
                        $PageCount = ceil($collectionDataCount / $itemsPerPage);
                        $beginning = ($page - 1) * $itemsPerPage;

                        // get Data items limite 6 row
                        $collectionData = $showItems->getCollectionInfo($beginning, $itemsPerPage);
                        // Display reservations
                        foreach ($collectionData as $key => $value) :
                        ?>
                            <!--============ start show cards items ==================-->
                            <div class="wow slideInUp " data-wow-delay="0.3s" style="width: 19rem; height: 395px">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden" style="height: 200px;">
                                        <img class="img-fluid w-100" src="../library_brief-16/uploads/<?php echo $value["Cover_Image"] ?>" alt="">
                                        <h6 class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo $value["Type"] ?></h6>
                                    </div>
                                    <div class="p-4">
                                        <h4 class="mb-3"><?php echo $value["Title"] ?></h4>
                                        <div class="d-flex justify-content-around flex-wrap">
                                            <div class="w-50">
                                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $value["Edition_Date"] ?></small><br>
                                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $value["Buy_Date"] ?></small><br>
                                            </div>
                                            <div class="w-50">
                                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $value["Pages_Number"] ?></small><br>
                                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $value["State"] ?></small><br>
                                            </div>
                                            <small class="w-100"><i class="far fa-user text-primary me-2"></i><?php echo $value["Author_Name"] ?></small><br>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3 justify-content-evenly">
                                        <button type="button"  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteItems?idCollection=<?php echo $value['Collection_Code'] ?>">Delete</button>
                                        <button type="button" class="btn btn-info"><a href="moreDetails.php?idcollection=<?php echo $value['Collection_Code'] ?>">edite</a></button>                            
                                    </div>
                                </div>
                            </div>
                            <!--============ start show cards items ==================-->

                            <!--========== start modal Delete =============-->
                            <div class="modal fade" id="deleteItems?idCollection=<?php echo $value['Collection_Code'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Items</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h1>Delete Items</h1>
                                            <p>Are you sure you want to delete your account?</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger"><a href="deletCollection.inc.php?idCollection=<?php echo $value['Collection_Code'] ?>">Delete</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--========== end modal Delete =============-->

                        <?php
                        endforeach;
                        ?>
                    </div>
                    <!-- start cards pagination -->
                    <div class="pagination w-100 d-flex justify-content-center mb-5 text-center" aria-label="...">
                        <ul class="pagination">
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
                    <!-- end cards pagination -->
                </div>
            </div>
        </div>
                <!--============ end show cards items ==================-->
                <!--===== start includ footer ========-->
                <?php
                include "footer.php";
                ?>
                <!--===== start includ footer ========-->
   
            </body>