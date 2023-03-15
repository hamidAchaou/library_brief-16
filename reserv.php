<?php
    $idCollection = $_GET['idcollection'];
    // echo $idCollection;
    print_r($idCollection);
    $status = "booked_up";

    include_once "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
    $dataCollection = new AddItems();
    $idCollection = $dataCollection->selectCollectionInfo($idCollection);
    
    if ($idCollection[0]['Status'] != "Available") {
      echo "this item is booked up";
    } else {
      echo "this item is available";
      $dataCollection = new AddItems();
      $dataCollection->updatestatus($status, $idCollection[0]['Collection_Code']);
    }
?>

