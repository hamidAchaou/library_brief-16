<!--========================= create class show confirm reservayion ============================ -->
<?php
include "dbh.classes.php";

class confirmReservation extends Dbh {

    // select data in three table (reservation, collection, client) for confirme reservation
    public function showReserv() {
        $stmt = $this->connect()->prepare("SELECT * FROM reservation INNER JOIN collection ON reservation.Collection_Code = collection.Collection_Code INNER JOIN client ON reservation.Nickname = client.Nickname");

        if(!$stmt->execute()) {
            $stmt = null;
            header("location: ../home.page.admin.php?erer=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../home.page.admin.php?erer=ProfileNotFound");
            exit();
        }

        $confirmeData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $confirmeData;
    }

    // methode add data in table borrowings (confirme reservation)
    public function insertborrowings($Borrowing_Date, $Nickname , $Collection_Code, $Reservation_Code) {
        $stmt = $this->connect()->prepare("INSERT INTO borrowings(Borrowing_Date, Nickname  , Collection_Code, Reservation_Code) VALUES (?, ?, ?, ?)");
        if (!$stmt->execute(array($Borrowing_Date, $Nickname , $Collection_Code, $Reservation_Code))) {
          $stmt = null;
          header("location: items.php?erer=stmtfailed");
          exit();
        }
        $stmt = null;
      }

    // select Nick name and collection code
    public function getNickColl($Reservation_Code) {
        $stmt = $this->connect()->prepare("SELECT Nickname, Collection_Code  FROM reservation WHERE Reservation_Code = ?");

        if(!$stmt->execute([$Reservation_Code])) {
            $stmt = null;
            header("location: ../confirme.rservation.php?erer=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../confirme.rservation.php?erer=ProfileNotFound");
            exit();
        }

        $NickCollData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $NickCollData;
    }    
}
?>
