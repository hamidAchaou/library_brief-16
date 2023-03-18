<?php
include "../header.php";
// <!--============ confirme reservation if click in btn confirme ============ -->
    include "/xampp/htdocs/library_brief-16/classes/reservation.classes.php";
    $confirme = new confirmReservation();
    $confirmeData = $confirme->getReservationInfo();
    $Reservation_Code = $_GET['Reservation_Code'];
    $NicknameCollection = $confirme->getNicknameCollection($Reservation_Code); 

    $current_time = time(); // Get the current Unix timestamp
    $future_time = strtotime("+15 days", $current_time); // Add 15 days to the current timestamp

    $Borrowing_Return_Date = date("Y-m-d H:i:s", $future_time); // Format the future timestamp as a date and time string and output it


    if(isset($_POST['confirmereserve'])){

        $Borrowing_Date = date('Y-m-d H:i:s'); // Get the current time in the format of "YYYY-MM-DD HH:MM:SS"
        $confirmeRese = new confirmReservation();
        $confirmeRese->insertborrowings($Borrowing_Date, $Borrowing_Return_Date, $NicknameCollection[0]['Nickname'] , $NicknameCollection[0]['Collection_Code'], $Reservation_Code);

        echo '
        <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
          <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
              <h1 class=" ">this reservation is confirme</h1>
              <a href="../confirme.rservation.php" class="btn btn-info d-flex justify-content-center w-75 animated slideInLeft">OK</a>
          </div>
        </div>
        ';
    }

    include "../footer.php";
?>

