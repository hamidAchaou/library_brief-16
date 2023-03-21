<?php
session_start();
include "header.php";
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
            <a href="confirme.rservation.php" class="nav-item nav-link">Reservation</a>
            <a href="confirme.emprunt.php" class="nav-item nav-link">Emprunt</a>
            <a href="add-items.admin.php" class="nav-item nav-link text-primary">Add items</a>
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

    <!-- main add items start-->
  <main class=" text-center text-lg-start">
    <section class="">
        <div class="card mb-3 mt-5 bg-secondary">
            <div class="row g-0 d-flex align-items-center">
                <div class="col-lg-4 p-0 d-none d-lg-flex">
                    <img src="img/10.jpg" alt="Trendy Pants and Shoes"
                    class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5 p-0" />
                </div>
                <div class="col-lg-8">
              <div class="card-body py-5 px-md-5 mt-4">
                
                <form class=""  action="includes/addItems.inc.php" method="post" enctype="multipart/form-data">
                    <h3>Add Items</h3>
                    <div class="d-flex w-100 gap-3">
                        <!-- Name input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="Title">Title:</label>
                          <input type="text" name="Title" class="form-control" placeholder="Enter Your Title" />
                        </div>
      
                        <!-- Email input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="Author_Name">Author Name:</label>
                          <input type="text" name="Author_Name" class="form-control" placeholder="Enter Your Author Name:" />
                        </div>
                    </div>

                    <div class="d-flex w-100 gap-3">
                        <!-- Name input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="Cover_Image">Cover_Image:</label>
                          <!-- <input type="file" name="Cover_Image" class="form-control" placeholder="Enter Your Cover_Image" /> -->
                          <input type="file" name="Cover_Image" class="form-control" placeholder="Enter Your Cover Image:" />

                        </div>
      
                        <!-- Email input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="State">State:</label>
                          <select name="State" id="State" class="rounded p-2 mb-4 w-100">
                              <option value="New">New</option>
                              <option value="Good condition,">Good condition</option>
                              <option value="Acceptable">Acceptable</option>
                              <option value="Fairly worn">Fairly worn</option>
                              <option value="and Torn">and Torn</option>
                          </select>
                        </div>
                    </div>

                    <div class="d-flex w-100 gap-3">
                        <!-- Name input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="Edition_Date">Edition Date:</label>
                          <input type="date" name="Edition_Date" class="form-control" placeholder="Enter Your Edition Date" />
                        </div>
      
                        <!-- Email input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="Buy_Date">Buy Date:</label>
                          <input type="date" name="Buy_Date" class="form-control" placeholder="Enter Your Buy Date:" />
                        </div>
                    </div>
                
                    <div class="d-flex w-100 gap-3">
                    <div for="Status" class="form-outline mb-4 w-50">
                      Status 
                      <select name="Status" class="mb-4 w-100 h-50 rounded p-2">
                        <option value="Available" selected>Available</option>
                        <option value="booked_up">booked_up</option>
                      </select>
                    </div>
                    <div for="Type" class="form-outline mb-4 w-50">
                      Type: 
                      <select name="Type" class=" mb-4 w-100 h-50 rounded p-2">
                        <option value="Books" selected>Books</option>
                        <option value="cd">cd</option>
                        <option value="Novel">Novel</option>
                        <option value="Magazine">Magazine</option>
                      </select>
                    </div>
                    </div>

                    <div class="form-outline mb-4 w-50">
                      <label class="form-label" for="Pages_Number">Pages_Number:</label>
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
    </section>
  </main>
    <!-- main add items end-->
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

  
<?php
  include "footer.php";
?>
