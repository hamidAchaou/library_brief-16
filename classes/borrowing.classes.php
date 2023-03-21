<?php
include "dbh.classes.php";

class confirmBorrowing extends Dbh {
        // select data in three table (reservation, collection, client) for confirme emprunt
        public function showResrvEmprunt() {
            $stmt = $this->connect()->prepare("SELECT * 
            FROM reservation 
            INNER JOIN collection 
            ON reservation.Collection_Code = collection.Collection_Code 
            INNER JOIN client 
            ON reservation.Nickname = client.Nickname 
            INNER JOIN borrowings
            ON reservation.Reservation_Code  = borrowings.Reservation_Code  
            WHERE borrowings.Status = 'Borrowed';
            ");
            if(!$stmt->execute()) {
                $stmt = null;
                header("location: ../home.page.admin.php?erer=stmtfailed");
                exit();
            }
    
    
    
            $confirmeData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $confirmeData;
        }
            
        // confirme borrowings (change value status in table borrowings)
        public function confirmeEmpeunt($Reservation_Code) {
            $stmt = $this->connect()->prepare("UPDATE borrowings SET Status = 'Returned' WHERE Reservation_Code = ?;");

            if (!$stmt->execute(array($Reservation_Code))) {
            $stmt = null;
            header("location: items.php?erer=stmtfailed");
            exit();
            }
            $stmt = null;
        }

        // update column status in table collection
        public function updatestatusCollection($Collection_Code) {
            $stmt = $this->connect()->prepare("UPDATE collection SET Status = 'Available' WHERE Collection_Code  = ?;");
        
            if (!$stmt->execute(array($Collection_Code ))) {
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
}

?>