<?php

class signupContr extends signup
{
  private $nickname;
  private $name;
  private $adresse;
  private $email;
  private $phone;
  private $cin;
  private $dateOfBirth;
  private $occupation;
  private $pass;
  private $repeatPass;

  public function __construct($nickname, $name, $pass, $adresse, $email, $phone, $cin, $occupation, $dateOfBirth, $repeatPass)
  {
    $this->nickname = $nickname;
    $this->name = $name;
    $this->pass = $pass;
    $this->adresse = $adresse;
    $this->email = $email;
    $this->phone = $phone;
    $this->cin = $cin;
    $this->occupation = $occupation;
    $this->dateOfBirth = $dateOfBirth;
    $this->repeatPass = $repeatPass;
  }

  public function signupUser() {
    if ($this->emptyInput() == false) {
      // echo "invalid emptyinput"
      header("location: ../index.php?erer=emptyinput");
      exit();
    }
    if ($this->invalidName() == false) {
      // echo "invalid Name"
      header("location: ../index.php?erer=Name");
      exit();
    }
    if ($this->invalidNickname() == false) {
      // echo "invalid Nickname"
      header("location: ../index.php?erer=Nickname");
      exit();
    }
    if ($this->invalidEmail() == false) {
      // echo "invalid Email"
      header("location: ../index.php?erer=Email");
      exit();
    }
    if ($this->passMatch() == false) {
      // echo "invalid passMatch"
      header("location: ../index.php?erer=passMatch");
      exit();
    }
    if ($this->nameTakenCheack() == false) {
      // echo "invalid nameTakenCheack"
      header("location: ../index.php?erer=passMatch");
      exit();
    }


    $this->setUser($this->nickname, $this->name, $this->pass, $this->adresse, $this->email, $this->phone, $this->cin, $this->occupation, $this->dateOfBirth);
  }

  private function emptyInput() {
    if (empty($this->name) || empty($this->nickname) || empty($this->email) || empty($this->adresse) || empty($this->phone) || empty($this->cin) || empty($this->dateOfBirth) || empty($this->occupation) || empty($this->pass) || empty($this->repeatPass)) {
      return false;
    } else {
      return true;
    }
  }

  // cheack Name
  private function invalidName() {
    if (preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $this->name)) {
      return true;
    } else {
      return false;
    }
  }

  // cheack Nickname
  private function invalidNickname() {
    if (preg_match("/^[a-zA-Z0-9_-]{3,16}$/", $this->nickname)) {
      return true;
    } else {
      return false;
    }
  }

  // cheack Email
  private function invalidEmail() {
    if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }

  // cheack password and confPassword
  private function passMatch() {
    if ($this->pass !== $this->repeatPass) {
      return false;
    } else {
      return true;
    }
  }

  // cheack
  private function nameTakenCheack() {
    if (!$this->checkUser($this->name, $this->email)) {
      return false;
    } else {
      return true;
    }
  }
}

?>