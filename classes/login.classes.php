<?php
include "../classes/dbh.classes.php";
class login extends Dbh
{

  // cheack password and email is alridy in databases$$
  protected function getUser($email, $Password)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM members WHERE Email = ? ;');

    if (!$stmt->execute(array($email))) {
      $stmt = null;
      header("location: ../loginSignUp.php?erer=stmtfailed");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("location: ../loginSignUp.php?error=usernorfoundEmail");
      exit();
    }

    $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkPass = password_verify($Password, $loginData[0]["Password"]);


    if ($checkPass == false) {
      $stmt = null;
      header("location: ../loginSignUp.php?erer=worningpassword");
      exit();
    } elseif ($checkPass == true) {

      $stmt = $this->connect()->prepare("SELECT * FROM members WHERE Email = ? AND Password = ?");

      if (!$stmt->execute(array($email, $loginData[0]['Password']))) {
        $stmt = null;
        header('location: ../index.php?error=stmtfailed');
        exit();
      }
      if ($stmt->rowCount() == 0) {
        $stmt = null;
        header('location: ../index.php?error=usernotfoundPass');
        exit();
      }


      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

      session_start();

      $_SESSION['nickName'] = $user[0]["Nickname"];
      $_SESSION['name'] = $user[0]["name"];
      

      $stmt = null;
    }
  }
}

?>