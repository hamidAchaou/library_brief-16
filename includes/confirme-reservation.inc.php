<?php
session_start();
include "../header.php";
    // Confirm your booking by clicking on button confirm reservation
    if(isset($_POST['confirmereserve'])){
        include "/xampp/htdocs/library_brief-16/classes/reservation.classes.php";

        // get reservation code
        $Reservation_Code = $_GET['Reservation_Code'];
        // declaration class Confirme Reservation
        $confirme = new confirmReservation();
        // get Nickname And Collection in this reservation
        $NicknameCollection = $confirme->getNicknameCollection($Reservation_Code); 
        // update status of this Reservation in table reservation
        $confirme->updatestatusReservation($Reservation_Code);
    
        $current_time = time(); // Get the current Unix timestamp
        $future_time = strtotime("+15 days", $current_time); // Add 15 days to the current timestamp
        $Borrowing_Return_Date = date("Y-m-d H:i:s", $future_time); // Format the future timestamp as a date and time string and output it
    
        $Borrowing_Date = date('Y-m-d H:i:s'); // Get the current time in the format of "YYYY-MM-DD HH:MM:SS"
        $confirme->insertborrowings($Borrowing_Date, $Borrowing_Return_Date, $NicknameCollection[0]['Nickname'], $NicknameCollection[0]['Collection_Code'], $Reservation_Code);
        // displat Message  Confirme Reservation
        echo '
        <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
                <h1 class="w-100 d-flex justify-content-center">this reservation is confirme</h1><br>
                <h2 class="w-100 justify-content-center"><i class="fa-sharp fa-solid fa-check w-100"></i></h2>
                <a href="../confirme.rservation.php" class="btn btn-info d-flex justify-content-center w-75 animated slideInLeft">OK</a>
            </div>
        </div>
        ';
    }
    // Declaration footer
    include "../footer.php";
?>

