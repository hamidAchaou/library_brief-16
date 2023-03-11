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
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary btn-login">Log In</button>
                    <button class="btn btn-signup">Sign Up</button>
                </div>
              <div class="card-body py-5 px-md-5">
      
                <form class="form-logIn">
                    <h3>Log In</h3>
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Email address</label>
                    <input type="email" id="form2Example1" class="form-control" />
                  </div>
      
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" id="form2Example2" class="form-control" />
                  </div>
      
                  <!-- 2 column grid layout for inline styling -->
                  <div class="row mb-4">
                    <div class="col d-flex justify-content-center">

                    </div>
                  </div>
      
                  <!-- Submit button -->
                  <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
      
                </form>

                <form class="active form-Signup">
                    <h3>Sign Up</h3>
                    <div class="d-flex w-100 gap-3">
                        <!-- Name input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example1">Name:</label>
                          <input type="text" id="name" class="form-control" placeholder="Enter Your Name" />
                        </div>
      
                        <!-- Email input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example1">Email:</label>
                          <input type="email" id="email" class="form-control" placeholder="Enter Your Email:" />
                        </div>
                    </div>
                
                    <div class="d-flex w-100 gap-3">
                        <!-- Adresse input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example1">Adresse:</label>
                          <input type="text" id="Adresse" class="form-control" placeholder="Enter Your Adresse" />
                        </div>
            
                        <!-- Phone input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example2">Phone:</label>
                          <input type="number" id="Phone" class="form-control" placeholder="Enter Your Phone" />
                        </div>
                    </div>

                    <div class="d-flex w-100 gap-3">
                        <!-- CIN input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example2">CIN:</label>
                          <input type="number" id="CIN" class="form-control" placeholder="Enter Your CIN" />
                        </div>
      
                        <!-- Date Of Birth input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example2">Date Of Birth:</label>
                          <input type="date" id="Birth" class="form-control" placeholder="Enter Your Date Of Birth" />
                        </div>
                    </div>


                    <div class="d-flex w-100 gap-3">
                        <!-- type-d'adhérent input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example2">Date Of Password:</label>
                          <input type="date" id="Birth" class="form-control" placeholder="Enter Your Date Of type-d'adhérent" />
                        </div>
      
                        <!-- Password input -->
                        <div class="form-outline mb-4 w-50">
                          <label class="form-label" for="form2Example2">Password:</label>
                          <input type="Password" id="Password" class="form-control" placeholder="Enter Your Password" />
                        </div>
                    </div>


                  <!-- Confirme Password input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Confirme Password:</label>
                    <input type="Password" id="conf-Password" class="form-control" placeholder="repet your password" />
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" id="btn-login" type="submit">Log In</button>
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