<!--================================ Remove the stone that has passed 24 hours========================= -->

<?php
require '/dbh.classes.php';

class deleteReservation extends Dbh {

  public function deleteReserv() {
    $stmt = $this->connect()->prepare("DELETE FROM reservation WHERE date('Y-m-d H:i:s') > Reservation_Expiration_Date  AND 	Reservation_Code NOT IN (SELECT 	Reservation_Code FROM borrowings)");

    if (!$stmt->execute()) {
      $stmt = null;
      header("location: addItems.classes.php?erer=stmtfailed");
      exit();
    }
    $stmt = null;

  }
    
}

$croneDelete = new deleteReservation();
$croneDelete->deleteReserv();



// $sql = "DELETE FROM users WHERE id=?";
// $stmt= $pdo->prepare($sql);
// $stmt->execute([$id]);


// $dbh = new Dbh();
// $conn = $dbh->connect();
// $deleteSql = "DELETE FROM reservation WHERE Reservation_Date < DATE_SUB(NOW(), INTERVAL 24 HOUR) AND Collection_ID NOT IN (SELECT Collection_ID FROM borrowings)";
// $deleteStmt = $conn->prepare($deleteSql);
// $deleteStmt->execute();
?>