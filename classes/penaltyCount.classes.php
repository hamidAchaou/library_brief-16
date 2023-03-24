<?php
include "/xampp/htdocs/library_brief-16/classes/dbh.classes.php";

class PenaltyCount extends Dbh {
    // get Borrowing Return Date in table borrowings In order to compare it with today's date
    public function getBorrowingReturnDate($Nickname) {
        $stmt = $this->connect()->prepare("SELECT Borrowing_Return_Date, Status FROM borrowings WHERE Nickname = ?;");

        if (!$stmt->execute(array($Nickname))) {
            $stmt = NULL;
            header("location: ../index.php?erer=stmtfailed");
            exit();
        }

        $penaltyCountData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $penaltyCountData;
    }

    public function insertPenaltyCount($Nickname) {
        $stmt = $this->connect()->prepare("UPDATE client SET Penalty_Count = Penalty_Count + 1 WHERE Nickname = ?;");
    
        if (!$stmt->execute(array($Nickname))) {
            $stmt = NULL;
            header("location: ../index.php?erer=stmtfailed");
            exit();
        }
    }
    
}

?>