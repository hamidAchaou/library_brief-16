<?php
// include "dbh.classes.php";
class signup extends Dbh
{
  // cheack password and email is alridy in databases$$
  protected function setUser($Nickname, $Name, $Password, $Address, $email, $Phone, $CIN, $Occupation, $Birth_Date)
  {
    $stmt = $this->connect()->prepare("INSERT INTO members (Nickname, Name, Password, Address, Email, Phone, CIN, Occupation, Birth_Date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");


    $hashedpass = password_hash($Password, PASSWORD_DEFAULT);

    if (!$stmt->execute(array($Nickname, $Name, $hashedpass, $Address, $email, $Phone, $CIN, $Occupation, $Birth_Date))) {
      $stmt = null;
      header("location: ../loginSignUp.php?erer=stmtfailed");
      exit();
    }

    $stmt = null;
  }

  // cheack password and email is alridy in databases
  protected function checkUser($name, $email)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM members WHERE Nickname = ? OR Email = ?;');

    if (!$stmt->execute(array($name, $email))) {
      $stmt = null;
      header("location: ../loginSignUp.php?erer=stmtfailed");
      exit();
    }

    if ($stmt->rowCount() > 0) {
      return false;
    } else {
      return  true;
    }
  }
}


?>