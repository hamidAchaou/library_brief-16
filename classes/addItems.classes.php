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


  // methode update columb status in table collection
  public function updatestatus($Status, $Collection_Code) {
    $stmt = $this->connect()->prepare('UPDATE Collection SET Status = ? WHERE Collection_Code  = ?;');
    if (!$stmt->execute(array($Status, $Collection_Code))) {
      header("location: ../index.php?errer=stmtfailed");
      exit();
    }

    $stmt = null;
  }

}


?>