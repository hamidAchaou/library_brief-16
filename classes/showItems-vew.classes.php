<?php
include "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";

  class collectionInfoContr extends AddItems {


    public function fetchTitle($Collection_Code) {
      $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Title"];
    }

    public function fetchAuthor_Name($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Author_Name"];
    }

    public function fetchCover_Image($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Cover_Image"];
    }

    public function fetchState($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["State"];
    }

    public function fetchEdition_Date($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Edition_Date"];
    }

    public function fetchBuy_Date($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Buy_Date"];
    }

    public function fetchStatus($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Status"];
    }

    public function fetchType($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Type"];
    }

    public function fetcPages_Number($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Pages_Number"];
    }
    
  }

  ?>
