<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Book you</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
    
        <!-- font awesom library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/styles.css" rel="stylesheet">
    </head>
<body>



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
                    <a href="Reservation.admin.php" class="nav-item nav-link">Reservation</a>
                    <a href="Exposed-items.admin.php" class="nav-item nav-link">Exposed items</a>
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

    <!-- Section: Design Block -->
<section class=" text-center text-lg-start">
    
    <style>
      .rounded-t-5 {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
      }
  
      @media (min-width: 992px) {
        .rounded-tr-lg-0 {
          border-top-right-radius: 0;
        }
  
        .rounded-bl-lg-5 {
          border-bottom-left-radius: 0.5rem;
        }
      }
    </style>


    <main class="container">
        <div class="card mb-3 mt-5 logSin">
            <div class="row g-0 d-flex align-items-center">
                <div class="col-lg-4 d-none d-lg-flex">
                    <img src="img/10.jpg" alt="Trendy Pants and Shoes"
                    class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
                </div>
                <div class="col-lg-8">
              <div class="card-body py-5 px-md-5">
                
                <form class=""  action="includes/addItems.inc.php" method="post">
                    <h3>Sign Up</h3>
                    <div class="d-flex w-100 gap-3">
                        <!-- Name input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example1">Title:</label>
                          <input type="text" name="Title" class="form-control" placeholder="Enter Your Title" />
                        </div>
      
                        <!-- Email input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example1">Author Name:</label>
                          <input type="text" name="Author_Name" class="form-control" placeholder="Enter Your Author Name:" />
                        </div>
                    </div>

                    <div class="d-flex w-100 gap-3">
                        <!-- Name input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example1">Cover_Image:</label>
                          <!-- <input type="file" name="Cover_Image" class="form-control" placeholder="Enter Your Cover_Image" /> -->
                          <input type="text" name="Cover_Image" class="form-control" placeholder="Enter Your Cover Image:" />

                        </div>
      
                        <!-- Email input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example1">State:</label>
                          <input type="text" name="State" class="form-control" placeholder="Enter Your State:" />
                        </div>
                    </div>

                    <div class="d-flex w-100 gap-3">
                        <!-- Name input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example1">Edition Date:</label>
                          <input type="date" name="Edition_Date" class="form-control" placeholder="Enter Your Edition Date" />
                        </div>
      
                        <!-- Email input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example1">Buy Date:</label>
                          <input type="text" name="Buy_Date" class="form-control" placeholder="Enter Your Buy Date:" />
                        </div>
                    </div>
                
                    <div class="d-flex w-100 gap-3">
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example2">Status:</label>
                          <input type="text" name="Status"  class="form-control" placeholder="Enter Your Status" />
                        </div>
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example2">Type :</label>
                          <input type="number" name="Type"  class="form-control" placeholder="Enter Your Type " />
                        </div>
                    </div>

                    <div class="form-outline mb-4 w-50">
                      <label class="form-label" for="form2Example2">Pages_Number:</label>
                      <input type="number" name="Pages_Number"  class="form-control" placeholder="Enter Your Pages Number " />
                    </div>

                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" id="btn-addItems" name="AddItems" type="submit">Add Items</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </main>

  </section>
  <!-- Section: Design Block -->

  
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>