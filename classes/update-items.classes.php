<?php
// get class databases
include "/xampp/htdocs/library_brief-16/classes/dbh.classes.php";
class UpdateItems extends Dbh {

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

}

?>