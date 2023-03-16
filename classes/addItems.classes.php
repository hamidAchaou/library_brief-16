<?php
require_once "dbh.classes.php";
// Create classe Insert and update and select data in table collection
class AddItems extends Dbh {

  // INSERT data collection in databases
  protected function setItem($Title, $Author_Name, $Cover_Image, $State	, $Edition_Date, $Buy_Date, $Status, $Type, $Pages_Number ) {
    $stmt = $this->connect()->prepare("INSERT INTO collection (Title, Author_Name, Cover_Image, State, Edition_Date, Buy_Date, Status, Type, Pages_Number ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt->execute(array($Title, $Author_Name, $Cover_Image, $State, $Edition_Date, $Buy_Date, $Status, $Type, $Pages_Number ))) {
      $stmt = null;
      header("location: addItems.classes.php?erer=stmtfailed");
      exit();
    }
    $stmt = null;
  }

  // update data in table  collection
  public function updetCollectionInfo($Title, $Author_Name, $Cover_Image, $State	, $Edition_Date, $Buy_Date, $Status, $Type, $Pages_Number) {
    $stmt = $this->connect()->prepare('UPDATE collection SET Title = ?, Author_Name = ?, Cover_Image = ?, State = ?, Edition_Date = ?, Buy_Date = ?, Status = ?, Type = ?, Pages_Number = ?, WHERE Collection_Code = ?;');
    if(!$stmt->execute(array($Title, $Author_Name, $Cover_Image, $State	, $Edition_Date, $Buy_Date, $Status, $Type, $Pages_Number))) {
      $stmt = null;
      header("location: ../add-items.admin.php?erer=stmtfailed");
      exit();
    }
    $stmt = null;
  }

  // select data collection in databases
  public function getCollectionInfo() {
    $stmt = $this->connect()->prepare('SELECT * FROM collection;');
    if(!$stmt->execute()) {
        $stmt = null;
        header("location: ../index.php?erer=stmtfailed");
        exit();
    }
    if ($stmt->rowCount() == 0) {
        $stmt = null;
        header("location: ../add-items.admin.php?erer=CollrctionNotFound");
        exit();
    }
    $collectionData = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // $annoncesLength = $conn->query($page)->rowCount();

    // $pagesNum = 0;
  
    // if (($annoncesLength % 6) == 0) {
  
    //   $pagesNum = $annoncesLength / 6;
    // } else {
    //   $pagesNum = ceil($annoncesLength / 6);
    // }


    return $collectionData;
  }

  // methode return one row in table collection
  public function selectCollectionInfo($Collection_Code ) {
    $stmt = $this->connect()->prepare('SELECT * FROM collection WHERE Collection_Code  = ?;');

    if(!$stmt->execute([$Collection_Code ])) {
        $stmt = null;
        header("location: ../items.admen.php?erer=stmtfailed");
        exit();
    }

    if ($stmt->rowCount() == 0) {
        $stmt = null;
        header("location: ../items.admen.php?erer=CollectionNotFound");
        exit();
    }

    $collectionData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $collectionData;
  }


  // methode update column status in table collection
  public function updatestatus($Status, $Collection_Code) {
    $stmt = $this->connect()->prepare('UPDATE Collection SET Status = ? WHERE Collection_Code  = ?;');
    if (!$stmt->execute(array($Status, $Collection_Code))) {
      header("location: ../index.php?errer=stmtfailed");
      exit();
    }

    $stmt = null;
  }

  // get three items for home page client
  public function getThreeItems() {
    $stmt = $this->connect()->prepare('SELECT * FROM collection ORDER BY RAND() LIMIT 3;');
    if(!$stmt->execute()) {
        $stmt = null;
        header("location: ../index.php?erer=stmtfailed");
        exit();
    }
    if ($stmt->rowCount() == 0) {
        $stmt = null;
        header("location: ../add-items.admin.php?erer=CollrctionNotFound");
        exit();
    }
    $collectionData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $collectionData;
  }

    // INSERT data in table reservation 
    public function insertReservation($Collection_Code , $Nickname) {
      $stmt = $this->connect()->prepare("INSERT INTO reservation (Reservation_Expiration_Date, Collection_Code , Nickname) VALUES (?, ?, ?)");

      $current_time = date('Y-m-d H:i:s'); // Get the current time in the format of "YYYY-MM-DD HH:MM:SS"
      $Reservation_Expiration_Date = date('Y-m-d H:i:s', strtotime($current_time . ' +24 hours')); // Add 24 hours to the current time
      if (!$stmt->execute(array($Reservation_Expiration_Date, $Collection_Code , $Nickname))) {
        $stmt = null;
        header("location: items.php?erer=stmtfailed");
        exit();
      }
      $stmt = null;
    }

    // select Reservation_Expiration_Date in table reservation 
    public function getExpriationDate($Nickname, $current_time,  $incremented_time) {
      $stmt = $this->connect()->prepare('SELECT Reservation_Expiration_Date FROM reservation WHERE Nickname = ? AND Reservation_Expiration_Date BETWEEN ? AND ?;');
      if(!$stmt->execute([$Nickname, $current_time, $incremented_time])) {
          $stmt = null;
          header("location: items.php?erer=stmtfailed");
          exit();
      }
      if ($stmt->rowCount() == 0) {
          $stmt = null;
          header("location: items.php?erer=Reservation_Expiration_DateNotFound");
          exit();
      }
      $collectionData = $stmt->rowCount();
      return $collectionData;
    }
}

?>