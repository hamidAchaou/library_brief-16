<?php
session_start();
include "../header.php";
// <!--============ CONFIRME EMPRUNT ============ -->
    if(isset($_POST['confirmeEmprunt'])){
        include '/xampp/htdocs/library_brief-16/classes/borrowing.classes.php';
        $confirmeBorrowing = new confirmBorrowing(); //declare classes confirme Borrowing

        $Reservation_Code = $_GET['Reservation_Code']; // get reservation code
        // get Nick Name And collection Code
        $NicknameCollection = $confirmeBorrowing->getNicknameCollection($Reservation_Code);

        // update Status in table Borrowing of thy emprunt
        $confirmeBorrowing->confirmeEmpeunt($Reservation_Code);

        // update status column in table collection (From booked_up to Available)
        $confirmeBorrowing->updatestatusCollection($NicknameCollection[0]['Collection_Code']);

        // div confirme borrowings
        echo '
        <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
          <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
              <h1 class="w-100 d-flex justify-content-center">this borrowings is confirme</h1>
              <h2 class="w-100 d-flex justify-content-center text.light"><i class="fa-sharp fa-solid fa-check text-light h2 border border-success rounded-circle bg-success"></i></h2>
              <a href="../confirme.emprunt.php" class="btn btn-info d-flex justify-content-center w-75 animated slideInLeft">OK</a>
          </div>
        </div>
        ';
    }

    include "../footer.php";
?>