<?php
session_start();
include "header.php";
// include_once "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
include "/xampp/htdocs/library_brief-16/classes/showItems-vew.classes.php";
?>



<body>

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-5 position-fixed" style="background-color: #061429; z-index: 999;">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
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
                    <a href="confirme.rservation.php" class="nav-item nav-link">Reservation</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['nickName'] ?></a>
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
    <!-- Navbar & Carousel End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 pt-5 mt-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Reservation</h5>
                <h1 class="mb-0">Welcome chose your Knowledge</h1>
            </div>

      <!-- start show data items -->
            <div class=" g-5">
                <div class="d-flex flex-wrap gap-5 justify-content-center slideInUp" data-wow-delay="0.3s">
            
            <?php
                //   get data width class addItems.classes
                $showItems = new AddItems();
                $collectionData = $showItems->getCollectionInfo();

                // print_r($collectionData);

                foreach ($collectionData as  $key => $value) :
                    $_SESSION['Collection_Code'] = $value["Collection_Code"];
                    // echo $value["Collection_Code"];
                  
            ?>

                    <div class="blog-item bg-light rounded overflow-hidden card" style="width: 19rem; height: 350px"">
                        <div class="blog-img position-relative overflow-hidden" style="height: 100px;">
                            <img class="img-fluid w-100" src="<?php echo $value["Cover_Image"] ?>" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href=""><?php echo $value["Cover_Image"] ?></a>
                        </div>
                        <form action="" method="POST">
                            <input type="hidden" name="Collection_Code" value="<?php echo $value["Collection_Code"]; ?>">
                        </form>
                        <div class="p-4">
                            <h4 class="mb-3"><?php echo $value["Title"] ?></h4>
                            <div class="mb-3 d-flex justify-content-between">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $value["Edition_Date"] ?></small>
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo $value["Type"] ?></small>
                            </div>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            <div class="mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo $value["Author_Name"] ?></small><br>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $value["Edition_Date"] ?></small>
                            </div>
                            <div class="d-flex mb-3 justify-content-evenly">
                                <button type="button"  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteItems">Delete</button>
                                <button type="button" class="btn btn-info"><a href="moreDetails.php?idcollection=<?php echo $value['Collection_Code'] ?>">edite</a></button>                            
                            </div>
                        </div>
                    </div>

                    <!--========== start modal Delete =============-->
                    <div class="modal fade" id="deleteItems" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button type="button" class="btn btn-danger"><a href="deletCollection.php?idcollection=<?php echo $value['Collection_Code'] ?>">Delete</a></button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!--========== end modal Delete =============-->

                    
                <?php
                  endforeach;
                ?>
                </div>
      <!-- end show data items -->

      <!--=================================== Modal ================================-->

            


<?php
  include "footer.php";
?>