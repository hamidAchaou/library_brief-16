<?php
// <!--============ confirme reservation if click in btn confirme ============ -->
    include "../confirme.rservation.php";
    $Reservation_Code = $_GET['Reservation_Code'];
    $NicknameCollection = $confirme->getNickColl($Reservation_Code); 

    if(isset($_POST['confirmereserve'])){

        $Borrowing_Date = date('Y-m-d H:i:s'); // Get the current time in the format of "YYYY-MM-DD HH:MM:SS"
        // include "/xampp/htdocs/library_brief-16/classes/show-confirm.reservation.classes.php";
        $confirmeRese = new confirmReservation();
        $confirmeRese->insertborrowings($Borrowing_Date, $NicknameCollection[0]['Nickname'] , $NicknameCollection[0]['Collection_Code'], $Reservation_Code);
        header("location: ../confirme.rservation.php");
    }
?>

