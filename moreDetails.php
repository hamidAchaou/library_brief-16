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
                    <a href="home.page.admin.php" class="nav-item nav-link active">Home</a>
                    <a href="items.admen.php" class="nav-item nav-link">collection</a>
                    <a href="items.php" class="nav-item nav-link">Reservation</a>
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
    <main class="container pt-5">
        <form class="form-Signup pt-5" action="" method="post">
            <div class="row g-3">
    
                <label class="col-12 col-sm-6">
                Title:
                    <input type="text" name="Title" class="form-control" placeholder="Your Title" value="<?php $collectionInfo->fetchTitle($collection_id); ?>" style="height: 40px;">
                </label>
    
                <label class="col-12 col-sm-6">
                Author_Name:
                    <input type="text" name="Author_Name" class="form-control" value="<?php $collectionInfo->fetchAuthor_Name($collection_id); ?>" placeholder="Your Author_Name" style="height: 40px;">
                </label>
    
                <label class="col-12 col-sm-6">
                Cover_Image
                    <input type="text" name="nickname" class="form-control" value="<?php $collectionInfo->fetchState($collection_id); ?>" placeholder="enter your Nickname" style="height: 40px;">
                </label>
    
                <label class="col-12 col-sm-6">
                State:
                    <input type="text" name="Edition_Date" class="form-control" value="<?php $collectionInfo->fetchEdition_Date($collection_id); ?>" placeholder="Your Edition_Date" style="height: 40px;">
                </label>
    
                <label class="col-12 col-sm-6">
                Buy_Date
                    <input type="text" name="Buy_Date" class="form-control" value="<?php $collectionInfo->fetchBuy_Date($collection_id); ?>" placeholder="Buy_Date" style="height: 40px;">
                </label>
    
                <label class="col-6 col-sm-6">
                Status:
                    <input type="text" name="Status" class="form-control" value="<?php $collectionInfo->fetchStatus($collection_id); ?>" placeholder="your Status" style="height: 40px;">
                </label>
                <label class="col-6 col-sm-6">
                Type:
                    <input type="text" name="Type" class="form-control" value="<?php $collectionInfo->fetchType($collection_id); ?>" placeholder="Type" style="height: 40px;">
                </label>
                <label class="col-6 col-sm-6">
                Pages_Number:
                    <input type="number" name="Pages_Number" class="form-control" value="<?php $collectionInfo->fetcPages_Number($collection_id); ?>" placeholder="Pages_Number" style="height: 40px;">
                </label>
    
                <div class="col-12">
                    <button class="btn btn-primary w-100 text-center" name="signupSubmit" id="btn-login" type="submit" style="height: 40px;">edit collection</button>
                </div>
            </div>
        </form>

    </main>

<!-- foooter start -->
<?php
  include "footer.php";
?>
<!-- foooter end -->