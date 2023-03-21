<?php
session_start();
include "../header.php";
// <!--============ confirme reservation if click in btn confirme ============ -->


// Confirm your booking by clicking on button confirm reservation
    if(isset($_POST['confirmereserve'])){
        include "/xampp/htdocs/library_brief-16/classes/reservation.classes.php";
        $confirme = new confirmReservation();
        
        $Reservation_Code = $_GET['Reservation_Code'];
        $NicknameCollection = $confirme->getNicknameCollection($Reservation_Code); 

        // $confirmeData = $confirme->getReservationInfo();
        // $confirmeRese = new confirmReservation();
        $confirme->updatestatusReservation($Reservation_Code);

        $current_time = time(); // Get the current Unix timestamp
        $future_time = strtotime("+15 days", $current_time); // Add 15 days to the current timestamp

        $Borrowing_Return_Date = date("Y-m-d H:i:s", $future_time); // Format the future timestamp as a date and time string and output it



            $Borrowing_Date = date('Y-m-d H:i:s'); // Get the current time in the format of "YYYY-MM-DD HH:MM:SS"
            $confirme->insertborrowings($Borrowing_Date, $Borrowing_Return_Date, $_SESSION['nickName'], $NicknameCollection[0]['Collection_Code'], $Reservation_Code);

            echo '
            <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
                <h1 class=" ">this reservation is confirme</h1><br>
                <br><h2><i class="fa-sharp fa-solid fa-check"></i></h2>
                <a href="../confirme.rservation.php" class="btn btn-info d-flex justify-content-center w-75 animated slideInLeft">OK</a>
            </div>
            </div>
            ';
    }

    // Confirm your booking by clicking on button confirm reservation
    if(isset($_POST['confirmeEmprunt'])){
        include '/xampp/htdocs/library_brief-16/classes/borrowing.classes.php';
        $confirmeBorrowing = new confirmBorrowing(); //declare classes confirme Borrowing

        $Reservation_Code = $_GET['Reservation_Code'];
        $NicknameCollection = $confirmeBorrowing->getNicknameCollection($Reservation_Code); 

        // change value status in table borrowings
        // update status column in table borrowings (From Returned to borrowid)
        $confirmeBorrowing->confirmeEmpeunt($Reservation_Code);

        // update status column in table collection (From booked_up to Available)
        $confirmeBorrowing->updatestatusCollection($NicknameCollection[0]['Collection_Code']);

        // div confirme borrowings
        echo '
        <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
          <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
              <h1 class=" ">this borrowings is confirme</h1>
              <h2><i class="fa-sharp fa-solid fa-check"></i></h2>
              <a href="../confirme.emprunt.php" class="btn btn-info d-flex justify-content-center w-75 animated slideInLeft">OK</a>
          </div>
        </div>
        ';
    }

    include "../footer.php";
?>

