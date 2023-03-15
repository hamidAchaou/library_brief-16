<?php
include "/xampp/htdocs/library_brief-16/classes/profile.classes.php";

  class ProfileInfoContr extends ProfileInfo {

    public function fetchName($Nickname) {
      $profileInfo = $this->getProfileInfo($Nickname);

      echo $profileInfo[0]["Name"];
    }

    public function fetchNickName($Nickname) {
        $profileInfo = $this->getProfileInfo($Nickname);

      echo $profileInfo[0]["Nickname"];
    }

    public function fetchAddress($Nickname) {
        $profileInfo = $this->getProfileInfo($Nickname);

      echo $profileInfo[0]["Address"];
    }

    public function fetchEmail($Nickname) {
        $profileInfo = $this->getProfileInfo($Nickname);

      echo $profileInfo[0]["Email"];
    }

    public function fetchPhone($Nickname) {
        $profileInfo = $this->getProfileInfo($Nickname);

      echo $profileInfo[0]["Phone"];
    }

    public function fetchCIN($Nickname) {
        $profileInfo = $this->getProfileInfo($Nickname);

      echo $profileInfo[0]["CIN"];
    }

    public function fetchOccupation($Nickname) {
        $profileInfo = $this->getProfileInfo($Nickname);

      echo $profileInfo[0]["Occupation"];
    }

    public function fetchBirthDate($Nickname) {
        $profileInfo = $this->getProfileInfo($Nickname);

      echo $profileInfo[0]["Birth_Date"];
    }

    public function fetcDateCreation($Nickname) {
        $profileInfo = $this->getProfileInfo($Nickname);

      echo $profileInfo[0]["Creation_Date"];
    }
    
  }

  ?>
