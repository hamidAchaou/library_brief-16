<?php
session_start();
include "header.php";
?>



<body>

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative logSin">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 logSin">
            <!-- logo -->
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Read</h1>
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">About</a>
                    <a href="#" class="nav-item nav-link">Items</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="condary nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['nickName'] ?></a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">profile</a>
                            <a href="includes/logout.inc.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar & Carousel End -->

    <header class="w-100 d-flex justify-content-center align-items-center" style="height: 100vh;">
        <h1 class="">You made three mistakes</h1>
    </header>


    
