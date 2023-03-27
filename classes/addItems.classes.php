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

    // methode update items in table collection
    public function updateCollection($Title, $Author_Name, $Cover_Image, $State, $Edition_Date, $Buy_Date, $Type, $Pages_Number, $Collection_Code)  {
      $stmt = $this->connect()->prepare("UPDATE collection SET Title = ?, Author_Name = ?, Cover_Image = ?, State = ?, Edition_Date = ?, Buy_Date = ?, Type = ?, Pages_Number = ? WHERE Collection_Code = ?;");

      if (!$stmt->execute(array($Title, $Author_Name, $Cover_Image, $State, $Edition_Date, $Buy_Date, $Type, $Pages_Number, $Collection_Code))) {
          $stmt = null;
          header("location: ../index.php?error=stmtfailed");
          exit();
      }
  
      $stmt = null;
  }

  public function deleteItems($collectionCode) {
    $stmt = $this->connect()->prepare("DELETE FROM collection WHERE `collection`.`Collection_Code` = ?");
    if (!$stmt->execute([$collectionCode])) {
      // Error occurred
      header("Location: addItems.classes.php?error=stmtfailed");
      exit();
    }
    // Query executed successfully
    $stmt = null;
  }

  // get Data collection 
  public function getCollectionInfo($start, $limit) {
    // fetch only the required columns
    $stmt = $this->connect()->prepare("SELECT * FROM collection LIMIT ? OFFSET ?;");
    $stmt->bindParam(1, $limit, PDO::PARAM_INT);
    $stmt->bindParam(2, $start, PDO::PARAM_INT); // fix the order of the parameters
    if (!$stmt->execute()) {
        // log the error
        error_log("Error fetching collection data.");
        $stmt = null;
        // show a user-friendly error message
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    $collectionData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $collectionData;
  }
  

    // select data table collection
    public function getDataCollection() {
        // fetch only the required columns
        $stmt = $this->connect()->prepare("SELECT * FROM collection;");
        if (!$stmt->execute()) {
            // log the error
            error_log("Error fetching collection data.");
            $stmt = null;
            // show a user-friendly error message
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $collectionData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $collectionData;
    }

    // get row count data collection
    public function getDataCollectionRowCount() {
        // fetch only the required columns
        $stmt = $this->connect()->prepare("SELECT * FROM collection;");
        if (!$stmt->execute()) {
            // log the error
            error_log("Error fetching collection data.");
            $stmt = null;
            // show a user-friendly error message
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $collectionData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return count($collectionData);
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

  // get three items random for home page client 
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

    // Determine the number of reservations made by the subscriber within 24 hours
    public function getExpirationDate($Nickname, $Status, $current_time, $incremented_time) {
      $stmt = $this->connect()->prepare('SELECT Reservation_Expiration_Date FROM reservation WHERE Nickname = ? AND Status = ? AND Reservation_Expiration_Date BETWEEN ? AND ?');
      if (!$stmt->execute([$Nickname, $Status, $current_time, $incremented_time])) {
          header("Location: items.php?error=stmtfailed");
          exit();
      }
      $collectionData = $stmt->rowCount();
      return $collectionData;
  }
  
  // get page count
  public function getPageCount() {
    $stmt = $this->connect()->prepare('SELECT Collection_Code FROM collection;');
    if (!$stmt->execute()) {
        header("Location: items.php?error=stmtfailed");
        exit();
    }
    $collectionData = $stmt->rowCount();
    return $collectionData;
}

}

?>