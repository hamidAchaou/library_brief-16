<?php
session_start();
    include "header.php";
    $collection_id = $_GET['idcollection'];
    include "/xampp/htdocs/library_brief-16/classes/showItems-vew.classes.php";

    // include "/xampp/htdocs/library_brief-16/items.admen.php";
        $collectionInfo = new collectionInfoContr();
    // echo $collection_id;
    // print_r($collectionInfo);

    // $profileInfo->fetchTitle($collection_id);
    // $collectionInfo->fetchAuthor_Name($collection_id);
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
    <!-- Navbar & Carousel End -->
    <main class=" text-center text-lg-start">
        <section class="">
            <div class="card mb-3 mt-5 bg-secondary">
                <div class="row g-0 d-flex align-items-center">
                    <div class="col-lg-4 p-0 d-none d-lg-flex">
                        <img src="/uploads/<?php echo $collectionInfo->fetchCover_Image($collection_id); ?>" alt="Trendy Pants and Shoes"
                        class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5 p-0" />
                    </div>
                    <div class="col-lg-8">
                    <div class="card-body py-5 px-md-5 mt-4">
                    <h2 class="">Update Items</h2>
                    
                <form class="form-Signup pt-5" action="includes/updateItems.inc.php?collection_id=<?php echo $collection_id ?>" method="post" enctype="multipart/form-data">
                <div class="row g-3">
        
                    <label class="col-12 col-sm-6">
                    Cover Image
                        <img src="/uploads/<?php echo $collectionInfo->fetchCover_Image($collection_id); ?>" alt="" srcset="">
                        <input type="file" name="Cover_Image" class="form-control" value="/uploads/<?php echo $collectionInfo->fetchCover_Image($collection_id); ?>" placeholder="enter your Cover Image" style="height: 40px;">
                    </label>

                    <label class="col-12 col-sm-6">
                    Title:
                        <input type="text" name="Title" class="form-control" placeholder="Your Title" value="<?php echo $collectionInfo->fetchTitle($collection_id); ?>" style="height: 40px;">
                    </label>
        
                    <label class="col-12 col-sm-6">
                    Author_Name:
                        <input type="text" name="Author_Name" class="form-control" value="<?php echo $collectionInfo->fetchAuthor_Name($collection_id); ?>" placeholder="Your Author_Name" style="height: 40px;">
                    </label>
        
                    <label class="col-12 col-sm-6">
                    Edition Date:
                        <input type="date" name="Edition_Date" class="form-control" value="<?php echo $collectionInfo->fetchEdition_Date($collection_id); ?>" placeholder="Your Edition_Date" style="height: 40px;">
                    </label>
        
                    <label class="col-12 col-sm-6">
                    Buy Date
                        <input type="date" name="Buy_Date" class="form-control" value="<?php echo $collectionInfo->fetchBuy_Date($collection_id); ?>" placeholder="Buy_Date" style="height: 40px;">
                    </label>
        
                    <label class="col-6 col-sm-6">
                    state:
                        <input type="text" name="state" class="form-control" value="<?php echo $collectionInfo->fetchState($collection_id); ?>" placeholder="your Status" style="height: 40px;">
                    </label>
                    <label class="col-6 col-sm-6">
                    Type:
                        <input type="text" name="Type" class="form-control" value="<?php echo $collectionInfo->fetchType($collection_id); ?>" placeholder="Type" style="height: 40px;">
                    </label>
                    <label class="col-6 col-sm-6">
                    Pages_Number:
                        <input type="number" name="Pages_Number" class="form-control" value="<?php echo $collectionInfo->fetcPages_Number($collection_id); ?>" placeholder="Pages_Number" style="height: 40px;">
                    </label>
        
                    <div class="col-12">
                        <button class="btn btn-primary w-100 text-center" name="moreDetails" id="btn-login" type="submit" style="height: 40px;">edit collection</button>
                    </div>
                </div>
            </form>
                </div>
                </div>
            </div>
            </div>
        </section>
    </main>

<!-- foooter start -->
<?php
  include "footer.php";
?>
<!-- foooter end -->