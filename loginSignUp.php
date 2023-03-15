<?php
    include_once "header.php";
?>

<body>
    <!-- Navbar Start -->
    <!-- <div class="container-fluid position-relative p-0" style="height: 300px;" id="header">
    </div> -->
    <main class="w-100" id="main-login">
        <div class="d-flex log">
            <!-- Comment Form Start -->
            <div class="rounded p-5 w-50" id="header-login">
            </div>
            <!-- form sign up -->
            <div class="rounded p-5 w-75 signupForm" id="form-login">
                <div class="d-flex justify-content-center mb-5">
                    <button class="btn btn-primary btn-login">Log In</button>
                    <button class="btn btn-signup">Sign Up</button>
                </div>
                <h1 class="text-center">Sign Up</h1>
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <!-- <h3 class="mb-0">Leave A Comment</h3> -->
                </div>
                <!-- Sign Up form -->
                <form class="form-Signup active" action="includes/signup.inc.php" method="post">
                    <div class="row g-3">
                        <label class="col-12 col-sm-6">
                            Name:
                            <input type="text" name="name" class="form-control bg-white border-0" placeholder="Your Name" style="height: 40px;">
                        </label>

                        <label class="col-12 col-sm-6">
                            Nickname
                            <input type="text" name="nickname" class="form-control bg-white border-0" placeholder="enter your Nickname" style="height: 40px;">
                        </label>

                        <label class="col-12 col-sm-6">
                            Email:
                            <input type="email" name="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 40px;">
                        </label>

                        <label class="col-12 col-sm-6">
                            Adresse
                            <input type="text" name="adresse" class="form-control bg-white border-0" placeholder="adresse" style="height: 40px;">
                        </label>

                        <label class="col-6 col-sm-6">
                            Phone:
                            <input type="number" name="phone" class="form-control bg-white border-0" placeholder="your phone" style="height: 40px;">
                        </label>
                        <label class="col-6 col-sm-6">
                            CIN:
                            <input type="text" name="cin" class="form-control bg-white border-0" placeholder="CIN" style="height: 40px;">
                        </label>
                        <label class="col-6 col-sm-6">
                            Date Of Birth:
                            <input type="date" name="dateOfBirth" class="form-control bg-white border-0" placeholder="date of birth" style="height: 40px;">
                        </label>
                        <label class="col-6 col-sm-6">
                            Occupation:<br>
                            <select name="occupation" id="occupation-register" style="height: 40px; width: 100%;">
                                <option value="fonctionnaire">Fonctionnaire</option>
                                <option value="femme de foyer">Femme de foyer</option>
                                <option value="etudiant(e)">etudiant(e)</option>
                            </select>
                        </label>
                        <label class="col-6 col-sm-6">
                            Password
                            <input type="password" name="password" class="form-control bg-white border-0" placeholder="password" style="height: 40px;">
                        </label>
                        <label class="col-6 col-sm-6" for="repeatPassword">
                            repeat Password:
                            <input type="password" name="repeatPassword" class="form-control bg-white border-0" placeholder="confirme password" style="height: 40px;">
                        </label>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 text-center" name="signupSubmit" id="btn-login" type="submit" style="height: 40px;">Sign Up</button>
                        </div>
                    </div>
                </form>
                <!-- End Sign Up form -->
                <!-- Login Form -->
                <form class="form-logIn" action="includes/login.inc.php" method="post">
                    <div class="row g-3">

                        <!-- Email for Log In -->
                        <div class="col-12">
                            Email
                            <input type="email" name="emailLogin" class="form-control bg-white border-0" placeholder="Enter your Email" style="height: 40px;">
                        </div>

                        <!-- password input -->
                        <label class="col-12">
                            Password
                            <input type="password" name="loginPassword" class="form-control bg-white border-0" placeholder="Enter your password" style="height: 40px;">
                        </label>

                        <div class="col-12 align-items-center">
                            <button class="btn btn-primary w-100 text-center align-items-center" name="loginSubmit" id="btn-login" type="submit" style="height: 40px;">Log In</button>
                        </div>
                    </div>
                </form>
                <!-- End Login Form -->

            </div>
        </div>
    </main>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- link library swetalert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>