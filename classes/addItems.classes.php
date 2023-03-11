<?php
// include "dbh.classes.php";
class AddItems extends Dbh
{
  // cheack password and email is alridy in databases$$
  protected function setItem($Title, $Author_Name, $Cover_Image, $State	, $Edition_Date, $Buy_Date, $Status, $Type, $Pages_Number )
  {
    $stmt = $this->connect()->prepare("INSERT INTO collection (Title, Author_Name, Cover_Image, State, Edition_Date, Buy_Date, Status, Type, Pages_Number ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");


    if (!$stmt->execute(array($Title, $Author_Name, $Cover_Image, $State, $Edition_Date, $Buy_Date, $Status, $Type, $Pages_Number ))) {
      $stmt = null;
      header("location: addItems.classes.php?erer=stmtfailed");
      exit();
    }

    $stmt = null;
    }


}


?>