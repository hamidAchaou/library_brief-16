<!-- serch in Items bt author Name Or Titel or Type -->
<?php
// declare class connecte databases
include "/xampp/htdocs/library_brief-16/classes/dbh.classes.php";

// create class that searches the collection table by author or title
  class SerchInItems extends Dbh {

    public function itemsSerch($Author_Name, $Title) {
        $stmt = $this->connect()->prepare('SELECT * FROM collection WHERE Author_Name = ? OR Title = ?');
        if ($stmt->execute([$Author_Name, $Title])) {
            header("location: ../items.php?erer=stmtfailed");
            exit();
        }
        $serchData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $serchData;
    }
    
  }
?>