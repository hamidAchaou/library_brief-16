<!-- serch in Items bt author Name Or Titel or Type -->
<?php
// declare class connecte databases
// include "/xampp/htdocs/library_brief-16/classes/dbh.classes.php";

// create class that searches the collection table by author or title
  class SearchInItems extends Dbh {

    public function itemsSearch($Author_Name, $Title) {
        $stmt = $this->connect()->prepare('SELECT * FROM collection WHERE Author_Name LIKE ? OR Title LIKE ?');
        if (!$stmt->execute(["%$Author_Name%", "%$Title%"])) {
            echo "Statement execution failed";
            exit();
        }
        $searchData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $searchData;
    }
    
  }

?>