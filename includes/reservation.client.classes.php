<?php
    session_start();
    include_once "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
    $dataCollection = new AddItems();
    $Collection_Code  = $_GET['idcollection'];
    $status = "booked_up";

    // declaration method selectCollectionInfo for get Collection Code
    $idCollection = $dataCollection->selectCollectionInfo($Collection_Code);
    // select Reservation_Expiration_Date in table reservation 
    $current_time = date('Y-m-d H:i:s'); // Get the current time in the format of "YYYY-MM-DD HH:MM:SS"
    $incremented_time = date('Y-m-d H:i:s', strtotime($current_time . ' +24 hours')); // Add 24 hours to the current time
    
    $ExpriationDate = $dataCollection->getExpirationDate($_SESSION['nickName'], "Reservation_Done", $current_time,  $incremented_time);
?>    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<?php
    // include "header.php";
    // Verify the reservation whether it is less than three or more 
    if ($ExpriationDate >= 3) {
      echo '
      <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center container bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
            <h2 class="text-danger">Sorry, you cannot reserve more than three items!!</h2>
            <a href="../items.php" class="btn btn-primary d-flex justify-content-center w-75 animated slideInLeft">OK</a>
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
              <a href="../items.php" class="btn btn-primary d-flex justify-content-center w-75 animated slideInLeft">OK</a>
          </div>
        </div>
        ';
      }
    }
?>