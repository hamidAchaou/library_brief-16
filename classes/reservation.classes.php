<!--========================= create class show confirm reservayion ============================ -->
<?php
include "dbh.classes.php";

class confirmReservation extends Dbh {

    // select data in three table (reservation, collection, client) for confirme reservation
    public function getReservationInfo() {
        $stmt = $this->connect()->prepare("SELECT * 
        FROM reservation 
        INNER JOIN collection ON reservation.Collection_Code = collection.Collection_Code 
        INNER JOIN client ON reservation.Nickname = client.Nickname
        WHERE reservation.Status = 'Reservation_Done';");

        if(!$stmt->execute(array())) {
            $stmt = null;
            header("location: ../confirme.reservation.php?erer=stmtfailed");
            exit();
        }

        // if ($stmt->rowCount() == 0) {
        //     $stmt = null;
        //     header("location: ../confirme.reservation.php?erer=ProfileNotFound");
        //     exit();
        // }


        $confirmeData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $confirmeData;
    }

    // methode add data in table borrowings (confirme reservation)
    public function insertborrowings($Borrowing_Date, $Borrowing_Return_Date, $Nickname , $Collection_Code, $Reservation_Code) {
        $stmt = $this->connect()->prepare("INSERT INTO borrowings(Borrowing_Date, Borrowing_Return_Date, Nickname  , Collection_Code, Reservation_Code) VALUES (?, ?, ?, ?, ?)");
        if (!$stmt->execute(array($Borrowing_Date, $Borrowing_Return_Date, $Nickname , $Collection_Code, $Reservation_Code))) {
          $stmt = null;
          header("location: items.php?erer=stmtfailed");
          exit();
        }
        $stmt = null;
      }

    // select Nick name and collection code
    public function getNicknameCollection($Reservation_Code) {
        $stmt = $this->connect()->prepare("SELECT Collection_Code  FROM reservation WHERE Reservation_Code = ?");

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





    // update column status in table reservation
    public function updatestatusReservation($Reservation_Code) {
        $stmt = $this->connect()->prepare("UPDATE reservation SET Status = 'Borrowed' WHERE Reservation_Code = ?;");
    
        if (!$stmt->execute(array($Reservation_Code))) {
          $stmt = null;
          header("location: items.php?erer=stmtfailed");
          exit();
        }
        $stmt = null;
    }



}
?>
