<?php
    session_start();
    $Collection_Code  = $_GET['idcollection'];
    // echo $idCollection;
    // print_r($idCollection);
    $status = "booked_up";

    include_once "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
    $dataCollection = new AddItems();
    $idCollection = $dataCollection->selectCollectionInfo($Collection_Code);


    $current_time = date('Y-m-d H:i:s'); // Get the current time in the format of "YYYY-MM-DD HH:MM:SS"
    $incremented_time = date('Y-m-d H:i:s', strtotime($current_time . ' +24 hours')); // Add 24 hours to the current time
    // echo $incremented_time; // Output the incremented time

    // select Reservation_Expiration_Date in table reservation 
    $ExpriationDate = $dataCollection->getExpriationDate($_SESSION['nickName'], $current_time,  $incremented_time);

    include "header.php";

    if ($ExpriationDate >= 3) {
      echo '
      <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center container bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
            <h2 class="text-danger">Sorry, you cannot reserve more than three items!!</h2>
            <a href="items.php" class="btn btn-info d-flex justify-content-center w-75 animated slideInLeft">OK</a>
        </div>
      </div>
      ';
    }else {
      if ($idCollection[0]['Status'] != "Available") {
        echo "this item is booked up";
      } else {
        $dataCollection = new AddItems();
        $dataCollection->updatestatus($status, $idCollection[0]['Collection_Code']);
  
        $dataCollection->insertReservation($idCollection[0]['Collection_Code'] , $_SESSION['nickName']);

        echo '
        <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
          <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
              <h1 class=" ">this items is reserved</h1>
              <a href="items.php" class="btn btn-primary d-flex justify-content-center w-75 animated slideInLeft">OK</a>
          </div>
        </div>
        ';
      }
    }
    

//     DELETE FROM reservations
// WHERE reservation_date < DATEADD(hour, -24, GETDATE())

?>

