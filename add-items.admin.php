<?php
session_start();
include "header.php";
?>


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
                
                <form class=""  action="includes/addItems.inc.php" method="post" enctype="multipart/form-data">
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
                          <input type="file" name="Cover_Image" class="form-control" placeholder="Enter Your Cover Image:" />

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
                          <input type="date" name="Buy_Date" class="form-control" placeholder="Enter Your Buy Date:" />
                        </div>
                    </div>
                
                    <div class="d-flex w-100 gap-3">
                    <div for="Status" class="form-outline mb-4 w-50">
                      Status <br>
                      <select name="Status" class="h-50 w-100 rounded pr-4">
                        <option value="Available" selected>Available</option>
                        <option value="booked_up">booked_up</option>
                      </select>
                    </div>
                    <div for="Type" class="form-outline mb-4 w-50">
                      Type: <br>
                      <select name="Type" class="h-50 w-100 rounded pr-4">
                        <option value="Books" selected>Books</option>
                        <option value="cd">cd</option>
                        <option value="Novel">Novel</option>
                        <option value="Magazine">Magazine</option>
                      </select>
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

  
<?php
  include "footer.php";
?>
