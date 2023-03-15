<?php
// create class connect databases library_managment_system
  class Dbh {

    protected function connect() {
      try {
        $username = "root";
        $password = "";
        $dbh = new PDO('mysql: host=;dbname=library_managment_system', $username, $password);
        return $dbh;
      }
      catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "</br>";
        die();
      }
    }
  }
?>