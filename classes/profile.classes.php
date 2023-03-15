<?php
include "/xampp/htdocs/library_brief-16/classes/dbh.classes.php";
  
  class ProfileInfo extends Dbh {

    protected function getProfileInfo($Nickname) {
        $stmt = $this->connect()->prepare('SELECT * FROM client WHERE Nickname = ?;');

        if(!$stmt->execute([$Nickname])) {

            $stmt = null;
            header("location: ../index.php?erer=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {

            $stmt = null;
            header("location: ../index.php?erer=ProfileNotFound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $profileData;
    }
    
    protected function updetProfileInfo($Nickname, $Name, $Address, $Email, $Phone, $CIN, $Occupation, $Birth_Date) {
        $stmt = $this->connect()->prepare('UPDATE client SET Nickname = ?, Name = ?, Address = ?, Email = ?, Email = ?, Phone = ?, CIN = ?, Occupation = ?, Birth_Date = ?, WHERE Nickname = ?;');

        if(!$stmt->execute(array($Nickname, $Name, $Address, $Email, $Phone, $CIN, $Occupation, $Birth_Date))) {

            $stmt = null;
            header("location: ../index.php?erer=stmtfailed");
            exit();
        }

        $stmt = null;

    }

    // // ============================================================================================

    // protected function InsertProfileInfo($Nickname, $Name, $Address, $Email, $Phone, $CIN, $Occupation, $Birth_Date) {
    //     // $stmt = $this->connect()->prepare('UPDATE client SET Nickname = ?, Name = ?, Address = ?, Email = ?, Email = ?, Phone = ?, CIN = ?, Occupation = ?, Birth_Date = ?, WHERE Nickname = ?;');
    //     $stmt = $this->connect()->prepare("INSERT INTO client (Nickname, Name, Password, Address, Email, Phone, CIN, Occupation, Birth_Date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    //     if(!$stmt->execute(array($Nickname, $Name, $Address, $Email, $Phone, $CIN, $Occupation, $Birth_Date))) {

    //         $stmt = null;
    //         header("location: ../index.php?erer=stmtfailed");
    //         exit();
    //     }

    //     $stmt = null;

    //     // if ($stmt->rowCount() == 0) {

    //     //     $stmt = null;
    //     //     header("location: ../index.php?erer=ProfileNotFound");
    //     //     exit();
    //     // }
        
    //     // $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // }
    // // ============================================================================================


  }


?>