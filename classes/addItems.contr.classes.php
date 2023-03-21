<?php
  class addItemsContr extends AddItems {

    private $Title	;
    private $Author_Name;
    private $Cover_Image;
    private $State;
    private $Edition_Date;
    private $Buy_Date;
    private $Status	;
    private $Type	;
    private $Pages_Number;

    public function __construct($Title, $Author_Name, $Cover_Image, $State, $Edition_Date, $Buy_Date, $Status , $Type, $Pages_Number ) {
        $this->Title = $Title	;
        $this->Author_Name = $Author_Name;
        $this->Cover_Image = $Cover_Image;
        $this->State = $State;
        $this->Edition_Date = $Edition_Date;
        $this->Buy_Date = $Buy_Date;
        $this->Status = $Status	;
        $this->Type = $Type;
        $this->Pages_Number = $Pages_Number;
    }

    public function AddItems() {

      if ($this->emptyInput() == false) {
        // echo "invalid emptyinput"
        header("location: ../add-items.admin.php?erer=empty");

        exit();
      }
      if ($this->invalidTitle() == false) {
          // echo "invalid Name"
          header("location: ../add-items.admin.php?erer=Title");
          exit();
      }
      
        if ($this->invalidAuthorName() == false) {
            // echo "invalid Name"
            header("location: ../add-items.admin.php?erer=AuthorName");
            exit();
        }

        $this->setItem($this->Title, $this->Author_Name, $this->Cover_Image, $this->State, $this->Edition_Date, $this->Buy_Date, $this->Status, $this->Type, $this->Pages_Number );

    }


    // cheack empty input
    private function emptyInput() {
        if (empty($this->Title) || empty($this->Author_Name) || empty($this->State) || empty($this->Edition_Date) || empty($this->Buy_Date) || empty($this->Status) || empty($this->Pages_Number)) {
          return false;
        } else {
          return true;
        }
      }
      
    // cheack Title
    private function invalidTitle() {
        if (preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $this->Title)) {
        return true;
        } else {
        return false;
        }
    }
    // cheack AuthorName
    private function invalidAuthorName() {
        if (preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $this->Author_Name)) {
        return true;
        } else {
        return false;
        }
    }
  }
?>