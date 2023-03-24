<?php
require_once "dbh.classes.php";

class myReservation extends Dbh {
    public function getMyReservation($Nickname, $limit, $start) {
        $stmt = $this->connect()->prepare('SELECT r.*, c.* 
        FROM reservation r 
        INNER JOIN collection c ON r.Collection_Code = c.Collection_Code 
        WHERE r.Nickname = ?
        LIMIT ? , ?;');
        
        $stmt->bindParam(1, $Nickname, PDO::PARAM_STR); 
        $stmt->bindParam(2, $limit, PDO::PARAM_INT);
        $stmt->bindParam(3, $start, PDO::PARAM_INT); 
    
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../myReservation.php?error=stmtfailed");
            exit();
        }
    
    
        $myReservationData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $myReservationData;
    }
    

    public function getMyReservationCount($Nickname) {
        $stmt = $this->connect()->prepare('SELECT * FROM reservation RIGHT  JOIN collection ON reservation.Collection_Code = collection.Collection_Code WHERE Nickname = ?;');
        if(!$stmt->execute([$Nickname])) {
            $stmt = null;
            header("location: ../myReservation.php?error=stmtfailed");
            exit();
        }
        $myReservationDataCount = $stmt->rowCount();
        return $myReservationDataCount;
    }



}

?>
