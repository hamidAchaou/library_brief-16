<?php
require_once "dbh.classes.php";

class myReservation extends Dbh {
    public function getMyReservation($Nickname) {
        $stmt = $this->connect()->prepare('SELECT * FROM reservation RIGHT  JOIN collection ON reservation.Collection_Code = collection.Collection_Code WHERE Nickname = ?;');
        if(!$stmt->execute([$Nickname])) {
            $stmt = null;
            header("location: ../myReservation.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            echo "Profile not found";
        }
        $myReservationData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $myReservationData;
    }
}

?>
